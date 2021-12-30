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
                                                    <tr >
                                                    <th>ID</th>
                                                    <th>Client Name</th>
                                                    <th>Client Email</th>
                                                    <th>Project Title</th>
                                                    <th>Project Technology</th>
                                                    <th>Project Type</th>
                                                    <th>Project Status</th>
                                                    <th>Project Description</th>
                                                    <th width="100">Edit</th>
                                                    <th width="100">Delete</th>
                                                </tr>
                                                </thead>
                                                 <tr>
                                                    <th>1</th>
                                                    <th>Alikazmi</th>
                                                    <th>alikazmi@gmail.com</th>
                                                    <th>Fiver</th>
                                                    <th>PHP</th>
                                                    <th>Website</th>
                                                    <th>Start</th>
                                                    <th>Project will be website based </th>
                                                    <th><a href="#" class="btn btn-primary">Edit</a></th>
                                                    <th><a href="#" class="btn btn-danger">Delete</a></th>
                                               
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <th>bashar</th>
                                                    <th>bashar@gmail.com</th>
                                                    <th>youtube</th>
                                                    <th>python</th>
                                                    <th>Website</th>
                                                    <th>Start</th>
                                                    <th>Project will be website based </th>
                                                    <th><a href="#" class="btn btn-primary">Edit</a></th>
                                                    <th><a href="#" class="btn btn-danger">Delete</a></th>
                                               
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <th>raza</th>
                                                    <th>raza@gmail.com</th>
                                                    <th>Facebook</th>
                                                    <th>React</th>
                                                    <th>Website</th>
                                                    <th>Start</th>
                                                    <th>Project will be website based </th>
                                                    <th><a href="#" class="btn btn-primary">Edit</a></th>
                                                    <th><a href="#" class="btn btn-danger">Delete</a></th>
                                               
                                                </tr>
                                            </table>
                                         </div>
                              
                               
                         
                    </div>
               </div>
        </div>        
            
            
            
     </body>

</html>