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
    <!-- pdf -->
    
    <!-- End here -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('/bootstrap-tagsinput.css')}}" rel="stylesheet">
    <!-- <link
        href="https:
        //fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Roboto:ital,wght@0,700;1,700&family=Work+Sans:ital,wght@0,400;1,600&display=swap"
        rel="stylesheet"> -->
        
        <!-- Tags -->




<!-- datatables -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


    <title>PDFVIEW</title>
</head>
<body class="bg-light">
    <div class="p-3 mb-2 bg-dark text-white">
        <div class="container">
            <h1>PROJECT PDF LIST</h1>
        </div>
     </div>
    
    <div class="container">
     <div class="row">
        <div class="col-md-12 text-center">
            <div class="card">
                <div class="card-Header">
                    <h2>Projects PDF</h2>
                </div>

                <div class="card-body">
                    <div class="table-responsive-md">
                        <table data-url="{{route('projects.PDFPAGE')}}">
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
                    
                        </table>
                    </div>
                </div>
            </div>
       

</body>
</htmL>
