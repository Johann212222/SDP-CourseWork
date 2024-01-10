<?php
namespace App\Controllers\users;
use App\Controllers\BaseController;
use App\Models\FirebaseModel;
use Config\Firebase;

// defined('BASEPATH') OR exit('No direct script access allowed');

class DeptempController extends BaseController
{

    

    public function deptadmindashboard(): string
    {
        $data['title'] = 'Admin Dashboard';
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/user_dept/admin_dash',$data)
        . view('layouts/users/footer');
    }

    public function deptdashboard(): string
    {
        $data['title'] = 'Dashboard';
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/user_dept/index',$data)
        . view('layouts/users/footer');
    }

    public function deptemp()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);
        

        $institute = session()->get('userinfo')['institute'];
        //DB query
        $tableName = "user_emp";
        
        // $multipleConditions = $db->fetch('user_emp', ['role_id' => 3, 'institute' => 3]);
        $fetchedData = $db->fetchWithMultiConditionsFilter('user_emp', ['role_id' => 3, 'institute' => $institute]);
        // var_dump($fetchedData);
        $data['user'] = $fetchedData;
        $data['title'] = 'Department Employee Data';
    
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/user_dept/deptemp',$data)
        . view('layouts/users/footer');
    }

    public function viewdeptemp($id)
    {
        return view('success');
        // echo $id;
        // //Load Database
        // $fb = new Firebase();
        // $url = $fb->databaseUrl;
        // $db = new FirebaseModel($url);
        // $retrieve = $db->retrieve('user_emp/$id');
        // $data['member'] = json_decode($retrieve, 1);

        // $data['title'] = 'Department Employee Info';

        // return view('layouts/users/header',$data)
        // // . view('layouts/admin_sidebar',$data)
        // . view('layouts/users/topbar')
        // . view('users/user_dept/deptemp_view',$data)
        // . view('layouts/users/footer');
    }

    public function editdeptemp($id)
    {
        $rules = [
            'name' => ['label' => 'name', 'rules' => 'required'],
            // 'email' => ['label' => 'email', 'rules' => 'required'],
            // 'role_id' => ['label' => 'role_id', 'rules' => 'required'],
            // // 'is_active' => ['label' => 'is_active', 'rules' => 'required'],
        ];
        
        if (! $this->validate($rules)) {
            $data['title'] = 'Change Department Employee Info';
            // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $db = db_connect();
            $builder = $db->table('user_emp');
            $query = $builder->getWhere(['id' => $id]);
            $data['member'] = $query->getRowArray();
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/user_dept/deptemp_edit',$data)
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

            $db = db_connect();
            $builder = $db->table('user_emp');
            $builder->where('id', $id);
            $builder->update($data);    
            $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
            User data changed successfully!</div>');
            return redirect()->to('dept/employee');
        }

    }

    public function adddeptemp()
    {
        if (! $this->request->is('post')) {
            $data['title'] = 'Create New Department Employee';
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/user_dept/deptemp_add',$data)
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

            $data['title'] = 'Create New Department Employee';
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/user_dept/deptemp_add',$data)
            . view('layouts/users/footer');
        }

        //get the validated data.
        $validData = $this->validator->getValidated();
        $name = $validData['name'];
        $email = $validData['email'];
        
        //Check if email exists
        $db = db_connect();
        $builder = $db->table('user_emp');
        $query = $builder->getWhere(['email' => $email]);
        if($query->getNumRows() > 0) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
            Sorry, user email already exists!</div>');
            
            return redirect()->to('dept/employee/add');
        }else{
            //add validated data to db.
            
            $password = $validData['password1'];
            date_default_timezone_set("Asia/Kolkata");
            $timestamp = date('Y-m-d H:i:s');
            // $timestamp = "TO_DATE('$timestamp','yyyy/mm/dd hh24:mi:ss')";   
            $data = [
                'name' => $name,
                'email' => $email,
                'institute' => $this->session->get('institute'),
                'designation' => $this->request->getPost('designation'),
                'image' => 'default.jpg',
                'password' => password_hash('Password@123',PASSWORD_BCRYPT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => $timestamp
            ];
            $db = db_connect();
            $builder = $db->table('user_emp');
            $builder->insert($data);
            // return view('form');

            
            // $session->setFlashdata('message', '<div class="alert alert-success" role="alert">
            // Your account has been created successfully. Please check your email to activate your account!</div>');
            $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Department Admin has been created successfully.</div>');
            
            return redirect()->to('dept/employee');

        }
        
    }

    public function deletedeptemp($id)
    {
        $db = db_connect();
        $builder = $db->table('user_emp');

        $builder->delete(['id' => $id]);
        
        $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Employee has been deleted successfully.</div>');
            
            return redirect()->to('dept/employee');
    }

}
