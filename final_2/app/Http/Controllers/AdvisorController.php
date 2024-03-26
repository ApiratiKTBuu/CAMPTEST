<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvisorModel;

class AdvisorController extends Controller
{
    //
    public function showAdvisorList(){
        return view("advisor_list");
    }
}
