<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class DeptAdminCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $userinfo = session()->get("userinfo");
        
        if($userinfo==NULL){
            return redirect()->to('/login');
        }elseif($userinfo['role']<>2){
            return redirect()->to('/blocked');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}