<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Validator;
use DB;
use PDF;
use Yajra\DataTables\DataTables;
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
        // Save Project Function
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

            ////////////////////// get Data using $draw,start,rowperpage /////////////////////
           public function getData(Request $request){

                // YAJRA DATATABLES 
                    if ($request->ajax()) {
                    $data = Project::latest()->get();
                    return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action_edit', function($row){
                        $actionBtn = '<a href="/projects/edit/'.$row->id.'"  class="edit btn btn-success btn-sm">Edit</a>';
                        return $actionBtn;
                        
                    })
                    ->addColumn('action_delete', function($row){
                        $actionBtn = '<a href="'. route('projects.delete', $row->id) .'" class="delete btn btn-danger btn-sm">Delete</a>';
                        return $actionBtn;
                    })

                     ->addColumn('action_export', function($row){
                        $actionBtn = '<a href="/projects/project_pdf/'.$row->id .'" class="export btn btn-primary btn-sm">PDF</a>';
                        return $actionBtn;
                    })
              



                    // ->orderColumn('id', '-id $1')
                    ->rawColumns(['action_edit','action_delete','action_export'])
                    ->make(true);
                     

          }
     }
                

            // MAIN FUNCTIONALITIES LIKE EDIT 
        function editProject($id, Request $request){
                $project = Project::where('id', $id)->first();
                if(!$project){
                $request->session()->flash('errormsg','NO Record Found');
                return redirect ('projects');
            }
                return view('edit')->with (compact('project'));

         }
             
          public function deleteProject($id){
            // dd($id);
            $project = Project::find($id);
            if($project){
                $project->delete();
                return redirect ('projects');
            }
          }

           function updateProject($id, Request $request){
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
                $project = Project::find($id);
                $project->Client_Name=$request->Client_Name;
                $project->Client_Email=$request->Client_Email;
                $project->Project_Title=$request->Project_Title;
                $project->Project_Technology=$request->Project_Technology;
                $project->Project_Type=$request->Project_Type;
                $project->Project_Status=$request->Project_Status;
                $project->Project_Description=$request->Project_Description;
                $project->save();
                // it will show message that will display successful 
                $request->session()->flash('msg','PROJECT DETAILS UPDATED SUCCESSFULLY');
                // it will redirect after submission succesfully
                return redirect('projects');
            }else{
                // Return Error
                echo "hello";
                return redirect('/projects/edit/'. $id)->withErrors($validator)->withinput();
            }
        }                          
    
             public function pdf_project($id, Request $request){

                // Here we will give path for download project form
                 $pdf = PDF::loadView('add');
                //  it will download with name as here 
                 return $pdf->download('project.pdf');

         }
        
        
                    

    
    
    
    }


