<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <!-- Css File Path -->
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
     <!-- Bootstrap version 5.0 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- ajax libraries -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
     <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('/bootstrap-tagsinput.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
       <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <!-- Yajra datatables  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <!-- inline CSS -->
    <style>
    .container-fluid{
     width:100%;
     background-color:white;
        }
      #logo{
          margin-top:2%;
            margin-left:4%;
      }
      #pl{
            margin-top:3%;
            text-align:center;
            font-family: 'Proza Libre', sans-serif;
            font-size:30px;
         
            
      }
    .container{
     /* background-color:grey; */
      width:100%;
      margin-top:0%;
        }
        .btn-sm{
            margin-top:0%;
            margin-bottom:1%;
        }
       
        #datatable{
            background-color:white;
            font-family: 'Roboto', sans-serif;
        }
        #datatable_filter{
          margin-top:3%;
          margin-left:65%;
          text-align:left;
           font-family: 'Proza Libre', sans-serif;
        
        }
        .form-control{
            font-family: 'Proza Libre', sans-serif;
            background-color:white;
           
        }

        #datatable_paginate{
            margin-left:65%;
        }
    </style>
  <!-- Project Title -->
<title>projects</title>
</head>
<!-- BODY  -->

<body>
    <!-- <div class="p-3 mb-2 bg-light text-dark"> -->
    <div class="container-fluid">
    <div id="row">
    <img id="logo" src="/Images/logo 2.png" width="160px">
    <h4 id="pl">PROJECTS</h4>
    </div>
    @if (Session::has('msg'))
    <div class="col-sm-3">
        <div class="alert alert-success" role="alert">{{Session::get('msg')}}</div>
    </div>
    @endif
    @if (Session::has('errormsg'))
    <div class="col-sm-3">
        <div class="alert alert-danger" role="alert">{{Session::get('errormsg')}}</div>
    </div>
    @endif
    
    <section class="py-5">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card header bg-light">
                          <h5>Get the Records between two dates</h5>
                     </div>
                    <div class="card-body">
                        <form action="" method="Get"> 
                   
                                        <div class="row">
                                        <div class="col-md-4">   
                                                <div class="form-group">
                                                <label for="">From Date</label>
                                                <input type="date" class="form-control"  name="from_date"  placeholder="From Date">
                                                </div>
                                        </div>
                                            
                                            <div class="col-md-4">   
                                                <div class="form-group">
                                                <label for="">To Date</label>
                                                <input type="date" class="form-control"  name="to_date"  placeholder="To Date">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">   
                                                <div class="form-group">
                                                <label for="">Check</label><br> 
                                                <button type="submit" class="btn btn-primary">Generate</button>
                                            </div>
                                        </div>
                              </div>
                         <div>
                    <div> 
                  <div>        
             </form>
            <div>
        <div> 
     <div> 
    </section>
    <div class="container">
    <a href="" class="btn btn-success btn-sm view_selected" id="pdf" >Generate PDF</a> 
   
     <a href="" class="btn btn-primary btn-sm view_selected" id="Filter" >Filter</a> 
   
    <a href="{{route('projects.add')}}" class="btn btn-danger btn-sm">New Project</a>

   
    <table id="datatable" class="table table-bordered  yajra-datatable" data-url="{{route('projects.list')}}">
    <thead class="thead bg-light text-black">
            <tr>
                <th><input type="checkbox"  name="main_checkbox" class="project_check" data-id="'.$row->id.'"/></th>
                        <th data-sotable=" true">Title</th>
                        <th data-sotable="false">Technology</th>
                        <th data-sotable="false">Type</th>
                        <th data-sotable="false">Status</th>
                        <th width="150">Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    if(isset($_GET['from_date'])&& isset($_GET['to_date']))
                    {
                        
                        echo $from_date = $_GET['from_date'];
                        $to_date = $_GET['to_date'];
                        // $con =mysqli_connect("localhost","root","","cybernest_world");
                        $query = "SELECT * FROM projects WHERE created_at BETWEEN '$from_date' AND '$to_date' ";
                        $query_run = mysqli_query($query); 

                        if(mysqli_num_rows($query_run)> 0 ){
                            foreach($query_run as $row){
                                echo $row['Client_Name'];
                            }
                        }else{
                            echo "NO RECORD FOUND";
                        }



                    }
                    
                    
                    
                    ?>

                </tbody>
                
                    </table>
                   </div>
              </div>
        </div>
     </div>
     <!-- MAIN CONATINER FLUID END -->
    </div>
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->
</body>

<script>


// Datatables
   

 $(document).ready(function()  {
     var table = $('#datatable').DataTable({
          
    processing: true,
    serverSide: true,
    ordering:true,
    columnDefs: [ {
      targets: 0,
      orderable: false
    } ],
    responsive: true,

     
     
    ajax: " {{route('projects.list')}}",
    columns: [{
        data: 'id'
        },
        {
            data: 'Project_Title'
        },
        {
            data: 'Project_Technology'
        },
        {
            data: 'Project_Type'
        },
        {
            data: 'Project_Status'
        },
        {
            data: 'action',
            name: 'actionBtn',
            defaultContent: '<i class="bi bi-trash"/>',
            orderable: false,
            searchable: false,
        },
        //    {
        //     data: 'action_2',
        //     name: 'actionBtn2',
        //      defaultContent: '<i class="fa fa-pencil"/>',
        //     orderable: false,
        //     searchable: false,
        // },
        
        
    ],
    
});
// generate pdf 
    $(".view_selected").click(function(e) {
        e.preventDefault();
        var checked = [];

     $("input:checkbox[name=ch]:checked").each(function() {
            checked.push($(this).attr('data-id'));
    });


// PDF FOR DATATABLES ONLY

        $.ajax({
                
                headers :{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"/projects/pdf",
                method:"POST",
                data:{checked:checked},
                
                success : function(data){
                window.open(window.location.origin+data, '_blank');

                                    
                console.log(data);
                        }
                    });
            
           
            }) ;
// Detailed View FOR MULTIPLE PAGES
     $(".detailed_view").click(function(e) {
        e.preventDefault();
        var checked = [];


        $("input:checkbox[name=ch]:checked").each(function() {
            checked.push($(this).attr('data-id'));
    });
          $.ajax({
                
                headers :{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:"/projects/pdflandscape",
                method:"POST",
                data:{checked:checked},
                
                success : function(data){
                window.open(window.location.origin+data, '_blank');

                                    
                console.log(data);
                        }
                    })

});


});
// Main Checkbox to select all Rows
    $(document).on('click','input[name="main_checkbox"]',function(){
        if(this.checked){
            $('input[name="ch"]').each(function(){
                this.checked = true;
            });
        }else{
              $('input[name="ch"]').each(function(){
                this.checked = false;
        });
    }
});



   
      
      
</script>

</html>
