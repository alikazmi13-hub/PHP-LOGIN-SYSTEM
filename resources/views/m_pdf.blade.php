<!DOCTYPE html>

<html>

<head>
    <link rel="icon" href="{{ url('/Images/logo.png') }}">
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

    <title>PDF</title>
   
   <style>
      
    body {
        font-family: "Open Sans", sans-serif;
        padding: 0;
        margin: 0;
        
       }

        @page { 
            margin: 0px; 
            font-family: 'Open Sans', sans-serif;
        }
    .container {
        padding: 0;
        margin: 0;
    
    }
    .main-bg {
        max-width: 100%;
        height: 100%;
        /* background: #264483; */
        opacity:0.9;
        background-repeat: no-repeat;
        background-image: url("Images/logos/top2.jpg"); 
        background-size: cover;
    }
   
  .content{
   
    width:900px;
    height:50px;
    position:absolute;
    left:0px;
    bottom:25px;
    color:white;
    background: #3d5fb0;
     border-top-style: solid;
    
    
  }
    .d-flex{
        position:absolute;
        background: #264483;
        width:900px;
        height:60px;
        color:white;
        z-index:2;
        left:420px;
        bottom: 0px;
        text-align:right;
        border-top-style: solid;
}
        

    


    .inner-page {
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-image: url("Images/logos/inner.jpg"); 
        background-size: cover;
    }
    .inner-page .holder {
        width: 900px;
        margin: 10% auto;
    }
    .main-bg .container {
        padding: 20%;
    }
    

    #logo {
        
        margin-bottom: 30px;
        margin-left:10%; 
        
    }
    .h32{
        text-align:right;
        color:white;
        margin-left:130px;
    }
    #mh {
        
        font-size: 24px;
        width: 100%;
        letter-spacing: 1px;
        font-weight:600;
        text-align: center;
        margin-left:0%;
        
    }

    #title {
        font-size: 34px;
        margin-left: 0px 0px;
        width:100%;
        text-align:center;
        font-family: "Open Sans", sans-serif;
    }

    .row {
        width: 100%;
        margin-left: 0%;
        margin-top: 0 !important;
       
    }

    .col-md-8 {
        width: 80%;
        margin: 10% auto;
        
    }

    #description {
        font-family: "Open Sans", sans-serif;
        padding: 10px;
        margin: 0px;
    }

    .col-md-4 {
        float: right;
        height: 100%;
    }
    .primary {
        margin-bottom: 10px;
    }
    .badges {
        font-size: 16px;
        font-family: "Open Sans", sans-serif;
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
        font-family: "Open Sans", sans-serif;

    }
    .projects-list {
        position: relative;
        font-family: "Open Sans", sans-serif;
        
        left:90%;
    }
    .mini-logo {
        position: absolute;
        bottom: 50px;
        
    }
    .mini-logo img {
        width: 40px;
        height: auto;
        display: block;
        right:0px;
    }
    .row-2{
    width:100%;
    margin-left: 20px;
        
    }
    #logoimg{
    height:40px;
    width:40px;
    background-size:32px;
    display: inline-block;
    }
    .page-break {
        page-break-after: always;
        text-align: center;
        margin-left: 50%;
    }
    
        .about-page{
         max-width: 1320px;
        height: 700px;
        font-family: "Open Sans", sans-serif;
        background: #000000;
        
       
        
    }

     .col-md-4{
         margin-top:0;
         width:300px;
         height:700px;
         float:left;
         left:0;
         border:solid;
         
         
                 
     }
    #about-image{
       width:170px;
       height:40px;
       margin-top:290px;
       border:solid;
       border-color:white;
       margin-left:15%!important;
       /* background: ; */
    }
    #ab{
         font-size:50px;
         margin-left:0%;
         margin-top:90px;
         text-align:center;
         color:#FFFFFF;
         font-family: "Open Sans", sans-serif;
         opacity:0.9;



        }
        span{
            text-align:right;     
        }
        .flex{
           background: #FFFFFF;
           width:900px;
           height: 240px;
           margin-left:270px;
           position: absolute;
            margin-top:240px;
        }
        #about{
             text-align:justify;
             margin-left:1.9%;
             color:black;
             font-size:22px;
             line-height: 1.8;
             font-family: "Open Sans", sans-serif;


            }

        .Address-page{
         margin-top:0px;
         max-width: 1320px;
         height: 700px;
         opacity:0.8;
         font-family: "Open Sans", sans-serif;
         
     
      
            }
        .col-md-6{
            margin-top:40px;
            left:0px;
            bottom:0px;
            width:500px;
            height:100px;
            color:#0000FF;
            background: #003366;
             
            
            
        }
       
        .add-image{
        width:50px;
        height:50px;
        margin-left:1200px;
        margin-top:50px;
        position:absolute;
       
       

        }
        .Address-regional{
        font-size:35px;
        padding-left:265px;
        margin-top:90px;
        font-family:'sans','sans-sarif';
        background: #FFFFFF;
        color:#003366;
        
        
        
        
          
  
        }
        .add{
           font-family:'sans','sans-sarif';
           color: #FFFFFF;
            background: #003366;
        }
        .ad-h1{
            margin-top:220px;
            font-size:22px;
            margin-left:320px;
            width:350px;        
            text-align:justify;
            height:70px;
            font-family:'sans','sans-sarif';
            


         
            
        }
        .ad-h2{
            margin-top:10px;
            font-size:22px;
            margin-left:320px;
            width:350px;
            height:70px;
            font-family:'sans','sans-sarif';

        }
       
        .builing-image{
        width:20px;
        height:20px;
        margin-left:0;
        margin-top:0;
        position:absolute;
        }










        .last-page{
        width: 100%;
        height: 96.5%;
        background-repeat: no-repeat;
        background-image: url("Images/m9.png"); 
        background-size: cover;
        color:#FFFFFF;
        font-family: "Open Sans", sans-serif;
       
        
    }
    #last-container{
      padding: 0px;
      margin: 0px;
      width: 100%;
      height: 90%;
    }
    #last-image{
       width:400px;
       height:100px;
       margin-top:100px;
       margin-left:45%!important;
    }
    #th{
         font-size:40px;
         margin-left:55%;
         margin-top:100px;
         text-align:center;
         font-family: "Open Sans", sans-serif;

        }
        #em{
            text-align:right;
             margin-top:280px;
             line-height: 1.8;
             float:left;
             margin-left:7%;
             font-family: "Open Sans", sans-serif;

        }
        
    </style>
