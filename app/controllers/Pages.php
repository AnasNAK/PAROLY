<?php
class Pages extends Controller
{
    private $adminModel;

    public function __construct()
    {

        $this->adminModel = $this->model('Admin');
    }

    public function index()
    {

        $this->view('pages/index');

    }

    public function about()
    {

    }
    public function signup()
    {
        $this->view('Pages/signup');

    }
    public function login()
    {
        $this->view('Pages/login');

    }
}


?>