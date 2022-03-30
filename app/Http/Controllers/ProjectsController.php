<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Validator;
use DB;
use Storage;
use PDF;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;
class ProjectsController extends Controller
{
        //Project Controller
         
        
        
    function show(){
         return view('Projectlist');  
    }
        //  Add Project Function 
       function addProject(){
        $data["project_technology"] = array ( "Rails","Php","java","Laravel","React","Amazon Web Services","NodeJs", "Spring boot","Wordpress", "Angular","Symfony","Python","javascript","css","html","bootstrap");

        return view ('add',$data);

        }
    //     // function index(){
    //     //     return view ('newproject');
    //     // }
    //     //  function tech(){
    //     //  return view('pdf_landscape');  
    // }
        

        // Save Project Function
    function saveProject(Request $request){
        
        $data = $request->all();
        if(isset($data['Project_Technology']))
        {
        $data['Project_Technology'] = implode(',',$data['Project_Technology']);

        }
            
        $validator = Validator::make ($data,[
                'Client_Name'=>'required| max :100',
                'Client_Email'=> 'required| max:100| email',
                'Project_Title'=>'required| max:255',
                'Project_Technology'=>'required',
                'Project_Type'=>'required ',
                'Project_Status'=>'required| max:100',
                'Usecase_Description'=>'required'
            ]);

            if($validator->passes()){

                //if Record in Database
                // It will store these inputs data in database
                // Inputs Storing Data to database
                $project = new Project;
                $project->Client_Name=$request->Client_Name;
                $project->Client_Email=$request->Client_Email;
                $project->Project_Title=$request->Project_Title;
                $project->Project_Technology=$data['Project_Technology'];
                $project->Project_Type=$request->Project_Type;
                $project->Project_Status=$request->Project_Status;
                $project->Usecase_Description=$request->Usecase_Description;
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
            
                // // YAJRA DATATABLES 
                if ($request->ajax()) {
                    if(!empty($request->from_date))
                        {
                        $newStartDate = date("Y-m-d", strtotime($request->from_date));
                        $newEndDate = date("Y-m-d", strtotime($request->to_date));

                        $data = DB::table('projects')
                            ->whereBetween('created_at', array($newStartDate." 00:00:00", $newEndDate." 23:59:59"))
                            ->get();
                            //  dd($data);exit();
                        }
                        
                        else
                        {
                        $data = Project :: latest()->get();
                        }
                        // dd($data);
                        return Datatables::of($data)
                        

                        
                                            









                    
                   
                    
                    ->addColumn('id', function($row){
                        $actionBtn = '<input type="checkbox" id="'.$row->id.'" name="ch" class=" project_check" data-id="'.$row->id.'"/>';
                        return $actionBtn;
                        
                    })
                    
                   

                  ->addColumn('action', function($row){
                         $actionBtn = '<a href="/projects/edit/'.$row->id.'"  class="fas fa-edit btn btn-success btn-sm"></a>
                         <a href="projects/pdflandscape/'.$row->id.'"  class="fas fa-print btn btn-danger btn-sm" id="pdf_landscape"></a>
                     

                         <a href="'. route('projects.delete', $row->id) .'" class="fa fa-trash btn btn-danger btn-sm"></a>';
                         return $actionBtn;
                     })
              

                    ->rawColumns(['action','id'])
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
                'Project_Technology'=>'required',
                'Project_Type'=>'required|',
                'Project_Status'=>'required| max:100',
                'Usecase_Description'=>'required|  max:524288.'
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
                $project->Usecase_Description=$request->Usecase_Description;
                $project->save();
                // it will show message that will display successful 
                $request->session()->flash('msg','PROJECT DETAILS UPDATED SUCCESSFULLY');
                // it will redirect after submission succesfully
                return redirect('projects');
                }else{
                // Return Error
                echo "Not Updated Data Showing Error";
             return redirect('/projects/edit/'. $id)->withErrors($validator)->withinput();
            }
         }                          
    


                //  Generate PDf on Checked for pdf.blade.php

                public function pdfView(Request $request){
                

                // METHOD 01 TO SAVE IN PUBLIC FOLDER PDF

                //it is getting all the data from database
                    $projects = Project:: whereIn('id',$request->input("checked"))->get();
                    
                //   data is passing data to view as array
                    $data = [
                        'index'    => $projects,
                    ];
                    
                    // here we handover this data array to loadview to show data in view
                    $pdf = PDF::loadView('pdf', $data)->setPaper('a4', 'portrait');;
                    
                //  here we are doing concating with pdf name + time + ext to save file with name 
                    $name = "pdf-".time().".pdf";
                    
                // moving pdf to storage
                    Storage::put('public/storage/'.$name, $pdf->output());

            // Save Pdf file in Public/storage/storage
                    return '/storage/storage/'.$name;
                    
                    

                    // print_r($project);
                        //  exit;

                }




      

                   public function pdf_landscape(Request $request){
                
               
                    $projects = Project::whereIn('id',[$request->id])->get();
                     $checked=[];

                    $singlepdf = [
                        'items' => $projects,
                     ];
                    

                    

                     
                // here we handover this data array to loadview to show data in view
                    $mylandscape = PDF::loadView('pdflandscape', $singlepdf)->setPaper('A4', 'landscape');;
                            
                        // pdf Stream
                        return $mylandscape->stream('mylandscape.pdf');

                        // Save With This Name
                        $name = "landscapes-".time().".pdf";

    
                    //  Save in 
                        Storage::put('public/landscapes/'.$name, $mylandscape->output());
                        
                        
                 
                    
                }

                    






// THIS IS END OF MAIN BRACKET
    }