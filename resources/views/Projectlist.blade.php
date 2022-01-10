<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('/bootstrap-tagsinput.css')}}" rel="stylesheet">
    <link
        href="https:
        //fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Roboto:ital,wght@0,700;1,700&family=Work+Sans:ital,wght@0,400;1,600&display=swap"
        rel="stylesheet">
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


    <title>PROJECTSLIST</title>
</head>
<!-- BODY  -->

<body class="bg-light">
    <div class="p-3 mb-2 bg-dark text-white">
        <div class="container">
            <h1>CYBERNEST PROJECTS</h1>
            <!-- container end here -->
        </div>

        <!-- Style Div  End -->
    </div>
    <!-- Conatiner For Add Project Heading -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-0 text-left">
                <!-- Add Project Button link  -->
                <a href="{{route('projects.add')}}" class="btn btn-primary btn-sm">ADD PROJECT</a>
            </div>
            <!-- If new project form details will successfully submit  -->
            <div class="col-md-6 text-right mb-1">
                <a href="#" class="btn btn-dark  btn-sm view_selected">VIEW SELECTED</a>
            </div>

            <div class="col-md-6 text-right mb-2">
            <button type="button"  class="btn btn-dark  btn-sm align-left" onclick="window.location.reload()">Reload page</button>
            </div>           
        </div>
        @if (Session::has('msg'))
        <div class=" col-md-12">
            <div class="alert alert-success" role="alert">{{Session::get('msg')}}</div>
        </div>
        @endif
        @if (Session::has('errormsg'))
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">{{Session::get('errormsg')}}</div>
        </div>
        @endif
    </div>
    <!-- Center Container End Here -->
    <!-------- Card Row For PRojects Record ------>
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="card">
                <div class="card-Header">

                    <h2>Projects Record</h2>
                </div>

                <div class="card-body">
                    <div class="table-responsive-md">
                        <table id="datatable" class="table table-bordered yajra-datatable"
                            data-url="{{route('projects.list')}}">
                            <thead class="thead bg-dark text-white">
                                <tr >
                                    <th >select</th>
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

</body>
<script>
 $(document).ready(function()  {
    var table = $('#datatable').DataTable({
   
        processing: true,
        serverSide: true,
       
        ajax: " {{route('projects.list')}}",
        columns: [
                  {
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

        ]
    });

    // get Checkbox 
    $( ".view_selected" ).click(function(e) {
        e.preventDefault();
    var checked = [];
    
    $("input:checkbox[name=ch]:checked").map(function() {
        console.log('id',$(this).attr("data-id"))

        checked.push($(this).attr("data-id"));
    }) ;
    console.log('checked',checked)

        alert(checked);
    //var data = checked.serialize();

        $.ajax({
        type: "GET",
        url: "{{route('projects.getChecked')}}",
        data: {checked:checked},
        success: function(msg){
            $('.answer').html(msg);
        }
    });

    });
        
    
});



      
</script>

</html>
