<?php

namespace App\Models;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseModel
{
    private $database;

    // public function __construct()
    // {
    //     $serviceAccount = ServiceAccount::fromValue(config('Firebase')->credentialsPath);

    //     $firebase = (new Factory())
    //         ->withServiceAccount($serviceAccount)
    //         ->withDatabaseUri(config('Firebase')->databaseUrl);

    //     $this->database = $firebase->createDatabase();
    // }

    public function __construct($url=null) {
        if(isset($url)){
           $this->url = $url;
        }else{
           echo "Database URL must be specified";
        }
     }

    public function getData($path)
    {
        $reference = $this->database->getReference($path);
        $snapshot = $reference->getSnapshot();

        return $snapshot->getValue();
    }

    // Add other methods as needed

    
// Methods used by User
    
    //Used by other methods to grab data from table
    public function grab($url, $method, $par=null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if(isset($par)){
            curl_setopt($ch, CURLOPT_POSTFIELDS, $par);
        }
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $html = curl_exec($ch);
        return $html;
        curl_close($ch);
    }
    
    //Method to insert new data to table    
    public function insert($table, $data){
        $path = $this->url."/$table.json";
        $grab = $this->grab($path, "POST", json_encode($data));
        return $grab;
    }
    
    //Method to update data to table using ID
    public function update($table, $uniqueID, $data){
        $path = $this->url."/$table/$uniqueID.json";
        $grab = $this->grab($path, "PATCH", json_encode($data));
        return $grab;
    }
    
    //Method to delete data from table using ID
    public function delete($table, $uniqueID){
        $path = $this->url."/$table/$uniqueID.json";
        $grab = $this->grab($path, "DELETE");
        return $grab;
    }
    
    //Method to retrive data from table using ID
    public function retrieve($dbPath, $queryKey=null, $queryType=null, $queryVal =null){
        if(isset($queryType) && isset($queryKey) && isset($queryVal)){
            $queryVal = urlencode($queryVal);
            if($queryType == "EQUAL"){
                $pars = "orderBy=\"$queryKey\"&equalTo=\"$queryVal\"";
            }elseif($queryType == "LIKE"){
                $pars = "orderBy=\"$queryKey\"&startAt=\"$queryVal\"";
            }
        }
        $pars = isset($pars) ? "?$pars" : "";
        $path = $this->url."/$dbPath.json$pars";
        $grab = $this->grab($path, "GET");
        return $grab;
    }

    //Method to get all data from table
    public function fetch($table) {
        // Construct the URL for the Firebase Realtime Database endpoint
        $path = $this->url . "/$table.json";
        // Use the $this->grab() method to perform a GET request
        $grab = $this->grab($path, "GET");
        // Decode the JSON response into an associative array
        $data = json_decode($grab, true);
        // Return the fetched data
        return $data;
    }

    // Method to get data from Table which meets 1 condition 
    public function fetchWithCondition($table, $conditionField, $conditionValue) {
        // Construct the URL for the Firebase Realtime Database endpoint
        $path = $this->url . "/$table.json";

        // Use the $this->grab() method to perform a GET request
        $grab = $this->grab($path, "GET");
    
        // Decode the JSON response into an associative array
        $data = json_decode($grab, true);
        if($data==""){
            return $data;
        }
    
        // Filter the data based on the specified condition
        $filteredData = array_filter($data, function ($item) use ($conditionField, $conditionValue) {
            return isset($item[$conditionField]) && $item[$conditionField] == $conditionValue;
        });
    
        // Return the filtered data
        return $filteredData;
    }

    // Method to get data from Table which meets multiple conditions
    public function fetchWithMultiConditionsFilter($table, $conditions = []) {
        // Fetch all data from the specified table
        $allData = $this->fetch($table);
    
        // Filter the data based on conditions
        $filteredData = array_filter($allData, function($item) use ($conditions) {
            foreach ($conditions as $key => $value) {
                if (!isset($item[$key]) || $item[$key] != $value) {
                    return false;
                }
            }
            return true;
        });
    
        return $filteredData;
    }
    
    
    
}