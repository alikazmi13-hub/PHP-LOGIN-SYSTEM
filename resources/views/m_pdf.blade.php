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
        font-family: 'Bebas Neue', cursive;
        padding: 0;
        margin: 0;

       }

     @page { 
    margin: 0px; 
    font-family: 'Bebas Neue', cursive;
}
    .container {
        padding: 0;
        margin: 0;
    
    }
    .main-bg{
        max-width: 100%;
        height: 100%;
        /* background: #264483; */
        opacity:0.9;
        background-repeat: no-repeat;
        background-image: url("Images/logos/top2.jpg"); 
        background-size: cover;
    }
   
  .content{
   
    width:100%;
    height:10%;
    position:absolute;
    left:0px;
    bottom:25px;
    color:black;
    background: #3d5fb0;
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
        margin-left:15%; 
        
    }
    .h52{
        text-align:right;
        color:white;
        margin-right:100px;
    }
    #mh {
        
        font-size: 24px;
        width: 100%;
        letter-spacing: 1px;
        font-weight:600;
        text-align: center;
        margin-left:0%;
        
    }

/* ABOUT */
  .About{
      
        width:100%;
        height:100%;
        padding:0;
        margin:0;
        top:5px;
        bottom:0;
        
    }
     #ab-container{
        height:600px;
        width:900px;
        padding:0;
        margin:0;
        top:0;
        bottom:0;
        
    }
    #heading-1{
         margin-left:50px;
         margin-top:50px;
         color:#000;
         font-size:40px;

    }
    #ab-p{
         margin-left:50px;
         margin-top:50px;
         font-size:26px;
         height:100px;
         width:500px;
         text-align:justify;
        
    }
    .col{
        width:800px;
        height:100px;
        margin-top:20px;
        background:#000;
        color:white;
    }

    #about-image{
        width:200px;
        height:40px;
        margin-top:10px;
        border-top:solid;
        border-color:white;
        margin-left:70%!important;
    }
    #logo-mini{   
        width:45px;
        height:45px;
        margin-top:40px;
        border-color:white;
        margin-left:85%!important;
    }

    /* Address */
  .Address-section{
       
        width:100%;
        height:100%;
        padding:0;
        margin:0;
        top:5px;
        bottom:0;
        
    }
     #add-container{
        height:600px;
        width:900px;
        padding:0;
        margin:0;
        top:0;
        bottom:0;
        
    }
    #heading-1{
    margin-left:50px;
    margin-top:50px;
    color:#000;
    font-size:40px;
    font-family: 'Bebas Neue', cursive;

    }
       #heading-2{
    margin-left:100px;
    width:250px;
    margin-top:0px;
    font-size:25px;
    color:white;
    font-weight:900px;
    text-align:center;
    font-family: 'Bebas Neue', cursive;

    }
    #address-column{
    display: inline-block;
    width: 40%;
    height:15%;
    margin-top:10%;
    margin-right:-20%;
    border-top:solid #FFFFFF;
    border-radius:10px;
    border-bottom:solid #FFFFFF;
    font-family: 'Lato', sans-serif;
    }
    #address_column{
    font-family: 'Lato', sans-serif;      
    display: inline-block;
    width: 40%;
    height:15%;
    margin-top:10%;
    margin-right:10%;
    border-top:solid #FFFFFF;
    border-radius:10px;
    border-bottom:solid #FFFFFF;
    }
    #add-p1{
    margin-top:5px;
    font-size:20px;
    text-align:left;
    margin-left:10px;

        
    }
    #add-p2{
    margin-top:5px;
    font-size:20px;
    text-align:left;
    margin-left:10px;

        
    }
    .col{
    width:800px;
    height:100px;
    margin-top:20px;
    background:#000;
    color:white;
    }

    #add-image{
        width:200px;
        height:40px;
        margin-top:10px;
        border-top:solid;
        border-color:white;
        margin-left:70%!important;
    }
        #logo-mini{   
        width:45px;
        height:45px;
        margin-top:40px;
        border-color:white;
        margin-left:85%!important;
            }
            #flex{
            position: absolute;
            width:400px;
            bottom: 150px;
            right: 400px;
            background:#ffffff;
            border:solid;
            text-align:center;
            font-family: 'Lato', sans-serif;
            border-radius: 50px;
            letter-spacing: 3px;
                }

    /* SERVICES */
        .services{
        width:100%;
        height:100%;
        padding:0;
        margin:0;
        top:5px;
        bottom:0;
            
        }
        
        #ser-row-1{
        width:900px;
        margin-left:100px;
        padding: 1px;
        margin-top:-10px;
        position:absolute;
        }

        
        #heading-1{
        margin-left:50px;
        margin-top:50px;
        color:#000;
        font-size:40px;

        }
    
        #ser-col{
        width: 30%;
        border: 1px solid;
        padding: 2px;
        background:;
        margin-left: 100px;
        display: inline-block;
        
        }
        .full-width {
            width: 100%;
        }



        #ser-h5{
            color:black;
            text-align:left;
            margin-left:1px;
            margin-top:2px;
            background: #ddd;
            opacity:0.7;
        

        }

        #ser-h6{
            color:black;
            background: #fff;
            text-align:left;
            margin-left:1px;
            margin-top:1px;
            font-family: 'sans', sans-serif;

        }
        #ser-image{
            width:135px;
            height:30px;
            margin-top:360px !important;
            border-top:solid;
            border-color:black;
            margin-left:70%!important;
        }
    #ser-logo-mini{   
            width:45px;
            height:45px;
            margin-top:70px;
            border-color:white;
            margin-left:85%!important;
        }



            /* INDUSTRIES */


 .industries{
        width:100%;
        height:100%;
        padding:0;
        margin:0;
        top:5px;
        bottom:0;
            
        }
        
        #ind-row-1{
        width:800px;
        margin-left:150px;
        padding: 3px;
        background: ;
        margin-top:-20px;
        position:absolute;
        }

        
        #heading-1{
        margin-left:50px;
        margin-top:50px;
        color:#000;
        font-size:40px;

        }
    
        #ind-col{
        width: 30%;
        height:20%;
        border:;
        padding: 1px;
        background:;
        margin-left: 1%;
        display: inline-block;
        
        }
      
        .full-width {
            width: 100%;
        }



        #ind-ico{
            color:white;
            text-align:left;
            margin-left:1px;
            margin-top:2px;
            font-size:20px;
            text-align:center;
          
        

        }

        #ind-minilogos{
          
            width:55px;
            height:55px;
            margin-left:88px;
            margin-top:-15px;
            border-top:none;

         
           

        }
        #ind-image{
            width:135px;
            height:30px;
            margin-top:320px !important;
            border-top:solid;
            border-color:black;
            margin-left:70%!important;
        }
    #ind-logo-mini{   
            width:45px;
            height:45px;
            margin-top:70px;
            border-color:white;
            margin-left:85%!important;
        }





















        #title {
            font-size: 34px;
            margin-left: 0px 0px;
            width:100%;
            text-align:center;
            font-family: 'Bebas Neue', cursive;
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
            font-family: 'Bebas Neue', cursive;
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
            font-family: 'Bebas Neue', cursive;
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
            font-family: 'Bebas Neue', cursive;

        }
        .projects-list {
            position: relative;
            font-family: 'Bebas Neue', cursive;
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
        
        

    
    





    /* Last Pages */
            .last-page{
            width: 100%;
            height: 96.5%;
            background-repeat: no-repeat;
            background-image: url("Images/m9.png"); 
            background-size: cover;
            color:#FFFFFF;
            font-family: 'Bebas Neue', cursive;
        
            
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
            font-family: 'Bebas Neue', cursive;

            }
            #em{
                text-align:right;
                margin-top:280px;
                line-height: 1.8;
                float:left;
                margin-left:7%;
                font-family: 'Bebas Neue', cursive;

            }
            
    </style>
