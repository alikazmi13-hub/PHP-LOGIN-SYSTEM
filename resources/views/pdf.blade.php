
  @extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
 
<table class="table table-striped">
   <thead class="thead bg-dark text-white">
                                <tr>
                                    <th><input type="checkbox"  name="chk" class="project_check" data-id="'.$row->id.'"/></th>
                                    <th data-sotable=" true">Project_Title</th>
                                    <th>Project_Technology</th>
                                    <th>Project_Type</th>
                                    <th>Project_Status</th>
                                    <th width="100">EDIT </th>
                                    <th width="100">Delete</th>
                                    <th width="100">Export</th>

                                </tr>

                            </thead>
  <tbody>
    @foreach($shows as $show)
    <tr>

        <td>{{}}</td>
        <td>Project_Technology</td>
        <td>Project_Title</td>
        <td>Project_Technology</td>
        <td>Project_Type</td>
        <td>Project_Status</td>

                                    
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

</body>
</html>