<?php

namespace App\Models;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseModel
{
    private $database;

    public function __construct()
    {
        // Load the Firebase configuration from Config/Firebase.php
        $serviceAccount = ServiceAccount::fromValue(config('Firebase')->credentialsPath);

        $firebase = (new Factory())
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri(config('Firebase')->databaseUrl);

        $this->database = $firebase->createDatabase();
    }

    public function getData($path)
    {
        $reference = $this->database->getReference($path);
        $snapshot = $reference->getSnapshot();

        return $snapshot->getValue();
    }

    public function saveData($path, $data)
    {
        // Get the current highest ID in the collection
        $highestId = $this->getHighestId($path);

        // Increment the highest ID to get the next sequential ID
        $nextId = $highestId + 1;

        // Append the data with the new ID
        $data['id'] = $nextId;

        // Save the form data to the specified path with the new ID
        $reference = $this->database->getReference($path)->getChild($nextId);
        $reference->set($data);

        return $nextId;
    }

    private function getHighestId($path)
    {
        // Get all entries in the collection
        $entries = $this->database->getReference($path)->getSnapshot()->getValue();

        // Initialize the highest ID variable
        $highestId = 0;

        // Loop through the entries to find the highest ID
        foreach ($entries as $entry) {
            if (isset($entry['id']) && $entry['id'] > $highestId) {
                $highestId = $entry['id'];
            }
        }

        // Return the highest ID
        return $highestId;
    }

    public function getReportHistory($email)
    {
        $collections = ['accepted', 'declined', 'investigating', 'resolved']; // Add more collections as needed
        $reportHistory = [];

        foreach ($collections as $collection) {
            $path = $collection;
            $data = $this->getReportsByEmail($path, $email);

            if ($data) {
                // Add an extra field for the collection status
                foreach ($data as &$report) {
                    $report['status'] = $collection;
                }

                // Merge data from different collections
                $reportHistory = array_merge($reportHistory, $data);
            }
        }

        return $reportHistory;
    }

    private function getReportsByEmail($path, $email)
    {
        $reference = $this->database->getReference($path);
        $snapshot = $reference->orderByChild('email')->equalTo($email)->getSnapshot();

        return $snapshot->getValue();
    }
    
}