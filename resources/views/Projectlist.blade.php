<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>PROJECTS</title>
   </head>
                <!-- BODY  -->
  <body class="bg-light">
            <div class="p-3 mb-2 bg-dark text-white" >
                    <div class="container">
                        <h1> CYBERNEST PROJECTS</h1>    
                    <!-- container end here -->
                     </div>
             <!-- Style Div  End -->
            </div>
            <!-- Conatiner For Add Project Heading -->
        <div class= "container">
                 <div class="row">
                     <div class="col-md-12 mb-3">
                         <!-- Add Project Button link  -->
                            <a href="{{route('projects.add')}}" class="btn btn-primary btn-md"">ADD PROJECT</a>
                            </div>
                        <!-- If new project form details will successfully submit  -->
                        @if (Session::has('msg')) 
                       <div class="col-md-12">
                        <div class="alert alert success">{{Session::get('msg')}}</div>
                        </div>
                        @endif
                  </div>
                  <!-- Center Container End Here -->
                  <!-------- Card Row For PRojects Record ------>
         <div class="row">
                 <div class="col-md-12 text-center" >
                        <div class="card">
                              <div class="card-Header"><h2>Projects Record</h2></div>

                         <div class="card-Body">
                                <div class="table-responsive-md">
                                    <table class="table table-dark table-hover ">
                                            <thead class="thead">
                                                    <tr>
                                                    <th>ID</th>
                                                    <th>Client_Name</th>
                                                    <th>Client_Email</th>
                                                    <th>Project_Title</th>
                                                    <th>Project_Technology</th>
                                                    <th>Project_Type</th>
                                                    <th>Project_Status</th>
                                                    <th>Project_Description</th>
                                                    <th width="100">Edit</th>
                                                    <th width="100">Delete</th>
                                                </tr>
                                                </thead>
                                                 @if($projects)
                                                 <!-- Here foreach Record we get data From Projects table to project list as ($Project as an object) -->
                                                    @foreach($projects as $Project)
                                            <tr>
                                                    <td>{{$Project->id}}</td>
                                                    <td>{{$Project->Client_Name}}</td>
                                                    <td>{{$Project->Client_Email}}</td>
                                                    <td>{{$Project->Project_Title}}</td>
                                                    <td>{{$Project->Project_Technology}}</td>
                                                    <td>{{$Project->Project_Type}}</td>
                                                    <td>{{$Project->Project_Status}}</td>
                                                    <td>{{$Project->Project_Description}}</td>
                                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                                             </tr>
                                                    @endforeach
                                                    <!--  IF PROJECT RECORD NOT ADDED YET  -->
                                                    @else
                                            <tr>
                                                <td colspan="8">PROJECT RECORD NOT ADDED YET</td>                                                    
                                            </tr>  
                                            @endif              
                                      </table>
                                    </div>
                             </div>
               </div>
        </div>        
            
     </body>

</html>
