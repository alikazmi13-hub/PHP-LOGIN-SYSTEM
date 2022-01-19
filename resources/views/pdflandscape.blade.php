<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF FORMAT</title>
<style>

    
    .container{
     background-color: white !important;
      color:black;
      max-width:100%;
      height:100%;
      margin-left:12%;
      margin-right:12%;

    }
    
    
   
   h3{
        
        color: black;
        text-align: left;
        text-transform: uppercase;
        font-size:30px;
   }
   .box{
     border:solid;
     align:justify;
     text-align:justify;
      margin-top:0%;
     border: 1px;
     text-transform: lowercase;
      letter-spacing: 2px;
     line-height: 1.2;
   
   }
    </style>
  </head>

<body>
    
    <div class="container">
      @foreach($items as $item)
  
    <div class="card">
           
              <h3>{{$item->Project_Title}}</h3>
        <br>
            <div class="box">{{$item->Project_Description}}</div>
              @endforeach
       
<div>
</body>
</html>