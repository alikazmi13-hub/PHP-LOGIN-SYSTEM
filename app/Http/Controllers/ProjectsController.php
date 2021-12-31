<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
// here we call Validator
// use illumintae\Support\Facades\Validator;
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


        function saveProject(Request $request){
            // dd($request->all());
            $validator = Validator :: make ($request->all(),[
                'Client Name'=>'required| max :100',
                'Client Email'=> 'required| max:100| email',
                'Project Title'=>'required| max:255',
                'Project Technology'=>'required| max:255',
                'Project Type'=>'required| max:255',
                'Project Status'=>'required| max:100',
                'Project Description'=>'required'
            ]);

            if($validator->passes()){
                //if Record in Database
            }else{
                // Return Error
                return redirect('projects/add')->withErrors($validator)->withinput();
            }
        }




    }    
