<!DOCTYPE html>

<html>

<head>
    <link rel="icon" href="{{ url('/Images/logo.png') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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
       
        padding: 0;
        margin: 0;

       }

     @page { 
    margin: 0px; 
        font-family: 'Lora', serif;
}
    #row-p1 {
        width:100%;
        height:100%;
        font-family: 'Lato', sans-serif;   
    
    }
    .main-bg{
        max-width: 100%;
        opacity:0.9;
        background-repeat: no-repeat;
        background-image: url("Images/logos/top2.jpg"); 
        background-size: cover;
    }
   
  .content{
   
    width:100%;
    position:absolute;
    left:0px;
    bottom:80px;
    color:white;
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
        
        margin-top: 20%;
        margin-left:25%; 
        
    }
    .h52{
        text-align:left;
        color:white;
        margin-left:80%;
        margin-right:0px;
        position:absolute;
       
    }
    .h53{
        text-align:right;
        color:white;
        margin-left:60%;
        position:absolute;
       
    }
    #mh {
        
        font-size: 24px;
        width: 100%;
        letter-spacing: 1px;
        font-weight:600;
        margin-top: 10%;
        text-align: center;
        margin-left:0%;
        font-family: 'Lora', serif;
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
         font-style:bold;
         font-family: 'Lora', serif;

    }
    #ab-p{
         margin-left:100px;
         margin-top:50px;
         font-size:26px;
         height:200px;
         width:900px;
         text-align:justify;
         font-family: 'Lato', sans-serif;    
        
    }
    .col{
        width:800px;
        height:100px;
        margin-top:20px;
    
    }

    #about-image{
        width:200px;
        height:40px;
        margin-top:10px;
        margin-left:75%!important;
    }
     
    #logo-mini{   
        width:45px;
        height:45px;
        margin-top:40px;
        margin-left:85%!important;
    }

    /* Address */
   .address-section{
        width:100%;
        height:100%;
        padding:0;
        margin:0;
        top:0px;
        bottom:0;
            
        }
        
        #add-row-1{
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
        font-family: 'Lora', serif;
        font-style:bold;
        }
       #heading-2{
    margin-left:50px;
    width:250px;
    margin-top:0px;
    font-size:25px;
    color:white;
    font-weight:900px;
    text-align:center;
    font-style:bold;
    font-family: 'Lora', serif;

    }
    #add-col{
        width: 30%;
        border: 1px solid;
        padding: 2px;
        background:;
        margin-left: 100px;
        display: inline-block;
        
    }
         #add-h6{
            color:black;
            text-align:left;
            margin-left:1px;
            margin-top:5px;
            padding-top:5px;
            letter-spacing:1px;
            border-top:1px solid;
             background: #ededed;
            font-family: 'Lato', sans-serif;   
         }
         #add-h{
            color:black;
            text-align:left;
            margin-left:1px;
            margin-top:5px;
            font-family: 'Lato', sans-serif; 
         }
   
    .col{
    width:800px;
    height:100px;
    margin-top:20px;
    
    }

    #add-image{
        width:200px;
        height:40px;
        margin-top:10px;
        margin-left:75%!important;
    }
     
        #logo-mini{   
        width:45px;
        height:45px;
        margin-top:40px;
        margin-left:85%!important;
            }
            #flex-add{
            width:40%;
            margin-top: 180px;
            margin-left: 75%;
            text-align:center;
            color: #ededed;
            font-family: 'Lato', sans-serif;    
            border-radius: 10px;
            letter-spacing: 1px;
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
        font-family: 'Lora', serif;
        font-style:bold;
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
            margin-top:5px;
            font-family: 'Lato', sans-serif; 
          
        }

        #ser-h6{
            color:black;
            text-align:left;
            margin-left:1px;
            margin-top:5px;
            padding-top:5px;
            letter-spacing:1px;
            border-top:1px solid;
             background: #ededed;
            font-family: 'Lato', sans-serif;  

        }
        #ser-image{
            width:180px;
            height:30px;
            margin-top:360px !important;
            margin-left:75%!important;
        }
    #ser-logo-mini{   
            width:45px;
            height:45px;
            margin-top:70px;
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
        font-style:bold;
        font-family: 'Lora', serif;

        }
    
        #ind-col{
        width: 30%;
        height:20%;
        border:;
        padding: 1px;
        background:;
        margin-left: 1%;
        display: inline-block;
        background: #ededed;
        
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
            margin-top:-20px;
            border-top:none;

        }
        #ind-image{
             width:180px;
             height:30px;
            margin-top:320px !important;
            margin-left:75%!important;
        }
    #ind-logo-mini{   
            width:45px;
            height:45px;
            margin-top:70px;
            margin-left:85%!important;
        }


        /* TECHNOLOGIES */
        .technology{
      
        width:100%;
        height:100%;
        padding:0;
        margin:0;
        top:5px;
        bottom:0;
        
    }
     #tec-container{
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
         font-style:bold;
         font-family: 'Lora', serif;

    }
    #tec-p{
         margin-left:100px;
         margin-top:50px;
         font-size:26px;
         height:200px;
         width:900px;
         text-align:justify;
        font-family: 'Lato', sans-serif;
       
    }
    
    .col{
        width:800px;
        height:100px;
        margin-top:20px;
       
    }

    #tec-image{
        width:180px;
        height:30px;
        margin-top:10px;
        margin-left:75%!important;
    }
    #logo-mini{   
        width:45px;
        height:45px;
        margin-top:40px;
        margin-left:85%!important;
    }

    /* PROJECTS RECORD */
        #title {
            font-size: 30px;
            width:100%;
            margin-top:200px;
            text-align:left;
            margin-left:10px;
            font-style:bold;
            font-family: 'Lora', serif;
        }

        .row {
            width: 100%;
            margin-left: 0%;
            margin-top: 0 !important;
        
        }

        .col-md-8 {
            width: 50%;
            margin-top:60%;
            /* background: #000; */
        }

        #description {
            font-family: 'Lato', sans-serif;  
            padding: 10px;
            margin-top: 0px;
            width:50%;
            height:20%;
             border-top: #000 solid;
            text-align:justify;
            text-transform: lowercase;
        }

        .col-md-4 {
            float: right;
            /* height: 100%; */
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
            font-size: 16px;
            letter-spacing: 1px;
            width: 300px;
            padding: 5px;
            margin: 5px;
            font-family: 'Lato', sans-serif;  
            

        }
        .projects-list {
            position: relative;
            left:90%;
        }
        .mini-logo {
            position: absolute;
            top:50px;
            
        }
        .mini-logo img {
        width: 40px;
        height: auto;
        display: block;
        right:0px;
        }
    
        .row-2{
        width:30%;
        margin-top:0%;
        margin-left: 0px;
         
            
        }
       
        #logoimg{
        width:32px;
        height:32px;
        margin-top:0px;
        padding-left:0px;
        display: inline-block;
        margin-left:3%!important;
        }
        .page-break {
        page-break-after: always;
        text-align: center;
        margin-left: 50%;
         }
        #project-image{
        width:180px;
        height:30px;
        margin-top:-40px;
        margin-left:75%!important;
        }
        #tec{
            font-size: 16px;
            width: 200px;
            padding: 10px;
            margin: 2px;
            font-family: 'Lato', sans-serif;  
            
        }

    
    





    /* Last Pages */
       
         .greeting{
      
        width:100%;
        height:97%;
        padding:0;
        margin:0;
        top:5px;
        bottom:0;
        
    }
     #gre-row-1{
        width:350px;
        margin-left:400px;
        padding: 3px;
        margin-top:-20px;
        position:absolute;
        
    }
    #heading-gre{
         margin-left:430px;
         margin-top:300px;
         color:#000;
         font-size:60px;
         font-style:bold;
         font-family: 'Lora', serif;

    }
    #gre-p{
         margin-left:50px;
         margin-top:100px;
         color:white;
         font-size:22px;
         text-align:left;
         font-family: 'Lato', sans-serif;    
        
    }
    .col{
        width:800px;
        height:100px;
        margin-top:20px;
      
    }

    #gre-image{
        width:180px;
        height:40px;
        margin-top:200px;
        margin-left:75%!important;
    }
     
    #logo-mini{   
        width:45px;
        height:45px;
        margin-top:40px;
        margin-left:85%!important;
    }
            
    </style>
