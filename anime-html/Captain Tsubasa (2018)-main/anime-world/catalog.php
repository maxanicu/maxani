    <link rel="stylesheet" type="text/css" href="css/index.css" >

    <?php 
    
include("functions.php");
$section = null;
$search = null;
$items_per_page = 8;



if (isset($_GET["s"])) {
  $search = filter_input(INPUT_GET,"s",FILTER_SANITIZE_STRING);
}

if (empty($current_page)) {
  $current_page = 1;
}

$total_items = get_anime_count($section,$search);
$total_pages = ceil($total_items / $items_per_page);

//limit results in redirect
$limit_results = "";


// redirect too-large page numbers to the last page
if ($current_page > $total_pages) {
  header("location:index.php?" 
         . $limit_results 
         . "pg=".$total_pages);
}
// redirect too-small page numbers to the first page
if ($current_page < 1) {
  header("location:index.php?"
         . $limit_results
         . "pg=1");
}

//determine the offset (number of items to skip) for the current page
//for example: on page 3 with 8 item per page, the offset would be 16
$offset = ($current_page - 1) * $items_per_page;

if (!empty($search)) {
  $catalog = search_anime_array($search,$items_per_page,$offset);
} else if (empty($section)) {
  $catalog = full_anime_array($items_per_page,$offset);
}


include("header.php");  ?>
  
  <div class="all_container">
    <div class="container">

   <?php 
       foreach($catalog as $item){
       echo get_item_html($id,$item);
    }
    
    ?>
  
   </div>
 </div>
 <?php
include("footer.php");
?>


