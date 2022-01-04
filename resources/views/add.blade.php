<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
 -->

        <!-- <link href="/css/Adminlogin.css" rel="stylesheet.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>PROJECTS</title>
   
    </head>
                <!-- BODY  -->
  <body class="bg-light">
            <div class="p-3 mb-2 text-light  bg-dark text-center" >
                    <div class="container">
                        <h1 > CYBERNEST PROJECTS</h1>  

                    <!-- container end here -->
                     </div>
             <!-- Style Div  End -->
            </div>
            <!-- Conatiner For Add Project Heading -->
        <div class= "container">
                 <div class="row">
                     <div class="col-md-12 mb-5">
                         <!-- Add Project Button link  -->
                            <!-- <a href="{{route('projects.add')}}" class="btn btn-dark btn-md"">ADD PROJECT</a> -->
                            
                       </div>
                  </div>
                  <!-- Center Container End Here -->
                  <!-------- Card Row For PRojects Record ------>
         <div class="row ">
                 <div class="col-md-12 " >
                        <div class="card ">
                              <div class="card-header  bg-dark text-white text-center"><h3>New Project Details</h3></div>
                            <div class="card-body mt-5 text-dark">
                                    <form class="row" action="{{url('projects/add')}}" method="post" name="addproject" id="addproject">
                                        @csrf
                                        <div class="form-group col-md-6">
                                            <label for="">Client Name</label>
                                             <input type="text" name="Client_Name" id="Client_Name" value="{{old('Client_Name')}}"  class=" form-control  text-dark {{($errors->any()  &&  $errors->first('Client_Name') )? 'is-invalid': ''}}">
                                            
                                             @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Client_Name')}}</p>
                                                
                                                @endif
                                                </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Client Email</label>
                                             <input type="text" name="Client_Email" id="Client_Email" value="{{old('Client_Email')}}" class="form-control  text-dark {{($errors->any()  &&  $errors->first('Client_Email') )? 'is-invalid': ''}}">
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Client_Email')}}</p>
                                                
                                                @endif
                                            </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Project Title</label>
                                             <input type="text" name="Project_Title" id="Project_Title" value="{{old('Project_Title')}}" class="form-control text-dark {{($errors->any()  &&  $errors->first('Project_Title') )? 'is-invalid': ''}}">
                                            @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Project_Title')}}</p>
                                                
                                                @endif

                                            </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Project Technology</label>
                                             <input type="text" name="Project_Technology" id="Project_Technology" value="{{old('Project_Technology')}}" class="form-control   {{($errors->any()  &&  $errors->first('Project_Technology') )? 'is-invalid': ''}}">
                                            @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Project_Technology')}}</p>
                                                
                                                @endif
                                        
                                            </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Project Type</label>
                                             <input type="text" name="Project_Type" id="Project_Type" value="{{old('Project_Type')}}" class="form-control   {{($errors->any() && $errors->first('Project_Type') )? 'is-invalid': ''}}">
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Project_Type')}}</p>
                                                
                                                @endif
                                       
                                       
                                            </div>
                                        <div class="form-group col-md-6 ">
                                            <label  for="">Project Status</label>
                                             <input type="text" name="Project_Status" id="Project_Status" value="{{old('Project_Status')}}" class="form-control  text-dark {{($errors->any()  &&  $errors->first('Project_Status') )? 'is-invalid': ''}}">
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Project_Status')}}</p>
                                                
                                                @endif
                                      
                                            </div>
                                        <div class="fo ">
                                            <label for="">Project Description</label>
                                             <textarea type="text" name="Project_Description"  cols="30" rows="7" id="Project_Description" value="{{old('Project_Description')}}"  class="form-control  text-dark {{($errors->any()  &&  $errors->first('Project_Description') )? 'is-invalid': ''}}"></textarea>
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Project_Description')}}</p>
                                                
                                                @endif
                                        
                                            </div>
                                        <div class="form-group  text-center mt-5 ">
                                            <button type="submit" class="btn btn-success">Submit Project</button>
                                        </div>
                                    </form>
                                         
                             </div>
                        <div class="Footer mt-3 border-solid bg-dark text-center text-white">
                              <div class="row">
                                  <p >@Cybernest technology</p> 
                                    <!-- <h3 class="h3 text-dark">Follow Us </h3>   -->
                                      <h6>CYBERNEST THE WORLD OF TECHNOLOGY</h6>                                     
                                        
                                 </div>
                            </div>
                       
                        </div>
                         
                 </div>        
        </div>       
            
     </body>

</html>