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

    
}