<?php
namespace App\Controllers\users;
use App\Controllers\BaseController;
use App\Models\FirebaseModel;
use Config\Firebase;

// defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Admin Dashboard';
        return view('layouts/users/header',$data)
        // . view('layouts/users/sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/admin/index',$data)
        . view('layouts/users/footer');
    }

    public function deptadmin()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        // Database query
        $tableName = "user_emp";
        $conditionField = "role_id"; // Replace with the actual field name
        $conditionValue = 2; // Replace with the desired value

        $fetchedData = $db->fetchWithCondition($tableName, $conditionField, $conditionValue);
        
        // Passing information to $data
        $data['user_member'] = $fetchedData;
        $data['title'] = 'Department Admin User Data';
    
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/admin/deptadmin',$data)
        . view('layouts/users/footer');
    }

    public function viewdeptadmin($id)
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);
        $retrieve = $db->retrieve("user_emp/$id");
        $data = json_decode($retrieve, 1);

        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/admin/deptadmin_view',$data);
        // . view('layouts/users/footer');
    }

    public function editdeptadmin($id)
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        $rules = [
            'name' => ['label' => 'name', 'rules' => 'required'],
        ];
        
        if (! $this->validate($rules)) {
            $data['title'] = 'Change Department Admin User Data';
            // $data['user'] = $this->db->get_where('user', ['email' => session()->userdata('email')])->row_array();
            $retrieve = $db->fetch("user_emp/$id");
            // $data = json_decode($retrieve, 1);
            $data['user'] = $retrieve;
            $data['userid'] = $id;
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/admin/deptadmin_edit',$data)
            . view('layouts/users/footer');
        }else{
            $validData = $this->validator->getValidated();
            // $request = \Config\Services::request();
            $data = [
            // 'id' => $this->input->post('id'),
            
            // 'name' => $validData['name'],
            // 'email' => $validData['email'],
            // 'role_id' => $validData['role_id'],
            // 'is_active' => $validData['is_active'],
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'role_id' => $this->request->getPost('role_id'),
            'is_active' => $this->request->getPost('is_active')
            ];

            $update = $db->update('user_emp',$id,$data);    
            session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
            User data changed successfully!</div>');
            return redirect()->to('admin/deptadmin');
        }

    }

    public function adddeptadmin()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        if (! $this->request->is('post')) {
            $data['title'] = 'Create New Department Admin User';
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/admin/deptadmin_add',$data)
            . view('layouts/users/footer');
        }

        $rules = [
            'name' => ['label' => 'Full Name', 'rules' => 'required|max_length[30]'],
            'email' => ['label' => 'Email', 'rules' => 'required|max_length[254]|valid_email'],
        ];

        if (! $this->validate($rules)) {
            $db = db_connect();
            $builder = $db->table('institute');
            $query = $builder->get();
            $data['institute'] = $query->getRowArray();

            $builder = $db->table('institute_sub');
            $query = $builder->get();
            $data['institute_sub'] = $query->getRowArray();

            $data['title'] = 'Create New Department Admin User';
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/admin/deptadmin_add',$data)
            . view('layouts/users/footer');
        }

        //get the validated data.
        $validData = $this->validator->getValidated();
        $name = $validData['name'];
        $email = $validData['email'];
        
        //Check if email exists
        //DB query
        $tableName = "user_emp";
        $conditionField = "email"; // Replace with the actual field name
        $conditionValue = $email; // Replace with the desired value

        $fetchedData = $db->fetchWithCondition($tableName, $conditionField, $conditionValue);
        // if (sizeof($fetchedData)>0) {

        //     session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
        //     Sorry, user email already exists!</div>');
            
        //     return redirect()->to('admin/deptadmin/add');
        // }else{
            //add validated data to db.
            
            $password = $validData['password1'];
            date_default_timezone_set("Asia/Kolkata");
            $timestamp = date('Y-m-d H:i:s');
            // $timestamp = "TO_DATE('$timestamp','yyyy/mm/dd hh24:mi:ss')";   
            $data = [
                'name' => $name,
                'email' => $email,
                'institute' => $this->request->getPost('institute_id'),
                'designation' => 0,
                'image' => 'admin-icn.png',
                'password' => password_hash('Password@123',PASSWORD_BCRYPT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => $timestamp,
                'last_modified' => $timestamp
            ];
            $insert = $db->insert("user_emp",$data);
            session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Department Admin has been created successfully.</div>');
            
            return redirect()->to('admin/deptadmin');

        // }
        
    }

    // data member info
    public function datamember()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        // Database query
        $tableName = "user_complainant";
        $fetchedData = $db->fetch($tableName);
        
        // Passing information to $data
        $data['user_member'] = $fetchedData;
        $data['title'] = 'User(Complaintant) Data';
    
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/admin/data_member',$data)
        . view('layouts/users/footer');
    }

    // info detail member
    public function detailmember($id)
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);
        $retrieve = $db->retrieve("user_complainant/$id");
        $data = json_decode($retrieve, 1);

        $data['title'] = 'User Data Info';
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/admin/detail_member',$data)
        . view('layouts/users/footer');

    }

    public function editmember($id)
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        $rules = [
            'name' => ['label' => 'name', 'rules' => 'required'],
        ];
        
        if (! $this->validate($rules)) {
            $data['title'] = 'Change User Data';

            $retrieve = $db->fetch("user_complainant/$id");
            $data['user'] = $retrieve;
            $data['userid'] = $id;
            
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/admin/edit_member',$data)
            . view('layouts/users/footer');
        }else{
            $validData = $this->validator->getValidated();
            $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'is_active' => $this->request->getPost('is_active')
            ];

            $update = $db->update('user_complainant',$id,$data);    
            session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
            User data changed successfully!</div>');
            return redirect()->to('admin/userdata');

        }

    }
}
