<?php
namespace App\Controllers\users;
use App\Controllers\BaseController;
use CodeIgniter\Controller;
use Config\Services;
use Faker\Extension\GeneratorAwareExtension;
use App\Models\FirebaseModel;
use Config\Firebase;



// defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends BaseController
{
    public function index()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        //Check if get method
        if (! $this->request->is('post')) {
            $data['title'] = 'Sign In Page';
            return view('layouts/users/login_header',$data)
            . view('users/login/login',$data)
            . view('layouts/users/login_footer');
        }

        //Form validation rules
        $rules = [
            'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
            'password' => ['label' => 'password', 'rules' => 'required'],
        ];

        //If form validation fails, load page again
        if (!$this->validate($rules)) {
            $data['title'] = 'Create Account';
            return view('layouts/users/login_header',$data)
            . view('users/login/login',$data)
            . view('layouts/users/login_footer');
        }else{
            //Get the validated data.
            $validData = $this->validator->getValidated();

            //Assign Variables to data
            $email = $validData['email'];
            $password = $validData['password'];

            //DB query
            $tableName = "user_complainant";
            $conditionField = "email"; // Replace with the actual field name
            $conditionValue = $email; // Replace with the desired value

            $fetchedData = $db->fetchWithCondition($tableName, $conditionField, $conditionValue);
            
            
            // Check if user(Compaintant) availabe
            if ($fetchedData) {
                $user = reset($fetchedData);
                //Check if user(Compaintant) account is active
                if ($user['is_active'] == 1) {
                    //Check if entered password matches 
                    if (password_verify($password, $user['password'])) {

                        //Set user(Compaintant) data to session
                        session()->set('userdata', $user);
                        
                        //Get user data and Set to session
                        $role_id = 0;
                        $userinfo = $this->getuserinfo($role_id, $email);
                        session()->set('userinfo', $userinfo);

                        //add role_id to session
                        // $this->session->set('role_id',0);

                        //redirect to user(Compaintant) dashboard
                        return redirect()->to('dashboard');
                    }else{
                        // if password incorrect redirect to login page and display error message
                        $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong Password!</div>');
                        return redirect()->to('login');
                    }
                } else {
                    // if account not active redirect to login page and display error message
                    $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                    This email has not been activated yet!</div>');
                    return redirect()->to('login');
                }   
            } else {
                // if user account doesnot exist redirect to login page and display error message
                $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered!</div>');
                return redirect()->to('login');
            }

        }

    }


    public function registration()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        if (! $this->request->is('post')) {
            $data['title'] = 'Create Account';
            return view('layouts/users/login_header',$data)
            . view('users/login/registration',$data)
            . view('layouts/users/login_footer');
        }

        $rules = [
            'name' => ['label' => 'name', 'rules' => 'required|max_length[30]'],
            'nic' => ['label' => 'NIC', 'rules' => 'required|max_length[12]|min_length[10]'], 
            'email' => ['label' => 'email', 'rules' => 'required|max_length[254]|valid_email', 
            'required' => 'Nope, password cannot be empty!'],
            'password1' => ['label' => 'password', 'rules' => 'required|max_length[255]|min_length[8]'],
            'password2' => ['label' => 'Confirm Password', 'rules' => 'required|max_length[255]|matches[password1]'],
        ];

        if (! $this->validate($rules)) {
            $data['title'] = 'Create Account';
            return view('layouts/users/login_header',$data)
            . view('users/login/registration',$data)
            . view('layouts/users/login_footer');
        }

        //get the validated data.
        $validData = $this->validator->getValidated();

        //add validated data to db.
        $name = $validData['name'];
        $nic = $validData['nic'];
        $email = $validData['email'];
        $password = $validData['password1'];
        date_default_timezone_set("Asia/Kolkata");
        $timestamp = date('Y-m-d H:i:s');
        // $timestamp = "TO_DATE('$timestamp','yyyy/mm/dd hh24:mi:ss')";   
        $data = [
            'name' => $name,
            'nic' => $nic,
            'email' => $email,
            'image' => 'default.jpg',
            'password' => password_hash($password,PASSWORD_BCRYPT),
            'is_active' => 0,
            'date_created' => $timestamp,
            'last_modified' => $timestamp
        ];
        $tableName = "user_complainant";
        $conditionField = "nic"; // Replace with the actual field name
        $conditionValue = $nic; // Replace with the desired value

        $fetchedData = $db->fetchWithCondition($tableName, $conditionField, $conditionValue);
        
        if(sizeof($fetchedData) > 0) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
            Entered NIC already registered. Try Loggin in.</div>');
            return redirect()->to('login');

        }else{

            // Create token
            $token = base64_encode(random_bytes(32));
            $timestamp = date('Y-m-d H:i:s');
            $user_token = [
                'email' => $email,
                'token' => $token,
                'type' => 'verify',
                'date_created' => $timestamp
            ];

            $insert = $db->insert("user_complainant",$data);
            $insert_token = $db->insert("user_token",$user_token);

            $this->sendMail($token, 'verify');
            $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Your account has been created successfully.Please check your email to activate your account! </div>');
            
            return redirect()->to('login');
        }
    }


    public function changepassword()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        //Check if get method
        if (! $this->request->is('post')) {
            $data['title'] = 'Sign In Page';
            return view('layouts/users/login_header',$data)
            . view('users/login/change_password',$data)
            . view('layouts/users/login_footer');
        }

    }

    

    public function loginadmin()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        //Check if get method
        if (! $this->request->is('post')) {
            $data['title'] = 'Admin Login';
            return view('layouts/users/login_header',$data)
            . view('users/login/login_admin',$data)
            . view('layouts/users/login_footer');
        }

        //Form validation rules
        $rules = [
            'email' => ['label' => 'email', 'rules' => 'required'],
            'password' => ['label' => 'password', 'rules' => 'required'],
        ];

        //If form validation fails, load page again
        if (!$this->validate($rules)) {
            $data['title'] = 'Admin Login';
            return view('layouts/users/login_header',$data)
            . view('users/login/login_admin',$data)
            . view('layouts/users/login_footer');
        }else{
            //Get the validated data.
            $validData = $this->validator->getValidated();

            //Assign Variables to data
            $email = $validData['email'];
            $password = $validData['password'];

            //DB query
            $tableName = "user_admin";
            $conditionField = "email"; // Replace with the actual field name
            $conditionValue = $email; // Replace with the desired value

            $fetchedData = $db->fetchWithCondition($tableName, $conditionField, $conditionValue);

            //Check if admin account availabe
            if (sizeof($fetchedData)==1) {
                $user = reset($fetchedData);
                //Check if admin account is active
                if ($user['is_active'] == 1) {
                    //Check if entered password matches 
                    if (password_verify($password, $user['password'])) {

                        //Set admin data to session
                        // session()->set('userdata', $user);

                        //Get user data and Set to session
                        $role_id = 1;
                        $userinfo = $this->getuserinfo($role_id, $email);
                        session()->set('userinfo', $userinfo);

                        //redirect to user(Compaintant) dashboard
                        return redirect()->to('admin');
                    }else{
                        // if password incorrect redirect to login page and display error message
                        $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong Password!</div>');
                        return redirect()->to('adminlogin');
                    }
                } else {
                    // if account not active redirect to login page and display error message
                    $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                    This email has not been activated yet!</div>');
                    return redirect()->to('adminlogin');
                }   
            } else {
                // if user account doesnot exist redirect to login page and display error message
                $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered!</div>');
                return redirect()->to('adminlogin');
            }

        }
    }

    public function loginemp()
    {
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        //Check if get method
        if (! $this->request->is('post')) {
            $data['title'] = 'Department Employee Login';
            return view('layouts/users/login_header',$data)
            . view('users/login/login_emp',$data)
            . view('layouts/users/login_footer');
        }

        //Form validation rules
        $rules = [
            'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
            'password' => ['label' => 'password', 'rules' => 'required'],
        ];

        //If form validation fails, load page again
        if (!$this->validate($rules)) {
            $data['title'] = 'Department Employee Login';
            return view('layouts/users/login_header',$data)
            . view('users/login/login_emp',$data)
            . view('layouts/users/login_footer');
        }else{
            //Get the validated data.
            $validData = $this->validator->getValidated();

            //Assign Variables to data
            $email = $validData['email'];
            $password = $validData['password'];

            //DB query
            $tableName = "user_emp";
            $conditionField = "email"; // Replace with the actual field name
            $conditionValue = $email; // Replace with the desired value

            $fetchedData = $db->fetchWithCondition($tableName, $conditionField, $conditionValue);


            
            //Check if admin account availabe
            if (sizeof($fetchedData)==1) {
                $user = reset($fetchedData);
                //Check if admin account is active
                if ($user['is_active'] == 1) {
                    //Check if entered password matches 
                    if (password_verify($password, $user['password'])) {
                        //Get user data and Set to session
                        $role_id = $user['role_id'];
                        $userinfo = $this->getuserinfo($role_id, $email);
                        session()->set('userinfo', $userinfo);
                        $institute = $user['institute'];
                        // session('userinfo')->push('institute', $institute);
                        session()->push('userinfo', ['institute' => $institute]);

                        if($role_id == 2){
                            //redirect to deptAdmin dashboard
                            return redirect()->to('dept/dashboard-admin');
                        }else{
                            //redirect to user(Compaintant) dashboard
                            return redirect()->to('dept/dashboard');
                        }
                    }else{
                        // if password incorrect redirect to login page and display error message
                        $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong Password!</div>');
                        return redirect()->to('emplogin');
                    }
                } else {
                    // if account not active redirect to login page and display error message
                    $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                    This email has not been activated yet!</div>');
                    return redirect()->to('emplogin');
                }   
            } else {
                // if user account doesnot exist redirect to login page and display error message
                $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered!</div>');
                return redirect()->to('emplogin');
            }

        }
    }

    // logout
    public function logout()
    {
        $role_id = $this->session->get("userdata")['role_id'];
        // $this->session->destroy();
        $array_items = ['email','role_id','name','image','userdata','userinfo'];
        $this->session->remove($array_items);
        $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert">
        Signed Out Successfully!</div>');
        if($role_id==0){
            return redirect()->to('login');
        }elseif($role_id==1){
            return redirect()->to('adminlogin');
        }else{
            return redirect()->to('emplogin');
        }
    }
    
    //Send Mail Function
    function sendMail($token, $type) { 
        $to = $this->request->getVar('email');

        if ($type == 'verify') {
            $subject = 'Account Verification';
            $message = 'Dear User, Please click the URL to verify your account: 
                <a href="' . base_url().'login/verify?email='.$to.'&token='.urlencode($token).'">Activate</a>';
        }elseif($type == 'forgot'){
            $subject = 'Reset password';
            $message = 'Click on the link to reset your password: 
            <a href="' . base_url() . 'login/resetpassword?email=' . $to . '&token=' . urlencode($token) . '">Reset password</a>';
        }
                
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('gjehan93@gmail.com', 'Complaint Management System');
        
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) 
		{
            echo 'Email successfully sent';
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

    //Verify Account
    public function verify()
    {
        $email = $this->request->getGet('email'); // The second parameter is for XSS filtering
        $token = $this->request->getGet('token');

        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);
        $user = $db->fetchWithCondition('user_complainant', 'email', $email);

        if (sizeof($user)==1) {

            foreach($user as $uid => $u){
            }
            $user_token = $db->fetchWithMultiConditionsFilter('user_token', ['token' => $token, 'email'=>$email]);
            
            if (sizeof($user_token)==1) {
                foreach($user_token as $tid => $t){
                }
                $data=[
                    'is_active' => 1,
                ];
                // session('userdata')->push('reset_email', $email);
                session()->push('userdata', ['reset_email' => $email]);    
                $db->update('user_complainant', $uid, $data);
                $db->delete('user_token', $tid);
                
                session()->setFlashdata('message', '<div class="alert alert-success" role="alert">'.$email.' Activated! Please login.</div>');
                return redirect()->to('login');
            // } else {
            //         // token expired
            //         $this->db->delete('user', ['email' => $email]);
            //         $this->db->delete('user_token', ['email' => $email]);

            //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            //         Account activation failed! Token expired.</div>');
            //         redirect('auth');
            } else {
                // token salah
                session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
                Account activation failed! Invalid token.</div>');
                return redirect()->to('login');
            }
        }else{
            // email salah
            session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
            Account activation failed! Email does not exist.</div>');
            return redirect()->to('login');
        }
    }
    
