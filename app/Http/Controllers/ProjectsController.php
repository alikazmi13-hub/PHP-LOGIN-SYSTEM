<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Validator;
use DB;
// here we call Validator
// use illumintae\Support\Facades\Validator;
class ProjectsController extends Controller
{

    //Project Controller
         function show(){
        //it will get record from projects table and order by latest 
        $projects = DB::table('projects')->orderBy('id','DESC')->get();
        return view('Projectlist')->with(compact('projects'));   
        }


        //  Add Project Function 
       function addProject(){
        return view ('add');

        }


        function saveProject(Request $request){
            // dd($request->all());
            $validator = Validator::make ($request->all(),[
                'Client_Name'=>'required| max :100',
                'Client_Email'=> 'required| max:100| email',
                'Project_Title'=>'required| max:255',
                'Project_Technology'=>'required| max:255',
                'Project_Type'=>'required| max:255',
                'Project_Status'=>'required| max:100',
                'Project_Description'=>'required'
            ]);

            if($validator->passes()){
                //if Record in Database
                // It will store these inputs data in database
                // Inputs Storing Data to database
                $project = new Project;
                $project->Client_Name=$request->Client_Name;
                $project->Client_Email=$request->Client_Email;
                $project->Project_Title=$request->Project_Title;
                $project->Project_Technology=$request->Project_Technology;
                $project->Project_Type=$request->Project_Type;
                $project->Project_Status=$request->Project_Status;
                $project->Project_Description=$request->Project_Description;
                $project->save();
                // it will show message that will display successful 
                $request->session()->flash('msg','Your Project Details is Submitted');
                // it will redirect after submission succesfully
                return redirect('projects');




            }else{
                // Return Error
                return redirect('projects/add')->withErrors($validator)->withinput();
            }
        }




    }    