</head>

<body class="body">

    <!-- image logo -->
        <div class="main-bg">
            <div class="container bg-primary text-light">
                <img id="logo" src="Images/logo2.png"  style="width:420px; height:80px;">
                  <!-- <img id="logo" src="/Images/logo2.png"  style="width:420px; height:80px;"> -->
                    <h5 id="mh">We Design And Build Secure, Resilient Software For Companies That Need To Scale.</h5>
                </div>

                    <div class="content">
                        <h5 class="h52">info@cybernest.com</h5>
                                <h5  class="h52">www.cybernest.com</h3> 
                    </div>
        </div>

            <!-- About Page -->
        <section class="About bg-primary">
            <img id="logo-mini" src="Images/logo.png">
          <div class="container bg-primary text-light" id="ab-container">
            <h6 class="text-light" id="heading-1">About Us</h6>
                <p class="bg-primary" id="ab-p">Cyber Nest is one of the fastest growing software company. We have highly experienced team who have successfully launched various projects and proved ours skills. We take responsibility of the work, and maintain the best relationship with our customers.</p>
             </div>
           <img id="about-image" src="Images/whitelogo.png" >
    </section>

    <!--  -->

         <section class="Address-section bg-dark">
            <img id="logo-mini" src="Images/logo.png">
          <div class="container bg-dark text-light" id="add-container">
            <h6 id="heading-1">Where We Stand</h6>
            <br>
            <h6 class="bg-dark text-light" id="heading-2">Regional office</h6>
            
            <div class="col-md-4 bg-light text-dark" id="address-column">
                <p class="" id="add-p1">2918 Avenue I Unit #5055 Brooklyn NY 11210 United States</p>
            </div>   

             <div class="col-md-4 bg-light text-dark" id="address_column">
                <p class="" id="add-p2">345, Block H-3 Johar Town, Lahore, 54000</p>
            </div>
            </div>


             <div class="flex text-dark" id="flex">
                   <h5 id="flex-h1"> 10+ | 15+ | 50+ </h5>
                   <h6 id="add-h3">Client | Teams | Projects</h6>
                </div>
                <img id="add-image" src="Images/whitelogo.png" >
    </section>


    <!-- Services -->
    <section class="services bg-light">
         <img id="ser-logo-mini" src="Images/logo.png">
    <!-- <div class="container bg-dark text-light" id="ser-col-md-12"> -->
            <h6 class="text-dark" id="heading-1">Services We Provide</h6>
        <div class="row" id="ser-row-1">
            <div class="full-width">
                <div class="col justify-content-center" id="ser-col">
                    <h5 id="ser-h5">Web Development</h5>
                    <h6 id="ser-h6">End-to-end web design to tackle your specific business challenges</h6>
                </div>
                
                <div class="col justify-content-center " id="ser-col">
                    <h5 id="ser-h5">Mobile Development</h3>
                    <h6 id="ser-h6">Boost the Seamless User Experience with Stellar Mobile App Design</h6>
                </div>
            </div>
            
                <div class="full-width">
                    <div class="col justify-content-center" id="ser-col">
                      <h5 id="ser-h5">Custom Solutions</h3>
                      <h6 id="ser-h6">Transform Your Business challenges into Oppurtunities with Our-Effective and Innovative CSD Sevice</h6>
                    </div>
                
                    <div class="col justify-content-center " id="ser-col">
                        <h5 id="ser-h5">Blockchain</h3>
                        <h6 id="ser-h6">Indentifying Block Chain Solutions to Maximize Your Business Potential</h6>
                    </div>
                </div>
                
                <div class="full-width">
                    <div class="col justify-content-center " id="ser-col">
                        <h5 id="ser-h5">AWS Consultancy</h3>
                        <h6 id="ser-h6">Cloud Solutions For Reliable Building, Delivery, and Implementation</h6>
                    </div>                   
                    <div class="col justify-content-center " id="ser-col">
                        <h5 id="ser-h5">UI/UX Design</h3>
                        <h6 id="ser-h6">Intuiti,interactive and Engaging Interface that attract more Customers</h6>
                    </div>
 
                </div>
    
    
        </div>
           
           <img id="ser-image" src="Images/logo2.png" >
    </section>


    <!-- INDUSTRIES  -->

     <section class="industries bg-light">
         <img id="ind-logo-mini" src="Images/logo.png">
    <!-- <div class="container bg-dark text-light" id="ser-col-md-12"> -->
            <h6 class="dark-light" id="heading-1">Industries<br> We Focus on</h6>
        <div class="row bg-light" id="ind-row-1">
            
             
            
                <div class="full-width">

                   
                <div class="col justify-content-center bg-dark text-light " id="ind-col">
                    <img id="ind-minilogos" src="Images/dollar.png">    
                    <br>
                    <h5 id="ind-ico">Fintech</h3>
                </div>
            
                    <div class="col justify-content-center bg-dark text-light" id="ind-col">
                        <img id="ind-minilogos" src="Images/heart.png">
                        <br>
                        <h5 id="ind-ico">Health Care</h3>
                     </div>
                
                    <div class="col justify-content-center bg-dark text-light " id="ind-col">
                        <img id="ind-minilogos" src="Images/shopping-bag.png">
                        <br>
                        <h5 id="ind-ico">Ecommerce</h3>
                     </div>
                </div>

                
                
                <div class="full-width">
                    <div class="col justify-content-center bg-dark text-light" id="ind-col">
                         <img id="ind-minilogos" src="Images/airplan.png">
                          <br>
                         <h5 id="ind-ico">Travel & Tourism</h3>
                        
                    </div>                   
                    <div class="col justify-content-center bg-dark text-light" id="ind-col">
                        <img id="ind-minilogos" src="Images/mortarboard.png">
                          <br>
                         <h5 id="ind-ico">Education</h3>
                    </div>
                    
                    <div class="col justify-content-center bg-dark text-light" id="ind-col">
                        <img id="ind-minilogos" src="Images/fast-food.png">
                         <br>
                        <h5 id="ind-ico">Food</h3>
                    </div>
 
                </div>
    
    
        </div>
           
           <img id="ind-image" src="Images/logo2.png" >
    </section>


       
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