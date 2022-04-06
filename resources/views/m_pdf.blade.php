<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <title>landscape pdf</title>
    <style>
    .body {}

    .container {
        padding: 0;
        width: 100% !important;
        margin: 0;

        height: 100%;

    }

    #logo {
        background-color: #FFFFFF;
        padding: 40%;
        margin-top: 10% !important;
    }

    #mh {
        font-size: 24px;
        margin-left: 45%;
        margin-top: -20%;
        width: 100%;
        letter-spacing: 1px;

        text-align: center;
        background-color: #000000;
        color: #FFFFFF;
    }

    #title {
        font-size: 34px;
        color: black;

        letter-spacing: 2px;
        margin-left: 40%;
    }

    .row {

        width: 100%;
        margin-left: 0%;
        margin-top: 0 !important;
    }

    .col-md-8 {
        width: 100%;
        margin-top: 10%;
    }

    #description {
        width: 900px;
        /* border: 1px solid green; */
        padding: 10px;
        margin: 0px;
        text-align: justify;
    }

    .col-md-4 {
        background-color: red;
        float: right;
        height: 100%;
    }


    #tec {
        font-size: 18px;
        letter-spacing: 1px;
        width: 300px;
        padding: 10px;
        margin: 0px;
        text-align: justify;
    }

    .primary {
        /* background-color:#000000;
        color:#FFFFFF; */
        width: 50%;
    }

    #name {
        font-size: 18px;
        letter-spacing: 1px;
        width: 300px;
        padding: 20px;
        margin: 2px;
        text-align: justify;

    }

    .page-break {
        page-break-after: always;
        text-align: center;
        margin-left: 50%;
    }
    </style>
</head>

<body class="body">
    @foreach($multi['multiple'] as $newitem)


    <!-- image logo -->
    <div class="container">
        <img id="logo" src="Images/logo 2.png" style="width:550px; height:100px;">
        <h5 id="mh">We Design And Build Secure, Resilient Software
            For Companies That Need To Scale.</h5>
        <! <div class="page-break">
    </div>

    <!-- Data Body -->
    <div class="row ">
        <h5 id="title" class="title">{{$newitem->Project_Title}}</h5>
        <br>
        <h5 class="primary">Name</h5>
        <p id="name">{{$newitem->Client_Name}}</p>
        <div class="col-md-8">
            <h5 class="primary">Usecase Description</h5>
            <p id="description">{{$newitem->Usecase_Description}}</p>
            <br>
            <h5 class="primary">Technology</h5>
            <p id="tec">{{$newitem->Project_Technology}}</p>
            <br>
            <h5 class="primary">Project Type</h5>
            <p id="tec">{{$newitem->Project_Type}}</p>

        </div>

    </div>


    @endforeach
    </div>
    <div class="page-break">Break</div>
</body>

</html>