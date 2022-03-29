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
    


       <!-- <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->
    <!-- Yajra datatables  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  

    <!-- FOR ARROWS SIGN -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.11.5/datatables.min.js"></script>
    <!-- <script type="text/javascript" src="DataTables/datatables.min.js"></script> -->
   
    <!-- Bootstrap datepicker 24-march-2022 -->
    
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
  <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>   -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    
   
   
   
   
    <!-- inline CSS -->
    <style>
    .container-fluid{
          
     width:100%;
     /* background-color:white; */
  background-color: #ffffff;
/* background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%); */
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
    .py-5{
     /* background-color:grey; */
      width:45%;
      margin-left: auto;
      margin-top:0%;
      
        }
       
       .thead{
            max-width:100%;
            padding:auto;
            text-align:center;
            margin:auto;
       }
       #datatable_wrapper{
            width:50%:
       }
        #datatable{
            background-color:#F9F9F8;
            font-family: 'Roboto', sans-serif;
        }
        #datatable_filter{
        margin-left:70%;
        margin-bottom:2%;
        text-align:left;
        margin-top:0%;
        font-family: 'Proza Libre', sans-serif;
        
        }
        
        .fg-toolbar{
           background-color: #ffffff;
            /* background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%); */
            border-style:none;
        }
        
        #datatable_length  {
        width:10%;
        height:0px;
        font-size:14px;
        margin-top:1%;
        margin-left:0%;
        text-align:right;
        font-family: 'Proza Libre', sans-serif;
        }
         #datatable_length select {
         width:35%;
         margin-bottom:0%;
        }

        #datatable_paginate{
            margin-left:72%;
        }
        #pdf{
            margin-bottom:2%;
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
    
    <div class="container">

    <section class="py-5">
        <div class=" dates">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card header bg-light text-black text-center ">
                          <h5>Get The Records Between Two Dates</h5>
                     </div>
                    <div class="card-body">
                        <!-- <form action="" method="Get">  -->
                   
                                     <div class="row justify-content-center input-daterange" >
                                        <div class="col-md-4">   
                                                <div class="form-group">
                                               
                                                <input type="text" id="from_date" class=" fa-solid fa-calendar date form-control dates"  name="from_date"  placeholder="From Date">
                                                </div>
                                        </div>
                                            
                                            <div class="col-md-4">   
                                                <div class="form-group">
                                                
                                                <input type="text" id="to_date" class=" fa-solid fa-calendar date form-control dates"  name="to_date"  placeholder="To Date">
                                                   
                                            </div>
                                            </div>
                                           
                                            
                                            <div class="col-md-4">   
                                                <div class="form-group">
                                                <i class="bi bi-calendar"></i><br>
                                                <button  href="" id="btn-filter" class="btn btn-primary">Filter</button>
                                                
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
    <a href="" class="btn btn-success btn-sm view_selected" id="pdf" >Generate PDF</a> 
     <!-- <button  href="" id="pdf-landscape " class="btn btn-danger btn-sm">Single PDf</button>
     -->
  
   
    <a href="{{route('projects.add')}}" class="bi bi-trash"></a>

   
    <table id="datatable" class="table table-bordered  yajra-datatable" data-url="{{route('projects.list')}}">
    <thead class="thead ">
            <tr>
                <th><input type="checkbox"  name="main_checkbox" class="project_check" data-id="'.$row->id.'"/></th>
                       
                        <th data-sotable="true">Name</th>
                        <th data-sotable="true">Email</th>
                        <th data-sotable="false">Title</th>
                        <th data-sotable="false">Technology</th>
                        <th data-sotable="false">Type</th>
                        <th data-sotable="false">Status</th>
                        <th data-sotable="false">Create</th>
                        <th width="150">Action</th>
                    </tr>
                </thead>
                
                
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
                                data: 'Client_Name'
                                },
                                {
                                    data: 'Client_Email'
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
                                    data: 'created_at'
                                },
                        
                                {
                                    data: 'action',
                                    name: 'actionBtn',
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


                // Landscape View FOR MULTIPLE PAGES
            //         $("#pdf_landscape").click(function(e) {
            //             e.preventDefault();
            //             var checked = [];


            //             $("input:checkbox[name=ch]:checked").click(function() {
            //                 checked.push($(this).attr('data-id'));
            //         });
            //             $.ajax({
                                
            //                 headers :{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            //                 url:"/projects/pdflandscape",
            //                 method:"POST",
            //                 data:{checked:checked},
                            
            //                 success : function(data){
            //                 window.open(window.location.origin+data, '_blank');

                                                
            //                 console.log(data);
            //                         }
            //                     })

            // });


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


       
 


            // Date Rangepicker Function using Ajax call 
            $('input').on('click',function(){
                $('.input-daterange').datepicker({
                    todayBtn:'linked',
                    foramt:'yyyy-mm-dd',
                    autoclose:true
                });
                // it will load data in datatables 
                load_data();
                // load data table for ajax call server side
                function load_data(from_date = '', to_date = '')
                {
                 var table = $('#datatable').DataTable({
                        Process:true,
                        serverSide:true,
                        
                         ajax:{
                            url : " {{route('projects.list')}}",
                            data:  {from_date:from_date,to_date:to_date}

                         },
                            columns: [{
                                data: 'id'
                                },
                                {
                                    data: 'Client_Name'
                                },
                                {
                                    data: 'Client_Email'
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
                                    data: 'created_at'
                                },
                                {
                                    data: 'action',
                                    name: 'actionBtn',
                                    orderable: false,
                                    searchable: false,
                                },
                               
                                
                                
                            ],

                            method:"POST",
                            // data:{checked:checked},
                            
                            success : function(data){
                            window.open(window.location.origin+data, '_blank');

                                                
                            console.log(data);

                            }

                    })
                }
   
                
                 $('#btn-filter').click(function(){
                    var from_date =$('#from_date').val();
                     var to_date =$('#to_date').val();

                     if(from_date != '' && to_date != ''){
                         $('#datatable').DataTable().destroy();
                            load_data(from_date,to_date);

                        }
                        else{
                            alert('Both Date Is Required');
                        }
                });








});
                



                
</script>

</html>
