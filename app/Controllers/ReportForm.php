<?php

namespace App\Controllers;

use App\Models\FirebaseModel;
use CodeIgniter\Controller;

class ReportForm extends Controller
{
    public function submitForm()
    {

        $formData = [

            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'location' => $this->request->getPost('location'),
            'district' => $this->request->getPost('district'),
            'contact' => $this->request->getPost('contact'),
            'date' => $this->request->getPost('date'),
            'time' => $this->request->getPost('time'),
            'office' => $this->request->getPost('office'),
        ];

        // Save the form data to the Realtime Database
        $this->saveFormData($formData);

        return redirect()->to('/');
    }

    private function saveFormData($data)
    {
        // Instantiate the FirebaseModel
        $firebaseModel = new FirebaseModel();

        // Specify the path in the Realtime Database where the data will be saved
        $path = 'complaints';

        // Save the form data to the specified path
        $firebaseModel->saveData($path, $data);
    }
}



// submit function with the email address from the session 
/* public function submitForm()
    {

        // Retrieve email address from the session
        $email = session()->get('email');

        // Check if the email address is available in the session
        if ($email) {
            // Form data
            $formData = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'location' => $this->request->getPost('location'),
                'district' => $this->request->getPost('district'),
                'contact' => $this->request->getPost('contact'),
                'date' => $this->request->getPost('date'),
                'time' => $this->request->getPost('time'),
                'office' => $this->request->getPost('office'),
                'email' => $email, // Add email address to form data
            ];

            // Save the form data to the Realtime Database
            $this->saveFormData($formData);

            return redirect()->to('/');
        } else {
            // Handle the case where the email address is not available in the session
            // You can redirect the user to the login page or take appropriate action
            return redirect()->to('/login');
        }
    } */