<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                              <div class="card-Header  bg-dark text-white text-center"><h3>New Project Details</h3></div>
                            <div class="card-Body mt-5 text-center text-dark">
                                    <form action="{{url('projects/add')}}" method="post" name="addproject" id="addproject">
                                        @csrf
                                        <div class="form-group">
                                            <label for=""><h4>Client Name</h4></label>
                                             <input type="text" name="ClientName" id="Name" value="{{old('Client Name')}}"  class=" form-control  text-dark {{($errors->any()  &&  $errors->first(' Client Name') )? 'is-invalid': ''}}">
                                            
                                             @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Client Name')}}</p>
                                                
                                                @endif
                                                </div>
                                        <div class="form-group">
                                            <label for=""><h4>Client Email</h4></label>
                                             <input type="text" name="ClientEmail" id="Email" value="{{old('Client Email')}}" class="form-control  text-dark {{($errors->any()  &&  $errors->first(' Email') )? 'is-invalid': ''}}">
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Email')}}</p>
                                                
                                                @endif
                                            </div>
                                        <div class="form-group ">
                                            <label for=""><h4>Project Title</h4></label>
                                             <input type="text" name="ProjectTitle" id="Title" value="{{old('Project Title')}}" class="form-control text-dark {{($errors->any()  &&  $errors->first(' Title') )? 'is-invalid': ''}}">
                                            @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Title')}}</p>
                                                
                                                @endif

                                            </div>
                                        <div class="form-group ">
                                            <label for=""><h4>Project Technology</h4></label>
                                             <input type="text" name="ProjectTechnology" id="Technology" value="{{old('Project Technology')}}" class="form-control   {{($errors->any()  &&  $errors->first(' Technology') )? 'is-invalid': ''}}">
                                            @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Technology')}}</p>
                                                
                                                @endif
                                        
                                            </div>
                                        <div class="form-group   ">
                                            <label for=""><h4>Project Type</h4></label>
                                             <input type="text" name="ProjectType" id="Type" value="{{old('ProjectType')}}" class="form-control   {{($errors->any() && $errors->first('Project Type') )? 'is-invalid': ''}}">
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('ProjectType')}}</p>
                                                
                                                @endif
                                       
                                       
                                            </div>
                                        <div class="form-group ">
                                            <label  for=""><h4>Project Status</h4></label>
                                             <input type="text" name="ProjectStatus" id="Status" value="{{old('Project Status')}}" class="form-control  text-dark {{($errors->any()  &&  $errors->first(' Status') )? 'is-invalid': ''}}">
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Status')}}</p>
                                                
                                                @endif
                                      
                                            </div>
                                        <div class="fo ">
                                            <label for=""><h4>Project Description</h4></label>
                                             <textarea type="text" name="ProjectDescription"  cols="30" rows="7" id="Description" value="{{old('Project Description')}}"  class="form-control  text-dark {{($errors->any()  &&  $errors->first(' Description') )? 'is-invalid': ''}}"></textarea>
                                                @if($errors->any())
                                                <p class="invalid-feedback">{{$errors->first('Description')}}</p>
                                                
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