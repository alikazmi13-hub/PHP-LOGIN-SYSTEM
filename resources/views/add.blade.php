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
            <div class="p-3 mb-2 bg-success text-white" >
                    <div class="container">
                        <h1> CYBERNEST PROJECTS</h1>    
                    <!-- container end here -->
                     </div>
             <!-- Style Div  End -->
            </div>
            <!-- Conatiner For Add Project Heading -->
        <div class= "container">
                 <div class="row">
                     <div class="col-md-12 mb-5">
                         <!-- Add Project Button link  -->
                            <a href="{{route('projects.add')}}" class="btn btn-dark btn-md"">ADD PROJECT</a>
                            
                       </div>
                  </div>
                  <!-- Center Container End Here -->
                  <!-------- Card Row For PRojects Record ------>
         <div class="row">
                 <div class="col-md-12 text-center" >
                        <div class="card">
                              <div class="card-Header"><h3>New Project Details</h3></div>
                                     <div class="card-Body">
                                    <form action="" method="post" name="addproject" id="addproject">
                                        <div class="form-group">
                                            <label for="">Client Name</label>
                                             <input type="text" name="Client Name" id="Client Name" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Client Email</label>
                                             <input type="text" name="Client Email" id="Client Email" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Title</label>
                                             <input type="text" name="Project Title" id="Project Title" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Technology</label>
                                             <input type="text" name="Project Technology" id="Project Technology" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Type</label>
                                             <input type="text" name="Project Type" id="Project Type" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Status</label>
                                             <input type="text" name="Project Status" id="Project Status" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Project Description</label>
                                             <textarea type="text" name="Project Description"  cols="30" rows="10" id="Project Description" value="" class="form-control"></textarea>
                                        </div>
                                    </form>
                                    
                             </div>
                        </div>
             </div>        
            
        </div>       
            
     </body>

</html>