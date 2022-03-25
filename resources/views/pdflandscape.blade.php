<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   



<title>landscape pdf</title>
    <style>

      .box{
        min-width: 100%;
        margin-top: 50px !important;
        background-color:;
      }
      .table{
        margin-top: 50px !important;
      }
        
      
        </style>
  </head>

<body>
  
  
        <div class="container-lg ">
        
        <table class="table  table-responsive table-bordered">
          <thead class="th text-white bg-dark text-center">
          <tr>
                  <th class="col">Name</th>
                  <th class="col">Email</th>
                  <th class="col">Technology</th>
                  <th class="col">Type</th>
                  <th class="col">Status</th>
                
            </tr>
            </thead>

          <tbody class="text-center">
            @foreach($items as $item)
              <tr>
                
                  
                    <td>{{$item->Client_Name}}</td>
                    <td>{{$item->Client_Email}}</td>
                  <td>{{$item->Project_Technology}}</td>
                  <td>{{$item->Project_Type}}</td>
                  <td>{{$item->Project_Status}}</td>
                  
                                
            </tr>
              @endforeach
          </tbody>
          
      </table>
                <div class="card bg-dark text-white responsive">
                   <h6>{{$item->Project_Title}}</h6>
                   
                  <div class="card-body bg-light text-dark text-center">
                    <p>{{$item->Usecase_Description}}</p>
                  <br>
                  </div>   
            </div>   
                  
              
   </body>
</html>