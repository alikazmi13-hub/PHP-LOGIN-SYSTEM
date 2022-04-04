<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>












<title>landscape pdf</title>
    <style>


.body{
    background-color: #000000;;
    color:white;
    font-family: 'Inconsolata', monospace;
   width:100%;
  height:100%;
    }
    .col-md-12{
       /* fallback for old browsers */
       font-family: 'Roboto Slab', serif;
       
      }
     .card-header{
        /* background-color:#F5F5F5; */
        color:#FFFFFF;
       
      }
      .page-break {
    page-break-after: always;
}
     .card-title{
      font-family: 'Merriweather', serif;
      font-size:35px;
      text-align:center;
     }
     #mainimg{
       width:400px;
       height:250px;
       margin-left:1%;
       margin-top:3%;
       opacity:0.9;
       border:solid;
     }
     .card-body{
       /* font-family: 'Merriweather', serif; */
       letter-spacing: 3px;
       text-align:justify;
     }
     .flex{
       float:right;
       margin-right:8%;
       text-align:right;
       margin-bottom:25px;
       width:40%;
       margin-top:10px;
       height:30%;
     }
     .rounded{
       width:250px;
       height:200px;
      
     }
     #tec{
       font-family: 'Merriweather', serif;
      font-size:30px;
     }
        </style>
  </head>

<body class="body">

     

  <!-- image logo -->
  <img id="logo" src="Images/whitelogo.png" style="width:250px; height:50px;">
    
       
<!-- Main Column 12 -->
        
<div class="col-md-12 mt-1">
              
      @foreach($multi['multiple'] as $newitem)

       
          <div class="card-header mt-1">
            <h5 class="card-title">{{$newitem->Project_Title}}</h5>
          </div>
            
          <div class="card-body mt-1">
            <h5>{{$newitem->Usecase_Description}}</h5>
             <img id="mainimg" src="Images/main2.jpg"class="rounded" alt="...">
           
            
            <div class="flex">
              <h5 id="tec">TECHNOLOGIES</h5>
              <img src="Images/main 3.png" class="rounded" alt="...">
            </div>
          
      
          </div>

<div class="page-break">
 
</div>

       @endforeach
      </div>

      

   </body>

</html>