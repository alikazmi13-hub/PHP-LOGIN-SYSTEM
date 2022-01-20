<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MULTIPLE PDF</title>
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
   .page-break {
    page-break-after: always;
}
    </style>
  </head>

<body>
    
    <div class="container">
      div class="container">

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
  @foreach($items as $item)
    <tr>
      
    
       <td>{{$item->Client_Name}}</td>
       <td>{{$item->Client_Email}}</td>
        <td>{{$item->Project_Title}}</td>
        <td>{{$item->Project_Technology}}</td>
        <td>{{$item->Project_Type}}</td>
        <td>{{$item->Project_Status}}</td>
                        
    </tr>
      @endforeach
  </tbody>
   
</table> 




<!--     
    @foreach($items as $item)
        <div class="card">
           <h3>{{$item->Project_Title}}</h3>
        <br>
        <div class="box">{{$item->Project_Description}}</div>
            <div class="page-break"></div>
                <h1>Page 2</h1>
         @endforeach -->
<div>
</body>
</html>