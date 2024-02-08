<?php

namespace App\Models;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseModel
{
    private $database;

    public function __construct()
    {
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

        // Get the current count of entries in the collection
        $count = $this->getEntryCount($path);

        // Get the current count of entries in the collection
        //$count = $this->getHighestId($path);

        // Increment the count to get the next sequential ID
        $nextId = $count + 1;

        // Append the data with the new ID
        $data['id'] = $nextId;

        // Save the form data to the specified path with the new ID
        $reference = $this->database->getReference($path)->getChild($nextId);
        $reference->set($data);

        return $nextId;
    }

    private function getEntryCount($path)
    {
        // Get the count of entries in the collection
        $snapshot = $this->database->getReference($path)->getSnapshot();

        // Return the count
        return $snapshot->numChildren();
    }

    
}