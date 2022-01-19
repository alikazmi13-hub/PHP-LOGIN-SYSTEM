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
    .th{
      background-color:black;
      margin:1;
      color:white;
       
      font-family: 'Roboto', sans-serif;
    }
    
    .row{
      margin-top:0%;
      width:100%;
  
      
    }
    th{
      text-align:center;
      border:solid;
      width:10px;
    }
    td{
      text-align:center;
    }
   
    </style>
  </head>

<body>
  
  
 <div class="container">

  <table class="table table-striped">
   <thead class="thead bg-dark text-white">
    <tr>
   <!-- <th><input type="checkbox"  name="chk" class="project_check" data-id="'.$row->id.'"/></th> -->
      
          <th class="th">Client_Name</th>
          <th class="th">Client_Email</th>
          <th class="th">Project_Title</th>
          <th class="th">Project_Technology</th>
          <th class="th">Project_Type</th>
          <th class="th">Project_Status</th>
          
                                         

    </tr>
     </thead>
    <tbody>
  @foreach($index as $p)
    <tr>
      
    
       <td>{{$p->Client_Name}}</td>
       <td>{{$p->Client_Email}}</td>
        <td>{{$p->Project_Title}}</td>
        <td>{{$p->Project_Technology}}</td>
        <td>{{$p->Project_Type}}</td>
        <td>{{$p->Project_Status}}</td>
                        
    </tr>
      @endforeach
  </tbody>
   
</table>
   
       
<div>
</body>
</html>