// forgot password
public function forgotpassword()
{
    //Load Database
    $fb = new Firebase();
    $url = $fb->databaseUrl;
    $db = new FirebaseModel($url);

    $email = $this->request->getVar('email');

    if (! $this->request->is('post')) {
        $data['title'] = 'Forgot Password';
        return view('layouts/users/header',$data)
        . view('users/login/forgot_password',$data)
        . view('layouts/users/footer');
    }

    $rules = [
        'email' => ['label' => 'Email', 'rules' => 'required|trim|valid_email']
    ];
    
    if (! $this->validate($rules)) {
        
        $data['title'] = 'Forgot Password';
        return view('layouts/users/header',$data)
        . view('users/login/forgot_password',$data)
        . view('layouts/users/footer');

    }else{
        $fetchdata = $db->fetchWithMultiConditionsFilter('user_complainant',['email'=> $email, 'is_active' => 1]);
        if(sizeof($fetchdata)==1){
            $token = base64_encode(random_bytes(32));
            $timestamp = date('Y-m-d H:i:s');
            $user_token = [
                'email' => $email,
                'token' => $token,
                'type' => 'forgot',
                'date_created' => $timestamp
            ];
            $db->insert('user_token', $user_token);
            $this->sendMail($token, 'forgot');
            session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Please check your email to reset your password!</div>');
            return redirect()->to('login');
        }else{
            session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered or not yet activated!</div>');
            return redirect()->to('login');
        }
    }

}

