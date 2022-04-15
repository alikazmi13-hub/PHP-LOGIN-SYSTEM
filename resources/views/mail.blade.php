<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Lato:wght@400;700&family=Merriweather:ital,wght@0,700;1,900&family=Open+Sans:ital,wght@0,300;1,300&family=Playfair+Display&family=Poppins:wght@400;600;800&family=Proza+Libre&family=Red+Hat+Mono&family=Roboto+Slab:wght@100;300&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    

<title>cybernest.com</title>
    
    
    
    
    <style>
        .container{
            background: #394F8A;
            color:#FFFFFF; 
            width:100%;
            margin:2px;
            padding:0;
            font-family: 'Inconsolata', monospace;
        }
        #name{
            
            margin-top:2px;
            text-align:left;
            background:#FFFFFF;
            color: #394F8A;
        }
          #h6{
            /* background:#FFFFFF; */
            margin-left:10px;
            text-align:justify;
        }
           #h5{
            /* background:#FFFFFF; */
            margin-left:10px;
            text-align:left;
        }
        .row{
            width:80%;
            /* background: #AED6F1;
            color:#17202A; */
            margin-top:5px;
            text-align:justify;
            padding:5px;
        }
        .col-sm{
            width:50%;
            background: ;
            color:;
            margin-top:5px;
            padding:10px;
            font-size:14px;
          
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
    #thanks{
        margin-left:10px;
        text-align:left;
    }
    #info{
        margin-left:10px;
        text-align:left;
        margin-top:0;
    }
        </style>

</head>
<body>


    <div class="container bg-primary mt-3">
        <h3 id="name">{{$name}}</h3>
          <div class="row bg-light mt-3">   
             <h5 id="h5">Dear Sir/Ma`am,</h5>
                <h6 id="h6">{{$data }},This is for your kind information that Cyber Nest is one of the fastest growing software company. We have highly experienced team who have successfully launched various projects and proved ours skills. We take responsibility of the work, and maintain the best relationship with our customers.Unlock our capabilities of software development, product development and quality assurance for businesses of all sizes and shapes. Our full-cycle development services enable businesses to be agile, futuristic and high-performing.</h6>
            </div> 
            
            <div class="col-sm bg-danger mt-1">
                 <h5 id="thanks">Thanks & Regards</h5>  
                    <h5 id="info">hr@cybernest.com</h5>  
            </div>
            
      </div>
</body>
</html>