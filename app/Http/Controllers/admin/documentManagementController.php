<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class documentManagementController extends Controller
{
    public function index()
    {
        return view('admin.documentManagement.index');

    }
    public function create(){
        return view('admin.documentManagement.create');
    }
}
