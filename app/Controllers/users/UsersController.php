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

            $update = $db->update($table,$uid,$updatedata);    
            session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Profile changed successfully!</div>');

            return redirect()->to('myprofile');
            
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

        $userdata = session()->get('userinfo');
        $table = $userdata['table'];
        // if($userdata['role'] == 0){
        //     $table = 'user_complainant';
        // }elseif($userdata['role_id'] == 1){
        //     $table = 'user_admin';
        // }else{
        //     $table = 'user_emp';
        // }

        // $fetchdata = $db->retrieve($table,'email',$userdata['email'] );
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
                    session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
                    Password changed successfully!</div>');
                    return redirect()->to('myprofile/changepassword');
                }
            }
        }
    }



}

