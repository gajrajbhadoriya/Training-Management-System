<?php

namespace App\Controllers;

use App\Models\Admin;

class AdminController
{
    private $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

    public function add($name, $email, $gender, $number, $password,)
    {
        return $this->admin->addAdmin($name, $email, $gender, $number, $password);
    }

    public function index()
    {
        return $this->admin->getAdmin();
    }

    public function delete($id)
    {
        return $this->admin->delete($id);
    }
}
