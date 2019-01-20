<?php 

function get_anime_count($search = null) {
    include("connection.php");

    try {
        $sql = "SELECT COUNT(title) FROM anime_data";
        if (!empty($search)) {
          $result = $db->prepare(
            $sql
            . " WHERE title LIKE ?"
          );
          $result->bindValue(1,'%'.$search.'%',PDO::PARAM_STR);
        }  else {
          $result = $db->prepare($sql);
        }
        $result->execute();
    } catch (Exception $e) {
      echo "bad query";
    }
  
  $count = $result->fetchColumn(0);
  return $count;
}
function search_anime_array($search, $limit = null, $offset = 0) {
    include("connection.php");
    
    try {
       $sql = "SELECT  title,image,url
         FROM anime_data
         WHERE title LIKE ?";
       if (is_integer($limit)) {
          $results = $db->prepare($sql . " LIMIT ? OFFSET ?");
         $results->bindValue(1,"%".$search."%",PDO::PARAM_STR);
          $results->bindParam(2,$limit,PDO::PARAM_INT);
          $results->bindParam(3,$offset,PDO::PARAM_INT);
       } else {
         $results = $db->prepare($sql);
         $results->bindValue(1,"%".$search."%",PDO::PARAM_STR);
       }
       $results->execute();
    } catch (Exception $e) {
       echo "Unable to retrieved results";
       exit;
    }
    
    $catalog = $results->fetchAll();
    return $catalog;
}
function full_anime_array(){
  include("connection.php");
    try {
     $results = $db->query(" SELECT title, image,url,episode FROM anime_data ORDER BY time DESC LIMIT 21");
  } catch (Exception $e) {
     echo $e->getMessage();
     exit;
  }
  $anime = $results->FetchAll();
  return $anime;
}
function full_topanime_array(){
  include("connection.php");
    try {
     $results = $db->query("SELECT title, image,  url FROM topAnime ");
  } catch (Exception $e) {
     echo $e->getMessage();
     exit;
  }
  $topAnime = $results->FetchAll();
  return $topAnime;
}

function get_item_html($id,$item){
	$output = "<div class='align' ><div class='some lazy'><a href='".$item["url"]."'><img class='img_general'  src='"
         .$item["image"]." ' alt='"
         .$item["title"]."'/></a></div>"
       . "<div class='episodeT'>
	       <h3 class='text_limit'> ".$item["title"]."</h3>
	       <h4 class='text_limit_inline'> <span class='hidden_m'>EP.</span> " .$item["episode"]." ".$item["time"]."</h4>
       </div>"."</div>"; 
   return $output;
}
?>