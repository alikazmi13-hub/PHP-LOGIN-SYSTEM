<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Validator;
use DB;
use Storage;
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
        function index(){
            return view ('newproject');
        }
         function tech(){
         return view('pdf_landscape');  
    }



        // Save Project Function
    function saveProject(Request $request){
            //  dd($request->all());
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
                    ->addColumn('id', function($row){
                        $actionBtn = '<input type="checkbox" id="'.$row->id.'" name="ch" class="project_check" data-id="'.$row->id.'"/>';
                        return $actionBtn;
                        
                    })
                    ->addColumn('action_edit', function($row){
                        $actionBtn = '<a href="/projects/edit/'.$row->id.'"  class="edit btn btn-success btn-sm">Edit</a>';
                        return $actionBtn;
                        
                    })
                    ->addColumn('action_delete', function($row){
                        $actionBtn = '<a href="'. route('projects.delete', $row->id) .'" class="delete btn btn-danger btn-sm">Delete</a>';
                        return $actionBtn;
                    })

                     ->addColumn('action_export', function($row){
                        $actionBtn = '<a href="/projects/pdflandscape/'.$row->id .'" class="export btn btn-primary btn-sm">PDF</a>';
                        return $actionBtn;
                    })
              

                    ->rawColumns(['action_edit','action_delete','action_export','id'])
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
    
        public function pdfView(Request $request){
        

        // METHOD 01 TO SAVE IN PUBLIC FOLDER PDF

        //it is getting all the data from database
            $projects = Project:: whereIn('id',$request->input("checked"))->get();
            
        //   data is passing data to view as array
            $data = [
                'index'    => $projects,
            ];
            
            // here we handover this data array to loadview to show data in view
            $pdf = PDF::loadView('pdf', $data)->setPaper('a4', 'landscape');;
            
        //  here we are doing concating with pdf name + time + ext to save file with name 
            $name = "pdf-".time().".pdf";
            
        // moving pdf to storage
             Storage::put('public/storage/'.$name, $pdf->output());

      // Save Pdf file in Public/storage/storage
              return '/storage/storage/'.$name;
            
            

              print_r($project);
                //  exit;

        }






             public function PDF_PAGE($id, Request $request){
                $projects = Project::where('id',$request->$id)->get();
                 print_r($id);exit;
                
                $singleitem = [
                'items'    => $projects,
            ];
                
                 $pdf = PDF::loadView('pdflandscape',$singleitem )->setPaper('a4', 'landscape')->output();
                
                //  window.open(window.location.origin+data, '_blank');
                //   $singlepdf = "pdflandscape-".time().".pdf";
            
                // moving Pdf file in Public/singlepdf/singlepdf
              

                // Save Pdf file in Public/singlepdf/singlepdf
                //  return '/singlepdf/singlepdf/'.$singlepdf;
               
                }





























// THIS IS END OF MAIN BRACKET
    }
       
           
       
        
                    

    
    
    
    