//Reset Password
public function resetpassword()
{
    $email = $this->request->getGet('email');
    $token = $this->request->getGet('token');

    //Load Database
    $fb = new Firebase();
    $url = $fb->databaseUrl;
    $db = new FirebaseModel($url);
    $user = $db->fetchWithCondition('user_complainant', 'email', $email);

    if (sizeof($user)==1) {

        foreach($user as $uid => $u){
        }
        $user_token = $db->fetchWithMultiConditionsFilter('user_token', ['token' => $token, 'email'=>$email]);
        
        if (sizeof($user_token)==1) {
            foreach($user_token as $tid => $t){
            }

            // $db->delete('user_token', $tid);

           
        
            $email = session()->get('reset_email');
            
            //Load Database
            $fb = new Firebase();
            $url = $fb->databaseUrl;
            $db = new FirebaseModel($url);
    
            //Check if get method
            if (! $this->request->is('post')) {
                // var_dump($email);
                $data['title'] = 'Change Password';
                return view('layouts/users/login_header',$data)
                . view('users/login/change_password',$data)
                . view('layouts/users/login_footer');
            }
            
            $rules = [
                'password1' => ['label' => 'New password', 'rules' => 'required|trim|min_length[5]|matches[password2]'],
                'password2' => ['label' => 'Confirm New password', 'rules' => 'required|trim|min_length[5]|matches[password1]'],
            ];
    
            if (! $this->validate($rules)) {
                $data['title'] = 'Change Password';
                return view('layouts/users/login_header',$data)
                . view('users/login/change_password',$data)
                . view('layouts/users/login_footer');
            }else{
                $password = password_hash($this->request->getPost('password1'), PASSWORD_DEFAULT);
                
                $db->update('user_complainant', $uid, ['password'=> $password]);
    
                session()->remove('reset_email');
                session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
                Password changed successfully! Please login.</div>');
                return redirect()->to('login');
            }
            
        } else {
            session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
            Reset password failed! Invalid token</div>');
            return redirect()->to('login');
        }
    }else{
        session()->setFlashdata('message', '<div class="alert alert-danger" role="alert">
        Reset password failed! Email is not registered</div>');
        return redirect()->to('login');
    }
}

// change password
public function changepassword1()
{
    if(!session()->has('reset_email')) {
        return redirect()->to('login');
    }else{

        $email = session()->get('reset_email');
        
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);

        //Check if get method
        if (! $this->request->is('post')) {
            // var_dump($email);
            $data['title'] = 'Change Password';
            return view('layouts/users/login_header',$data)
            . view('users/login/change_password',$data)
            . view('layouts/users/login_footer');
        }
       
        $rules = [
            'password1' => ['label' => 'New password', 'rules' => 'required|trim|min_length[5]|matches[password2]'],
            'password2' => ['label' => 'Confirm New password', 'rules' => 'required|trim|min_length[5]|matches[password1]'],
        ];

        if (! $this->validate($rules)) {
            $data['title'] = 'Change Password';
            return view('layouts/users/login_header',$data)
            . view('users/login/change_password',$data)
            . view('layouts/users/login_footer');
        }else{
            $password = password_hash($this->request->getPost('password1'), PASSWORD_DEFAULT);
            
            //Load Database
            $fb = new Firebase();
            $url = $fb->databaseUrl;
            $db = new FirebaseModel($url);
            $user = $db->fetchWithCondition('user_complainant', 'email', $email);
            if (sizeof($user)==1) {
                foreach($user as $uid => $u){}


            $db->update('user_complainant', $uid, ['password'=> $password]);

            session()->remove('reset_email');
            session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
            Password changed successfully! Please login.</div>');
            return redirect()->to('login');
            }else{
                session()->setFlashdata('message', '<div class="alert alert-success" role="alert">
            User Not Found</div>');
            return redirect()->to('login');
            }
        }
    }
}

    // blocked
    public function blocked()
    {
        // $this->load->view('auth/blocked');
    }

    public function getuserinfo($role, $email){
        //Load Database
        $fb = new Firebase();
        $url = $fb->databaseUrl;
        $db = new FirebaseModel($url);
        
        if($role == 0){
            $table = 'user_complainant';
        }elseif($role == 1){
            $table = 'user_admin';
        }else{
            $table = 'user_emp';
        }
        

        $fetchdata = $db->fetchWithCondition($table,'email',$email );
        foreach($fetchdata as $key => $value){
            $uid = $key;
        }
        $userinfo['uid'] = $uid;
        $userinfo['email'] = $email;
        $userinfo['role'] = $role;
        $userinfo['table'] = $table;
        return $userinfo;
    }
}
