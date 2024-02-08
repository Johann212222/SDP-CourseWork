<?php

namespace App\Controllers;

use App\Models\FirebaseModel;
use CodeIgniter\Controller;

class ReportHistory extends Controller
{
    public function index()
    {
        // Get the user's email from the session
        $email = session()->get('email');

        // Retrieve report history based on email
        $firebaseModel = new FirebaseModel();
        $data['reportHistory'] = $firebaseModel->getReportHistory($email);

        return view('report_history', $data);
    }
}