</head>

<body class="body">

    <!-- image logo -->
        <div class="main-bg">
            <div class="row bg-primary text-light" id="row-p1">
                <img id="logo" src="Images/logo2.png"  style="width:420px; height:80px;">
                  <!-- <img id="logo" src="/Images/logo2.png"  style="width:420px; height:80px;"> -->
                    <h5 id="mh">We Design And Build Secure, <br>Resilient Software For Companies That Need To Scale.</h5>
                </div>

                    <div class="content">
                        <h5 class="h52">info@cybernest.com</h5>
                        <h5  class="h53">www.cybernest.com</h3> 
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
<section class="address-section bg-light">
         <img id="ser-logo-mini" src="Images/logo.png">
    <!-- <div class="container bg-dark text-light" id="ser-col-md-12"> -->
            <h6 class="text-dark" id="heading-1">Where We Stand</h6>
        <div class="row" id="add-row-1">
            <h6 class="bg-dark text-light" id="heading-2">Regional office</h6>
            <div class="full-width">
                <div class="col justify-content-center" id="add-col">
                    <h5 class="bg-light" id="add-h">United States</h5>
                    <h6 id="add-h6">2918 Avenue I Unit #5055 Brooklyn NY 11210</h6>
                </div>
                
                <div class="col justify-content-center" id="add-col">
                    <h5 class="bg-light" id="add-h">Pakistan Punjab</h5>
                    <h6 id="add-h6">345, Block H-3 Johar Town, Lahore, 54000</h6>
                </div>


                <div class="flex bg-dark" id="flex-add">
                   <h5 id="flex-h1"> 10+ | 15+ | 50+ </h5>
                   <h6 id="add-h3">Client | Teams | Projects</h6>
                </div>
            </div>
              
        </div>
                <img id="ser-image" src="Images/logo2.png" >
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

                   
                <div class="col justify-content-center text-dark " id="ind-col">
                    <img id="ind-minilogos" src="Images/dollar.png">    
                    <br>
                    <h5 id="ind-ico">Fintech</h3>
                </div>
            
                    <div class="col justify-content-center  text-dark" id="ind-col">
                        <img id="ind-minilogos" src="Images/heart.png">
                        <br>
                        <h5 id="ind-ico">Health Care</h3>
                     </div>
                
                    <div class="col justify-content-center  text-dark " id="ind-col">
                        <img id="ind-minilogos" src="Images/shopping-bag.png">
                        <br>
                        <h5 id="ind-ico">Ecommerce</h3>
                     </div>
                </div>

                
                
                <div class="full-width">
                    <div class="col justify-content-center  text-dark" id="ind-col">
                         <img id="ind-minilogos" src="Images/airplan.png">
                          <br>
                         <h5 id="ind-ico">Travel & Tourism</h3>
                        
                    </div>                   
                    <div class="col justify-content-center  text-dark" id="ind-col">
                        <img id="ind-minilogos" src="Images/mortarboard.png">
                          <br>
                         <h5 id="ind-ico">Education</h3>
                    </div>
                    
                    <div class="col justify-content-center  text-dark" id="ind-col">
                        <img id="ind-minilogos" src="Images/fast-food.png">
                         <br>
                        <h5 id="ind-ico">Food</h3>
                    </div>
 
                </div>
    
    
        </div>
           
           <img id="ind-image" src="Images/logo2.png" >
    </section>

    <!-- TECHNOLOGIES -->
    <section class="technology bg-light">
            <img id="logo-mini" src="Images/logo.png">
          <div class="container bg-light text-dark" id="tec-container">
            <h6 class="text-dark" id="heading-1">Technologies & Tools</h6>
            <div class="full-width">
                <p class="bg-light" id="tec-p">We are Passionately working on cutting-edge technologies.Our Organization is the sum of numerous small special divisions whose members are masters of the subject area.these special divisions are made of the following technologies</p>
        </div>    
        </div>
           <img id="tec-image" src="Images/logo2.png" >
    </section>


       
        <!-- <div class="page-break"></div> -->
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
        <div class="holder">
            <h2 id="title" class="title text-uppercase">{{$newitem->Project_Title}}</h2>
              <p id="description">{{$newitem->Usecase_Description}}</p>
                <p class="text-uppercase" id="name">{{$newitem->Client_Name}}</p>

                    <div class="row-2" id="tec-images">
                        @foreach ($techs as $tech)
                            <img id="logoimg" src="Images/logos/{{strtolower($tech)}}.png" >
                                 @endforeach
                        </div>
                        <div class="text-uppercase" id="tec">{{$newitem->Project_Type}}</div>
                     
                </div>
           <img id="project-image" src="Images/logo2.png" >
        </div>

       @endforeach
       

            <!-- Thanks Page -->
        <section class="greeting bg-light">
            <img id="logo-mini" src="Images/logo.png">
              <h6 class="text-dark" id="heading-gre">THANK YOU</h6>
           <div class="row" id="gre-row-1">
            <p class="text-light" id="gre-p">Info@cybernest.com</p>
          </div>
           <img id="gre-image" src="Images/logo2.png" >
    </section>






</body>

</html>