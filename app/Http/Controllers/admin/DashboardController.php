<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [];
        dd("This is Dashboard");
        return view('admin.dashboard', $data);
    }
}