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
    padding:0;
    width:100%;
    margin:0;
    height:100%;
    
    }
    
    .container{
     
      padding:0;
      width:100%;
      margin:0;
      height:100%;
      }
    #logo{
        background-color:#FFFFFF;
        padding:40%;
        margin-top:10%;
    }
    #mh{
        font-size:24px;
        margin-left: 45%;
        margin-top: -20%;
        width:100%;
        text-align: center;
        border: 1px solid red;
    }
      #title{
        font-size:34px;
        color:white;
        background-color:red;
        margin-top: 0%;
        margin-bottom: 0%;
        text-align: center;
        
      }
      
      .col-md-12{
        /* background-color:red; */
        width:100%;
        margin-top:0%;
       

      }
      #description{
        font-size:18px;
        padding-left: 0%;
        margin-top: 1%;
        text-align: justify;
        
      }
      #tec{
        border:1rm solid red;
      }









     
      .page-break {
      page-break-after: always;
      }
   

        </style>
  </head>

<body class="body">
  @foreach($multi['multiple'] as $newitem)
   <!-- image logo -->
   <div class="container">
      <img id="logo" src="Images/logo 2.png" style="width:550px; height:100px;">
      <h5 id="mh">We design and build secure, resilient software 
      for companies that need to scale.</h5>
      <!-- Pages Break -->
      

      <!-- Data Body -->
      <div class="page-break">Break</div>
       <div class="row">
          <h5 id="title">{{$newitem->Project_Title}}</h5>
            </div>

          <div class="col-md-12">
        <p id="description">{{$newitem->Usecase_Description}}</p>
          <br>
          <h5>Technology</h5>
          <p id="tec">{{$newitem->Project_Technology}}</p>
      
      </div>
    
   
    
      @endforeach
  </div>
 <div class="page-break">Break</div>
</body>

</html>