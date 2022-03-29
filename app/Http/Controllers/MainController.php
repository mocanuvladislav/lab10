<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $groups = Group::get();
        return view('index',['groups'=>$groups]);
    }
}