</head>

<body class="body">

    <!-- image logo -->
        <div class="main-bg">
            <div class="container bg-primary text-light">
                <!-- <img id="logo" src="/Images/logo2.png"  style="width:420px; height:80px;"> -->
                  <img id="logo" src="/Images/logo2.png"  style="width:420px; height:80px;">
                    <h5 id="mh">We Design And Build Secure, Resilient Software For Companies That Need To Scale.</h5>
                </div>

                <div class="content">
                    <div class="d-flex align-items-md-end">
                                <h3 class="h32">info@cybernest.com</h3>
                                <h3  class="h32">www.cybernest.com</h3> 
                            </div>   
                  </div>
        </div>

            <!-- About Page -->
         <div class="about-page">
              <div class="col-md-4 bg-primary" id="">
                    <h1 id="ab"><span style="color:black">About</span><br>Company</h1>
                        <!-- <img id="about-image" src="/Images/whitelogo.png" > -->
                           <img id="about-image" src="/Images/whitelogo.png" >
                    
                        </div>
            <div class="flex square rounded pt-5">
                 <h6 id="about">Cyber Nest is one of the fastest growing software company.
                 We have highly experienced team who have successfully launched various projects and proved ours skills.We take responsibility of the work, and maintain the best relationship with our customers.</h6>
            </div>
        </div>


        <!-- Where we Stand -->
          <div class="Address-page bg-primary">
               <div class="col-md-6  bg-primary text-light" id="add-container">
              <img class="add-image" src="/Images/logo.png">
              <h1 class="add">Where We Stand</h1>
                 <span class="Address-regional ">Regional Office</span>
                <br>
                <h6 class="ad-h1 text-light"><img class="builing-image" src="/Images/building.png"><br>2918 Avenue I Unit #5055 Brooklyn NY 11210 United States</h6>
                      <br>  
                      <h6 class="ad-h2 text-light "><img class="builing-image" src="/Images/building.png"><br>345, Block H-3 Johar Town, Lahore, 54000</h6>
                 </div>
            
           
        </div>





        <!-- <div class="page-break"></div> -->
    @foreach($multi['multiple'] as $newitem)
        <div class="projects-list">
            <div class="mini-logo">
                <img src="/Images/logo.png">
            </div>
        </div>
    @php
        $techs = explode(",",$newitem->Project_Technology);
    @endphp
    
        <!-- Data Body -->
    <div class="inner-page">
        <div class="holder">
            <h2 id="title" class="title">{{$newitem->Project_Title}}</h2>
                <p id="name">{{$newitem->Client_Name}}</p>
                    <p id="description">{{$newitem->Usecase_Description}}</p>
                    <br><br>
                    <div class="row-2" id="tec">
                        @foreach ($techs as $tech)
                            <img id="logoimg" src="/Images/logos/{{strtolower($tech)}}.png" >
                                 @endforeach
                        </div>
                 <br><br>
                    <div class="" id="tec">{{$newitem->Project_Type}}</div>
            </div>

        </div>

       @endforeach
        <div class="last-page">
            <div class="container" id="last-container">
                <img id="last-image" src="/Images/whitelogo.png" >
                    <h1 id="th">Thank You</h1>
                    <h6 id="em">2918 Avenue I Unit #5055 Brooklyn || NY, US | info@cybernest.com</h6>
            </div>
        </div>
</body>

</html>