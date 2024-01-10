<?php
namespace App\Controllers\users;
use App\Controllers\BaseController;
use App\Models\FirebaseModel;
use Config\Firebase;

// defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends BaseController
{
    public function home()
    {
        $role = session()->get('userinfo')['role'];
        if($role == 1){
            return redirect()->to('/admin');
        }elseif($role == 2){
            return redirect()->to('/dept/dashboard');
        }else{
            return redirect()->to('/dashboard');
        }
    }

    public function myprofile(): string
    {
        $data['title'] = 'My Profile';
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/myprofile',$data)
        . view('layouts/users/footer');
    }

    public function editmyprofile()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);
        
        if (! $this->request->is('post')) {
            $data['title'] = 'Update Profile';
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/myprofile_edit',$data)
            . view('layouts/users/footer');
        }

        $rules = [
            'name' => ['label' => 'name', 'rules' => 'required|max_length[30]'],
        ];

        if (! $this->validate($rules)) {
            $data['title'] = 'Update Profile';
            return view('layouts/users/header',$data)
            // . view('layouts/admin_sidebar',$data)
            . view('layouts/users/topbar')
            . view('users/myprofile_edit',$data)
            . view('layouts/users/footer');
        } else {
            
            // // upload image
            // $upload_image = $_FILES['image']['name'];
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $image = $this->request->getPost('image');
            $timestamp = date('Y-m-d H:i:s');

            if($image==""){
                $updatedata = [
                    'name' => $name,
                    'last_modified' => $timestamp
                ];
            }else{
                $updatedata = [
                    'name' => $name,
                    'image' => $image,
                    'last_modified' => $timestamp
                ];
            }
            
            $uid = session()->get('userinfo')['uid'];
            $table = session()->get('userinfo')['table'];

            echo $uid;
            echo $table;
            

        //     $userdata = session()->get('userdata');
        // if($userdata['role_id'] == 0){
        //     $table = 'user_complainant';
        // }elseif($userdata['role_id'] == 1){
        //     $table = 'user_admin';
        // }else{
        //     $table = 'user_emp';
        // }

        // $fetchdata = $db->fetchWithCondition($table,'email',$userdata['email'] );
        // $data['title'] = 'Change Password';
        // foreach($fetchdata as $key => $value){
        //     $data['user'] = $value;
        //     $data['uid'] = $key;
        // }


            // $userdata = session()->get('userdata');
            // if($userdata['role_id'] == 0){
            //     $builder = $db->table('user_complainant');
            // }elseif($userdata['role_id'] == 1){
            //     $builder = $db->table('user_admin');
            // }else{
            //     $builder = $db->table('user_emp');
            // }
            // $builder->where('email', $email);
            // $builder->update($data);
            
            // if ($upload_image) {
            //     $config['allowed_types']    = 'jpg|jpeg|png';
            //     $config['max_size']         = '6000';
            //     $config['upload_path']      = './assets/img/profile/';

            //     $this->load->library('upload', $config);
             

            $update = $db->update($table,$uid,$updatedata);    
            $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Profile changed successfully!</div>');

            return redirect()->to('myprofile');
                        
    
                        // $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
                        // Profile changed successfully!</div>');
                        // return redirect()->to('/myprofile');

                // if ($this->upload->do_upload('image')) {
                //     $old_image = session('userdata')['image'];
                //     if ($old_image != 'default.jpg') {
                //         unlink(FCPATH.'/assets/img/profile/'.$old_image);
                //     }

                //     $new_image = $this->upload->data('file_name');
                //     $email = $this->request->getPost('email');
                //     $data = [
                //         'name' => $this->request->getPost('name'),
                //         'image' => $new_image,
                //     ];
                //     $builder->insert($data);

                //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                //     Profile changed successfully!</div>');
                //     return redirect()->to('/myprofile');
            
                // } else {
                //     echo $this->upload->display_errors();
                // }
            // }
            // echo 'error';
        }
    }

    
    public function dashboard(): string
    {
        $data['title'] = 'Complaintant Dashboard';
        return view('layouts/users/header',$data)
        // . view('layouts/admin_sidebar',$data)
        . view('layouts/users/topbar')
        . view('users/user_public/index',$data)
        . view('layouts/users/footer');
    }

    public function blocked(): string
    {
        $data['title'] = 'ACCESS DENIED';
        return view('users/blocked',$data);
        // . view('layouts/admin_sidebar',$data)
        // . view('layouts/users/topbar')
        // . view('users/blocked',$data)
        // . view('layouts/users/footer');
    }

    public function getuserinfo(){

        $userdata = session()->get('userdata');
        if($userdata['role_id'] == 0){
            $table = 'user_complainant';
        }elseif($userdata['role_id'] == 1){
            $table = 'user_admin';
        }else{
            $table = 'user_emp';
        }
        $db = db_connect();
        $fetchdata = $db->fetchWithCondition($table,'email',$userdata['email'] );
        foreach($fetchdata as $key => $value){
            session('userdata')->push('uid', $key);
        }


        // $db = db_connect();
        // $role_id = session('userdata')['role_id'];
        // if($role_id==0){
        //     $dbname = 'user_complainant';
        // }else{
        //     $dbname = 'user_emp';
        // };
        // $builder = $db->table($dbname);
        // $query = $builder->getWhere(['id' => $id]);
        // $userdata = $query->getRowArray();
    }

    // change password user
    public function changepassword()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        //Check if get method
        if (! $this->request->is('post')) {
            $data['title'] = 'Change Password';
            return view('layouts/users/header',$data)
            . view('users/changepassword',$data)
            . view('layouts/users/footer');
        }

        $userdata = session()->get('userdata');
        if($userdata['role_id'] == 0){
            $table = 'user_complainant';
        }elseif($userdata['role_id'] == 1){
            $table = 'user_admin';
        }else{
            $table = 'user_emp';
        }

        $fetchdata = $db->fetchWithCondition($table,'email',$userdata['email'] );
        $data['title'] = 'Change Password';
        foreach($fetchdata as $key => $value){
            $data['user'] = $value;
            $data['uid'] = $key;
        }

        
        $rules = [
            'current_password' => ['label' => 'Old Ppassword', 'rules' => 'required|trim'],
            'new_password1' => ['label' => 'New Password', 'rules' => 'required|trim|min_length[5]|matches[new_password2]'],
            'new_password2' => ['label' => 'Repeated New Password', 'rules' => 'required|trim|min_length[5]|matches[new_password1]'],
        ];

        if (!$this->validate($rules)) {
            $data['title'] = 'Change Password';
            return view('layouts/users/header',$data)
            . view('users/changepassword',$data)
            . view('layouts/users/footer');
        }else{
            $current_password = $this->request->getPost('current_password');
            $new_password = $this->request->getPost('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!</div>');
                return redirect()->to('myprofile/changepassword');
            } else {
                if ($current_password == $new_password) {
                    session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                    The new password cannot be the same as the old password!</div>');
                    return redirect()->to('myprofile/changepassword');
                } else {
                    //password ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $timestamp = date('Y-m-d H:i:s');

                    $updatedata = [
                        'password' => $password_hash,
                        'last_modified' => $timestamp
                    ];
                    // var_dump($data['uid']);
                    $update = $db->update($table,$data['uid'],$updatedata);    
                    $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
                    Password changed successfully!</div>');
                    return redirect()->to('myprofile/changepassword');
                }
            }
        }
    }



}

