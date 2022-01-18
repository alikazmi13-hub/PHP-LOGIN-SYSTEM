<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <!-- Css File Path -->
    <link rel="stylesheet" type="text/css" href="{{ ('css/projectlist.css') }}" >
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
    
    <!-- Yajra datatables  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
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
    .container{
     /* background-color:grey; */
      width:100%;
      margin-top:3%;
        }
        .btn-sm{
            margin-top:0%;
            margin-bottom:1%;
        }
       
        #datatable{
            background-color:white;
            font-family: 'Roboto', sans-serif;
        }
    

    </style>
  <!-- Project Title -->
<title>PROJECTSLIST</title>
</head>
<!-- BODY  -->

<body>
    <!-- <div class="p-3 mb-2 bg-light text-dark"> -->
    <div class="container-fluid">
    <div id="row">
    <img id="logo" src="/Images/logo 2.png" width="250px">
    
    </div>
    @if (Session::has('msg'))
    <div class="col-md-12">
        <div class="alert alert-success" role="alert">{{Session::get('msg')}}</div>
    </div>
    @endif
    @if (Session::has('errormsg'))
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">{{Session::get('errormsg')}}</div>
    </div>
    @endif
    <div class="container">
    <a href="" class="btn btn-success btn-sm view_selected" id="pdf" >View Selected</a> 
    <button type="button"  class="btn btn-danger btn-sm" onclick="window.location.reload()">Reload page</button>
    <a href="{{route('projects.add')}}" class="btn btn-primary btn-sm">ADD PROJECT</a>
    <table id="datatable" class="table table-bordered yajra-datatable" data-url="{{route('projects.list')}}">
    <thead class="thead bg-light text-black">
            <tr>
                <th><input type="checkbox"  name="chk" class="project_check" data-id="'.$row->id.'"/></th>
                        <th data-sotable=" true">Project_Title</th>
                        <th data-sotable="false">Project_Technology</th>
                        <th data-sotable="false">Project_Type</th>
                        <th data-sotable="false">Project_Status</th>
                        <th width="100">EDIT </th>
                        <th width="100">Delete</th>
                        <th width="100">Export</th>          
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
            data: 'action_edit',
            name: 'Edit',
            orderable: false,
            searchable: false,
        },
        {
            data: 'action_delete',
            name: 'Delete',
            orderable: false,
            searchable: false,
        },
        {
            data: 'action_export',
            name: 'Export',
            orderable: false,
            searchable: false,
        },

    ],
    
});

    $(".view_selected").click(function(e) {
        e.preventDefault();
        var checked = [];


        $("input:checkbox[name=ch]:checked").each(function() {
            checked.push($(this).attr('data-id'));
    });

    //     $("input:checkbox[name=ch]:checked").map(function() {
    //     // checked.push($(this).attr('data-id'));
    //     checked.push($(this).val('id'));
        

    //  });
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
});





      
      
</script>

</html>
