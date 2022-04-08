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
        font-weight:600px;
        
       }

    .container {
        padding: 0;
        margin: 0;
    }
    .main-bg {
        width: 100%;
        height: 680px;
        background-repeat: no-repeat;
        background-image: url("Images/logos/top2.jpg"); 
        background-size: cover;
    }
    .inner-page {
        width: 100%;
        height: 680px;
        background-repeat: no-repeat;
        background-image: url("Images/logos/inner.jpg"); 
        background-size: cover;
    }
    .main-bg .container {
        padding: 20%;
    }
    

    #logo {
        margin-bottom: 20px;
        
    }

    #mh {
        font-size: 24px;
        width: 100%;
        letter-spacing: 1px;
        font-weight:600;
        text-align: center;
        
        
    }

    #title {
        font-size: 34px;
        
        letter-spacing: 2px;
        margin-left: 0px 0px;
        width:93.4% auto;
        text-align:center;
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
        padding: 10px;
        margin: 0px;
        text-align: justify;
    }

    .col-md-4 {
        float: right;
        height: 100%;
    }
    .primary {
        margin-bottom: 10px;
    }
    #title{
        font-family: 'Open Sans', sans-serif;
    }
    .badges {
        font-size: 16px;
        padding: 4px 8px 8px;
        border-radius: 20px;
        font-weight: bold;
        background: #ddd; 
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
        bottom: 60px;
        right:0;
        
    }
    .mini-logo img {
        width: 40px;
        height: auto;
        display: block;
    }
    .row-2{
    width:100%;
    margin-left: 20px;
        
    }
    #logoimg{
    height:32px;
    width:32px;
    background-size:32px;
    display: inline-block;
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
        <div class="main-bg">
            <div class="container">
                <img id="logo" src="Images/logo 2.png" style="width:550px; height:100px;">
                <h5 id="mh">We Design And Build Secure, Resilient Software For Companies That Need To Scale.</h5>
            </div>
        </div>
        <div class="page-break"></div>
    @foreach($multi['multiple'] as $newitem)
        <div class="projects-list">
            <div class="mini-logo">
                <img src="Images/logo.png">
            </div>
        </div>
    @php
        $techs = explode(",",$newitem->Project_Technology);
    @endphp
    
        <!-- Data Body -->
        <div class="inner-page">
            <div class="row">
            
            <h5 id="title" class="title">{{$newitem->Project_Title}}</h5>
            <br>
        
            <p id="name">{{$newitem->Client_Name}}</p>
            <div class="col-md-8">
                
                <p id="description">{{$newitem->Usecase_Description}}</p>
                <br><br>
                
                <div class="row-2" id="tec">
                    @foreach ($techs as $tech)
                        <img id="logoimg" src="Images/logos/{{strtolower($tech)}}.png" >
                    @endforeach
                    
                </div>
                <br><br>

                <div class="" id="tec">{{$newitem->Project_Type}}</div>

            </div>

        </div>
        </div>

       <div class="page-break"></div>
    @endforeach
</body>

</html>