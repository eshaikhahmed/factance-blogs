<!DOCTYPE html>
<html lang="en">
<head>
<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="html,css,java, rust,python, android, writer emoji, factance linkedin emoji writer, twitter writer emoji, twiter post writer emoji">
    <meta name="description" content="Factance Blogs - learn Java, Rust, HTML, Python">
    <base href="http://localhost/tools/factance-blogs/" />
    <title><?=$title?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <?=$header_data?>
      <link rel="icon" type="image/x-icon" href="images/fclogo.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" 
    style="padding-top: 10px;padding-bottom: 10px;">
         <a class="navbar-brand" href="index.php" style="padding-bottom: 0px;
            padding-top: 0px;">
            <div style="    font-weight: bolder;
    word-spacing: 1px;
    line-height: 2px;
    font-size: 30px;">
               <!-- <img src="images/app_icon.png" class="brand-icon" /> -->
               
              <span >
                  <span style="color:#007ACC;">Bl</span>og
               </span>

               <!-- <span style="font-size:2.15em;font-weight:bolder;">DostiMart</span>
                  <span style="font-size:12px;font-weight:  200;">Parbhani</span> -->
            </div>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" style="flex-direction: row-reverse;" id="collapsibleNavbar">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="https://www.factance.com" target="_blank">Made by <span style="color:#007ACC;font-weight:bold;">Fact</span><span style="color:#FFFFFF;font-weight:bold;">ance</span></a>
               </li>   

               <li class="nav-item">
                  <a class="nav-link" href="https://www.linkedin.com/company/factance">
                      <span class="linkedin-show">LinkedIn</span>

                      </a>
               </li>
               <!-- <li class="nav-item">
                  <a class="nav-link" href="coming.php">
                      <span class="twitter-show">Twitter</span>
                    </a>
               </li> -->
                  
            </ul>
         </div>
    </nav>