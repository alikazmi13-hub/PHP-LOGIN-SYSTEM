<!DOCTYPE html>

<html>
<head>
    <title>PDF FORMAT</title>
</head>
<body>
  <style>

    .body{
      width:100%;
      height:100vh;
      
    }
    .container{
      background-color:white;
      color:black;
      max-width:100%;
    }
    .th{
      background-color:red;
      margin:1;
      color:white;
    }
    #p{
      background-color:red;
    }
    </style>
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

<p id="p">@cybernest|info@cybernest.com</p>
<div>
</body>
</html>