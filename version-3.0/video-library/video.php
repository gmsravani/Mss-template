<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Video Library | Miracle</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="../../images/favicon.ico">
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      <style>
         
         .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
        url("../devops/images/devops-header.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
          background-position:center;
         }
         
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         .widget > .widget-content:first-child,.widget > .widget-image:first-child {
         border-top-right-radius: 2px;border-top-left-radius: 2px;}
         .widget > .widget-content:last-child {border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;}
         .widget,.widget-content {display: block;-webkit-transition: all .1s ease-out;
         transition: all .1s ease-out;}
         
         .widget:active,.widget-content:active {text-decoration: none;-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .02);
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 1px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         a.widget-content {display: block;}a.widget-content {display: block;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 20px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 !important;}
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {0px !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color: #fff !important;
         }
         .emerald{
         background-color:#0d416b !important;}
         }
         .list-group-item {
         position: relative;
         display: block;
         padding-top: 10px!important;
         padding-right: 5px!important;
         padding-bottom: 10px!important;
         padding-left: 5px!important;
         margin-bottom: -1px;
         background-color: #fff;
         border: 1px solid #ddd;
         }
         .micro{
         margin-top:3px !important;
         }
         .footer-nav-links a:hover,
         .footer-nav-links a:focus {
         color: #ffffff;
         background-color: #0d416b;
         -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         }
         .footer-nav-links a.social-twitter:hover,
         .footer-nav-links a.social-twitter:focus {
         background-color: #55acee!important;
         }
         .footer-nav-links a.social-facebook:hover,
         .footer-nav-links a.social-facebook:focus {
         background-color: #3b5998!important;
         }
         .footer-nav-links a.social-google-plus:hover,
         .footer-nav-links a.social-google-plus:focus {
         background-color: #dd4b39!important;
         }
         .footer-nav-links a.social-dribbble:hover,
         .footer-nav-links a.social-dribbble:focus {
         background-color: #ea4c89!important;
         }
         .footer-nav-links a.social-youtube:hover,
         .footer-nav-links a.social-youtube:focus {
         background-color: #b31217!important;
         }
         .footer-nav-links a.social-flickr:hover,
         .footer-nav-links a.social-flickr:focus {
         background-color: #ed1983!important;
         }
         .footer-nav-links a.social-linkedin:hover,
         .footer-nav-links a.social-linkedin:focus {
         background-color: #0077b5!important;
         }
      </style>
      <style type="text/css">
         .display-1 {font-size: 3rem !important;}
         .card {overflow:hidden;height:100% !important;}
         .card-block .rotate {z-index: 8;float: right;height: 100% !important;}
         .card-block .rotate i{color: rgba(20, 20, 20, 0.15);position:absolute;left:0;
         left: auto;right: -10px;bottom: 0;
         display: block;-webkit-transform: rotate(-44deg);
         -moz-transform: rotate(-44deg);-o-transform: rotate(-44deg);
         -ms-transform: rotate(-44deg);transform: rotate(-44deg);
         }
      </style>
      <style>
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 15px;}
         .widget-content > a: {padding: 15px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 28px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 ;}
         .themed-background-info {
         background-color: #5cafde !important;
         }
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {margin:0px !important;}
         .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color:#fff;
         }
         .card {border:0px !important;} 
         .emerald{background-color:#0d416b !important;width:100%;}
         .list-inline {
         margin-left: 0px!important;
         list-style: none;
         }
         .effect:hover{
            top:-5px;
         }
       .response{
    border-radius:50%;}
    .carousel1{
        background-color:#00aae7;
        color:#ffffff;
        padding:50px;
        height:100%;
        width:100%;
        }
         .carousel2{
        background-color:#0d416b;
        color:#ffffff;
         padding:50px;
        height:100%;
        width:100%;
        }
          .carousel3{
        background-color:#232527;
        color:#ffffff;
         padding:50px;
        height:100%;
        width:100%;
        }
        .boxes div {
    display: none;
}
 .boxes1 div {
    display: none;
}
 .boxes2 div {
    display: none;
}
      </style>
   </head>
   <!--/head-->
   <?php include '../../header.php';?>
   <body>
      <section id="services" >

         <br>
         <br>
         <br>
         <div class="emerald tinted-image">
            <div class="container ">
               <div class="row">
                  <br><br><br> 
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">Video Library</h1>
                      <br>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../technologies/">Events</a></li>
                        <li><a href="../devops/">Video Library</a></li>
                        
                        
                     </ul>
                  </div>
               </div>
            </div>
            
         <br>
      </section>
      <section id="services" class="container">
         <div class="row">
         <div class="col-sm-12">
            <div class="row">
               <div class="col-sm-12">
                  <br>
                  <p class="methodText">Tomorrow’s enterprises need to be able to deliver functionality and experiences
to their consumers on time at the highest quality. To achieve this a certain level of
automation and collaboration need to be put in place to ensure productivity.</p>
                  
               </div>
               
               
                <div class="col-sm-12">
                      
                       
                        
                        <p class="methodText">For an organization to be agile it needs to be able to open up all channels of
communication to ensure transparency and visibility is possible. When there are
<strong>‘m’ stakeholders</strong> and <strong>‘n’ products</strong> it is important to gain trust and promote
communications so that all you can gain the buy-in of all the involved parties. <font color="#00aae7">One
developer cannot do it all</font> <strong>– you need a team to deliver, and a collaborative one</strong>.</p>
                    
                    
                    </div>
               
               </div>
               
               
               
              
             
             <br>
              
           <div class="row"> 
           <div class=" col-sm-8">
           <iframe src="https://player.vimeo.com/video/200216281" width="100%" height="380" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
           </div>
         <div class="col-sm-4">
         
  <center> 
  <h2 class="heavy"></h2>
  <img src="../../events/interconnect17/images/kunal22.jpg" class="img-responsive response" height="180" width="180"></img>
                  <h5 class="heavy">Kunal Mittal,</h5>
                  <p style="margin-top:-5px;">Practice Manager - Integration </p>
                   <p><strong>Miracle Software Systems, Inc.</strong></p>
               </center>
   </div>
             </div>       
                   
        <div class="row"> 
        <div class="">
        <div class="col-sm-4" >
        <div class="carousel1">
<div class="boxes">
    <div class="box1">
    <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
     <p class="methodtext">Tomorrow’s enterprises need to be able to deliver functionality and experiences to their consumers on time at the highest quality. To achieve this a certain level of automation and put in place to ensure productivity.</p>
    </div>
    <div class="box2">
     <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
       <p class="methodtext">Miracle Software Systems, Inc , founded in 1994, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies and is a Minority Certified Private</p>
    </div>
    <div class="box3">
    <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
       <p class="methodtext">Miracle has helped numerous large and mid-sized businesses transition their IT to a Service Oriented Architecture, with IT Transformation Initiatives, deploying SAP / Oracle ERP Systems. Miracle has a global </p>
    </div>
</div>
  </div>
         </div>
        <div class="col-sm-4" >
        <div class="carousel2">
 <div class="boxes">
    <div class="box1">
    <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
     <p class="methodtext">Tomorrow’s enterprises need to be able to deliver functionality and experiences to their consumers on time at the highest quality. To achieve this a certain level of automation and put in place to ensure productivity.</p>
    </div>
    <div class="box2">
     <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
       <p class="methodtext">Miracle Software Systems, Inc , founded in 1994, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies and is a Minority Certified Private</p>
    </div>
    <div class="box3">
    <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
       <p class="methodtext">Miracle has helped numerous large and mid-sized businesses transition their IT to a Service Oriented Architecture, with IT Transformation Initiatives, deploying SAP / Oracle ERP Systems. Miracle has a global </p>
    </div>
</div>
  </div>
         </div>
         <div class="col-sm-4" >
        <div class="carousel3">
<div class="boxes">
    <div class="box1">
    <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
     <p class="methodtext">Tomorrow’s enterprises need to be able to deliver functionality and experiences to their consumers on time at the highest quality. To achieve this a certain level of automation and put in place to ensure productivity.</p>
    </div>
    <div class="box2">
     <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
       <p class="methodtext">Miracle Software Systems, Inc , founded in 1994, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies and is a Minority Certified Private</p>
    </div>
    <div class="box3">
    <h5 style="color:#ffffff !important"><strong>Building Microservices</strong></h5>
       <p class="methodtext">Miracle has helped numerous large and mid-sized businesses transition their IT to a Service Oriented Architecture, with IT Transformation Initiatives, deploying SAP / Oracle ERP Systems. Miracle has a global </p>
    </div>
</div> 
  </div>
         </div>
         
         
      
         
         
 </div>
    </div>   
    </div>
         
         </div>
         <script>
         $(document).ready(function () {
    var allBoxes = $("div.boxes").children("div");
    transitionBox(null, allBoxes.first());
});

function transitionBox(from, to) {
    function next() {
        var nextTo;
        if (to.is(":last-child")) {
            nextTo = to.closest(".boxes").children("div").first();
        } else {
            nextTo = to.next();
        }
        to.fadeIn(500, function () {
            setTimeout(function () {
                transitionBox(to, nextTo);
            }, 1000);
        });
    }
    
    if (from) {
        from.fadeOut(500, next);
    } else  {
        next();
    }
   
}
         </script>
         
         
            
         <link rel="stylesheet" href="../../css/box.css">
         
         <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script>
         
         
         <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/plugins.js"></script>
        
        <script src="js/app.js"></script>
         
         <br>
         
      </section>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>