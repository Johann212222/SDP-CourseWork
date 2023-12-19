<?php
namespace App\Controllers;

// defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Community Complaints';
        {    
            return view('layouts/home_header',$data)
            .view('home/index')
            .view('layouts/home_footer',$data);
        }
    }
}
