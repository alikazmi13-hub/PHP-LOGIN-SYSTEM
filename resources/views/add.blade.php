<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- Tags -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"
        rel="stylesheet"
        />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />   
            
        <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
        <!--  -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/@yaireo/tagify"></script>
        <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style>
   
   .bd{
        width:"100%";
     
   }
   .container-fluid{
        background-color:#FFFFFF;
        width:"100%";
       
   }
   .card{
         background-color:#D3D3D3;
          color:#000000;
   }
   
   
   
   #logo{
        margin-left:5%;
        margin-top:2%;
        width:200px;
       
    }
    
    #h4{
        
       text-align:center;
        margin-top:5%;
        font-family: 'Roboto', sans-serif;
        font-size:30px;
       
   
        }
    #hd{
     /* background-color:#F3D250; */
     font-family: 'Roboto', sans-serif;
      color:#000000;
     font-size:1px;
  }
  #h3{
      font-size:20px;
  }

  
    .form-control{
  
    color:#000000;
    font-family: 'Roboto', sans-serif;
   

    }

    #bt{
   
    background-color:#FFFFFF;
    border-color:#D3E3FC;
    color:#000000;
    font-size:15px;
    font-family: 'Roboto', sans-serif;
}
    #fp{
    margin-top:1%;
    font-family: 'Roboto', sans-serif;
    color:#000000;
}
#ft{
         height:90px;
        |color:#000000;
       
}

</style>
    <title>PROJECTS</title>

</head>
<!-- BODY  -->

<body class="bd">
    <div class="container-fluid">
         <img id="logo" src="/Images/logo 2.png" >
           <h2 id="h4">Cybernest Projects</h2>
      
   
    <!-- Conatiner For Add Project Heading -->
    <div class="container">
        <div class="row ">
           
         <div class="col-md-12">
              <div class="card">
                 <div id="hd" class="card-header text-center">
                   <h3 id="h3">New Project Details</h3>
            </div>
    <div class="card-body mt-5 ">
         <form class="row" action="{{url('projects/add')}}" method="post" name="addproject" id="addproject">
      @csrf
        <div class="form-group col-md-6">
            <label for="">Client Name:</label>
            <input type="text"  placeholder="Your Name" name="Client_Name" id="Client_Name" value="{{old('Client_Name')}}" placeholder=""
                class=" form-control     {{($errors->any()  &&  $errors->first('Client_Name') )? 'is-invalid': ''}}">

            @if($errors->any())
            <p class="invalid-feedback">{{$errors->first('Client_Name')}}</p>

            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="">Client Email:</label>
            <input type="text"  placeholder="Your Email" name="Client_Email" id="Client_Email" value="{{old('Client_Email')}}"
                class="form-control    {{($errors->any()  &&  $errors->first('Client_Email') )? 'is-invalid': ''}}">
            @if($errors->any())
            <p class="invalid-feedback">{{$errors->first('Client_Email')}}</p>

            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="">Project Title:</label>
            <input type="text" placeholder="Project Name"   name="Project_Title" id="Project_Title"
                value="{{old('Project_Title')}}"
                class="form-control   {{($errors->any()  &&  $errors->first('Project_Title') )? 'is-invalid': ''}}">
            @if($errors->any())
            <p class="invalid-feedback">{{$errors->first('Project_Title')}}</p>

            @endif

        </div>
        <!-- Checkboxes -->
        

            <!-- Old Record -->
            <div class="form-group autocomplete col-md-6" id="Project_Techn">
                <label for="">Project Technology:</label>
             <select id="Project_Technology"  style="width: 100% height: 20%" name="Project_Technology[]" multiple="multiple" value="{{old('project_tech[]')}}" 
                    class="form-control Project_Technology {{($errors->any()  &&  $errors->first('Project_Technology') )? 'is-invalid': ''}}"> 
                   <!-- Loop -->
                   
                   @foreach($project_technology as $project_tech)
                    <option value="{{$project_tech}}">{{$project_tech}}</option>
                    @endforeach
                     
                    </select>
              
               
               
                @if($errors->any())
                <p class="invalid-feedback">{{$errors->first('Project_Technology')}}</p>

                @endif

            </div>

            <div class="form-group col-md-6">
                <label for="">Project Type:</label>
            
                <select name="Project_Type" autofocus id="Project_Type"
                    value="{{old('Project_Type')}}"
                    class="form-control   {{($errors->any() && $errors->first('Project_Type') )? 'is-invalid': ''}}">
                    <option value="">Choose Project_Type</option>
                    <option value="Custom Software">Custom Software</option>
                    <option value="Web Apps">Web Apps</option>
                    <option value="Ecommerce">Ecommerce</option>
                    <option value="Mobile Apps">Mobile Apps</option>
                    <option value="UI/UX Design">UI/UX Design</option>
                    <option value="Enterprise Solution">Enterprise Solution</option>
                 
                 </select>
                
                 @if($errors->any())
                 <p class="invalid-feedback">{{$errors->first('Project_Type')}}</p>

                @endif


            </div>

            <div class="form-group col-md-6">
                <label for="">Project Status:</label>
                <input type="text"  placeholder="Project Status"  name="Project_Status" id="Project_Status"
                    value="{{old('Project_Status')}}"
                    class="form-control    {{($errors->any()  &&  $errors->first('Project_Status') )? 'is-invalid': ''}}">
               
                @if($errors->any())
                <p class="invalid-feedback">{{$errors->first('Project_Status')}}</p>

                @endif

            </div>
            <div class="form-group">
                <label for="">UseCase Description:</label>
                <textarea type="text"  placeholder="Usecase_Description" name="Usecase_Description" cols="30" rows="7"
                    id="Usecase_Description" value="{{old('Usecase_Description')}}"
                    class="form-control    {{($errors->any()  &&  $errors->first('Usecase_Description') )? 'is-invalid': ''}}"></textarea>
              
                    @if($errors->any())
                <p class="invalid-feedback">{{$errors->first('Usecase_Description')}}</p>

                @endif

                </div>
                 
           
            </div>
             <div class="form-group  text-center mt-5 ">
                 <button type="submit"  id="bt" class="btn">Submit Project</button>
                  </div>
             </form>
            </div>
        </div>
     </div>
         <div id="ft" class="Footer mt-3 text-center">
              <div class="row">
                  <p id="fp">@Cybernest technology</p>
                  <p>CYBERNEST THE WORLD OF TECHNOLOGY</p>
                </div>
            </div>
        </div>
    </div>
    
</body>

<script>
// autocomplete input tags
$(document).ready(function() {
    $('.Project_Technology').select2();
    });

// responsive
    $(".Project_Technology").select2({
        width: 'resolve' // need to override the changed default
    });


    // array to string 
    


  </script>

</html>
