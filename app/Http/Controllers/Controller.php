<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome() 
    {
        return view('welcome');
    }

    public function dashboard() 
    {
        $members = Member::all();
        return view('dashboard', compact('members'));
    }
}
