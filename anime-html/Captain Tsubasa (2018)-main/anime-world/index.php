<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">  <meta name="robots" content="index, follow">
  <link rel="alternate" media="only screen and (min-width: 100px)" href="https://www.anime-world.cu.ma" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <title>anime-world- Watch animes Download english subbed</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
     
    <meta name="description" content="anime-world - watch  and download anime in high quality for free, english subbed and streaming live.">
    <meta name="keywords" content="anime-world, anime-world.cu.ma, www.anime-world.cu.ma, anime-world.com, Watch anime and download for free, watch anime for free without a account,watch anime 2018 online,watch new anime 2018 online free,chinese anime 2018 watch online,watch anime online baki 2018,watch anime online with subtitles,watch free streaming anime dubbed,watch anime online free streaming english dubbed,watch anime online streaming,watch anime online free streaming hd">
    <link  rel="canonical" href="https://www.anime-world.cu.ma">
    <meta name="google-site-verification" content="Qbxw8QAU6afPo7rAGycd4WP3Zj9y-pIeleDNl0zttDE" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script type="text/javascript" src="jquery_main.js" ></script>
    <link rel="shortcut icon" href="anime_image/anime-world3.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="76x76" href="anime_image/anime-world3.png">
    
    <link rel="stylesheet" type="text/css" href="css/index.css" >
      <?php 
    

   include("header.php");
   ?>
  
  <div class="all_container">
    <div class="container">
      <br>
      <h1>Latest release</h1>
      <br>
 	     <?php   
        include("functions.php");
        $anime = full_anime_array();
       foreach($anime as $id => $item){
       echo get_item_html($id,$item);
    }
   ?>
   <br>   <br>
    <h2>Top Anime</h2>
    <br>
    <div class="topAnime">
      <?php     
       $topAnime = full_topanime_array();  
         foreach($topAnime as $id => $item){
         echo get_item_html($id,$item);
      }
     ?>
   </div>
   </div>
 </div>

<?php
include("footer.php");
?>
