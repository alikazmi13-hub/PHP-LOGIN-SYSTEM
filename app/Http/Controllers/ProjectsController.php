<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //Project Controller
        function show(){
        return view('Projectlist');    
        }


        //  Add Project Function 
        function addProject(){
        return view ('add');
        }






    }    
