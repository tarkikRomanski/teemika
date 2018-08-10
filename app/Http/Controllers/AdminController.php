<?php

namespace App\Http\Controllers;

use App\About;
use App\Messeage;
use App\Page;
use App\Service;
use App\Why;
use App\How;
use App\Plan;
use App\Order;
use App\Phone;
use App\Help;
use App\Email;
use App\Title;
use App\Address;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}

