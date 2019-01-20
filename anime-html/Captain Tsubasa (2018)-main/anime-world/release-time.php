<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="generator" >
    <meta charset="UTF-8">  <meta name="robots" content="index, follow">

    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <title>maxani- release time</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link  rel="canonical" href="https://anime-world.cu.ma">
    <meta name="google-site-verification" content="Qbxw8QAU6afPo7rAGycd4WP3Zj9y-pIeleDNl0zttDE" />
    <meta name="description" content="anime release time ">
    <meta name="keywords" content="maxani,anime schedule,anime release time,all anime time">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery_main.js"></script>
    <link rel="shortcut icon" href="anime_image/maxani3.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/release time.css" >
   <?php
   include("header.php");
   ?>
  <div class="all_container" >
    <h1 class="RELEASE">RELEASE TIME</h1>
    <br>
    <br>
    <div class="container">
      <h2>Monday</h2>
      <br>
 	     <?php       
        include("functions.php");
        include("data/new_data.php");
       foreach($Monday as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   <br>
   <br>
   <h2>Tuesday</h2>
      <br>
       <?php       
       foreach($Tuesday as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   <br>
   <br>
   <h2>Wednesday</h2>
      <br>
       <?php       
       foreach($Wednesday as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   <br>
   <br>
   <h2>Thursday</h2>
      <br>
       <?php       
       foreach($Thursday as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   <br>
   <br>
   <h2>Friday</h2>
      <br>
       <?php       
       foreach($Friday as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   <br>
   <br>
   <h2>Saturday</h2>
      <br>
       <?php       
       foreach($Saturday as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   <br>
   <br>
   <h2>Sunday</h2>
      <br>
       <?php       
       foreach($Sunday as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   </div>
 </div>

<?php
include("footer.php");
?>
