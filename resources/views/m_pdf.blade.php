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
    <!-- Font Family -->

    <link rel=“preconnect” href=“https://fonts.googleapis.com”>
<link rel=“preconnect” href=“https://fonts.gstatic.com” crossorigin>
<link href=“https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap” rel=“stylesheet”>

    <title>landscape pdf</title>
    <style>
    .body {
        font-family: 'Inconsolata', monospace;
        font-weight:400px;
    }

    .container {
        padding: 0;
        width: 100% !important;
        margin: 0;
       }

    #logo {
        background-color: #FFFFFF;
        padding: 20% 40% 30%;
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
    .primary {
        margin-bottom: 10px;
    }
    .badges {
        font-size: 16px;
        padding: 4px 8px 8px;
        border-radius: 20px;
        background: #ddd;
        color: #000;
        font-weight: bold;
        display: inline-block;
    }


    #name {
        font-size: 18px;
        letter-spacing: 1px;
        width: 300px;
        padding: 20px;
        margin: 2px;
        text-align: justify;

    }
    .projects-list {
        position: relative;
    }
    .mini-logo {
        position: absolute;
        top: 0;
        right: 0;
    }
    .mini-logo img {
        width: 40px;
        height: auto;
        display: block;
    }
    .page-break {
        page-break-after: always;
        text-align: center;
        margin-left: 50%;
    }
    </style>
</head>

<body class="body">

    <!-- image logo -->
        <div class="container">
            <img id="logo" src="Images/logo 2.png" style="width:550px; height:100px;">
            <h5 id="mh">We Design And Build Secure, Resilient Software For Companies That Need To Scale.</h5>
            <div class="page-break"></div>
        </div>

    @foreach($multi['multiple'] as $newitem)
    <div class="projects-list">
        <div class="mini-logo">
            <img src="Images/logo.png">
        </div>
        <!-- Data Body -->
        <div class="row">
            
            <h5 id="title" class="title">{{$newitem->Project_Title}}</h5>
            <br>
            
            <p id="name">{{$newitem->Client_Name}}</p>
            <div class="col-md-8">
                
                <p id="description">{{$newitem->Usecase_Description}}</p>
                <br><br>
                
                <div class="badges" id="tec">{{$newitem->Project_Technology}}</div>
                <br><br>
                
                <div class="" id="tec">{{$newitem->Project_Type}}</div>

            </div>

        </div>


        <div class="page-break"></div>
    </div>
    @endforeach
</body>

</html>