<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<title>landscape pdf</title>
    <style>
      .body{
        max-width:100%;
        background-color:#F8F8FF ;
        color:#000000 ;
        max-height:100%;
        
        
      }
     
      .h3{
         color:#708090;
          background-color:#F8F8FF ;
      }
      .heading{
        margin-top:30%;
        font-family: 'Open Sans', sans-serif;
   
        text-align:center;
         
      }
      .h6{
       color:#708090;
       font-family: 'Proza Libre', sans-serif;
      }
      .table{
        margin-left:0%;
        border:solid;
        max-width:40%;
        max-height:100%;
        margin-top:2%;
        margin-bottom:0%;
          
       grid-row-gap: 50px;
      }
  
      .th{
          background-color:#F7F8FF ;
          border:solid;
          padding-left:0%;
          text-align:center;
          font-family: 'Open Sans', sans-serif;
          border: 2px solid ;
          border-radius: 5px;
          
        }
       .td{
            padding-left:0%;
            text-align:center;
            font-family: 'Proza Libre', sans-serif;
       }
        </style>
  </head>

<body>
  
 
      
    

   
  
       
  <h1>LANDSCAPE</h1>      
        <table class="table">
          <thead class="thead">
        <tr>
          <th class="th">Title</th>
          <th class="th">Name</th>
          <th class="th">Email</th>
          <th class="th">Technology</th>
          <th class="th">Type</th>
          <th class="th">Status</th>
          <th class="th">Usecase_Description</th>      
          </tr>
            </thead>
   
    <tbody class="tbody">
          
            @foreach($items as $item)
             <tr>
                  <td>{{$item->Project_Title}}</td>
                  <td>{{$item->Client_Name}}</td>
                  <td>{{$item->Client_Email}}</td>
                  <td>{{$item->Project_Technology}}</td>
                  <td>{{$item->Project_Type}}</td>
                  <td>{{$item->Project_Status}}</td>
                 
                  <td>{{$item->Usecase_Description}}</td>
                           
           
           
             </tr> 
                 @endforeach

              
        </tbody>
  
      </table>
      <div class="heading">
       <h6>Copyright © 2020 CYBER NEST. All rights reserved.   |   PRIVACY   .   TERMS</h6>
    
    </div>
          
   </body>
</html>