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
                        $actionBtn = '<a href="/projects/project_pdf/'.$row->id .'" class="export btn btn-primary btn-sm">PDF</a>';
                        return $actionBtn;
                    })
              
                    


                    // ->orderColumn('id', '-id $1')
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
        
        // $project = Project:: whereIn('id',$request->input("checked"))->get();
        
            
        // $project = Project:: whereIn('id',$request->input("checked"))->get();
              
            // // PDF FORMAT
            //     $pdf = new FPDF('P','mm','A4');
            //     $pdf->AddPage();
            //     $pdf->SetFont('Arial','B',14);

            // //    if row get data from database
            //     while($row = fetch_object_array($project)){
               
            // //    setting columns
            //     $id = $row->id;
            //     $Project_Title = $row->Project_Title;
            //     $Project_Title = $row->Project_Title;
            // //    importing columns  data
            //      $pdf->Cell(20,10,$id,1);
            //      $pdf->Cell(40,10,[$Project_Title],1);
            //      $pdf->Cell(40,10,[$Project_Type],1);
            //     // $filename="/projects/test.pdf";
            //     $pdf->Ln();
            //     // $pdf->Output('test.pdf','D');
            //     $pdf->Output('project.pdf','D');      
            
            //     }





// METHOD 01 TO SAVE IN PUBLIC FOLDER PDF
    $project = Project:: whereIn('id',$request->input("checked"))->get();
     $pdf = PDF::loadView('pdf', $project);
    //  here we are doing concating with pdf name + time + ext 
     $name = "pdf-".time().".pdf";
    // $Pre::whereDate('created_at', date('Y-m-d'))->get();    
    // Storage::put('/allpdf/pdf.pdf', $pdf->output($pdf));
   
    Storage::put('public/storage/'.$name, $pdf->output());
    return '/storage/storage/'.$name;
    // return $pdf->download('/pdf/pdf.pdf');


   //  i practise it
//    $new = "pdf-".time().".pdf";
//    Storage::put('public/storage/'.$new,$pdf->output());
//    return '/storage/storage/'.$new;







// METHOD 02 TO SAVE IN PUBLIC FOLDER PDF

                // $path = storage_path('assets/pdfview');

                // if(!File::exists($path)) {
                // File::makeDirectory($path, $mode = 0755, true, true);
                // }

                // else {}
                // $pdf = PDF::loadView('pdf.pdfview', $project)->save(''.$path.'/'.$project.'.pdf');
                // return $pdf->download(''.$filename.'.pdf');
                
            
                 print_r($project);
                 exit;

        }

         public function pdf_project($id, Request $request){

                 
       
            //     $pdf = PDF::loadView('add',$row);
    
            //     return $pdf->download('PDF.pdf');
            //     return view('add');
             }
































// THIS IS END OF MAIN BRACKET
    }
       
           
       
        
                    

    
    
    
    