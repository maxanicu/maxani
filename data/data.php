 <?php
 include("connection.php")
 /*
 $anime = [];
  $topAnime["Boruto Naruto Next Generations"] =[
  "title" =>"Boruto Naruto Next Generations",
  "episode" =>69,
  "image" =>"anime_image/boruto.jpg",
    "url" => "anime-html/Boruto Naruto Next Generations-main/Boruto Naruto Next Generations-main.php",
    "gener" => "",
];
   $topAnime["Hunter X Hunter 2011"] =[
  "title" =>"Hunter X Hunter 2011",
  "episode" =>148,
  "image" =>"anime_image/Hunter X Hunter 2011.jpg",
    "url" => "anime-html/Hunter X Hunter 2011/Hunter X Hunter 2011-main.php",
];
  $topAnime["Dragon Ball Super"] =[
  "title" =>"Dragon Ball Super",
  "episode" =>131,
  "image" =>"anime_image/Dragon Ball Super.jpg",
  "url" => "anime-html/Dragon Ball Super-main/Dragon Ball Super-main.php"
];
   $topAnime["Dragon Ball Heroes"] =[
  "title" =>"Dragon Ball Heroes",
  "episode" =>2,
  "image" =>"anime_image/Dragon Ball Heroes.jpg",
    "url" => "anime-html/Dragon Ball Heroes-main/Dragon Ball Heroes-main.php",
    "gener" => "",
];
$topAnime["Yuragi sou no Yuuna san"] =[
  "title" =>"Yuragi sou no Yuuna san",
  "episode" =>5,
  "image" =>"anime_image/Yuragi sou no Yuuna san.jpg",
    "url" => "anime-html/Yuragi sou no Yuuna san-main/Yuragi sou no Yuuna san-main.php",
    "gener" => "",
];
$topAnime["Island"] =[
  "title" =>"Island",
  "episode" =>6,
  "image" =>"anime_image/Island.jpg",
    "url" => "anime-html/Island-main/Island-main.php",
    "gener" => "",
];
$topAnime["hanebado!"] =[
  "title" =>"hanebado!",
  "episode" =>6,
  "image" =>"anime_image/hanebado!.jpg",
    "url" => "anime-html/hanebado!-main/hanebado!-main.php",
    "gener" => "",
];
 $topAnime["Naruto Shippuden  "] =[
  "title" =>"Naruto Shippuden  ",
  "episode" =>500,
  "image" =>"anime_image/Naruto Shippuden.jpg",
    "url" => "anime-html/Naruto Shippuden-main/Naruto Shippuden -main.php",
];
$anime["Isekai Izakaya Koto Aitheria no Izakaya Nobu"] =[
  "title" =>"Isekai Izakaya Koto Aitheria no Izakaya Nobu",
  "episode" =>19,
  "image" =>"anime_image/isekai-izakaya-koto-aitheria-no.jpg",
    "url" => "anime-html/Isekai Izakaya Koto Aitheria no Izakaya Nobu-main/Isekai Izakaya Koto Aitheria no Izakaya Nobu-main.php",
    "gener" => "",
];
$anime["Pokemon Sun & Moon"] =[
  "title" =>"Pokemon Sun & Moon",
  "episode" =>86,
  "image" =>"anime_image/Pokemon Sun & Moon.jpg",
    "url" => "anime-html/Pokemon Sun & Moon-main/Pokemon Sun & Moon-main.php",
    "gener" => "",
];
$anime["Banana Fish"] =[
  "title" =>"Banana Fish",
  "episode" =>7,
  "image" =>"anime_image/Banana Fish.jpg",
    "url" => "anime-html/Banana Fish-main/Banana Fish-main.php",
    "gener" => "",
];
 $anime["Shichisei no Subaru"] =[
  "title" =>"Shichisei no Subaru",
  "episode" =>7,
  "image" =>"anime_image/Shichisei no Subaru.jpg",
    "url" => "anime-html/Shichisei no Subaru-main/Shichisei no Subaru-main.php",
    "gener" => "",
];
$anime["Isekai Maou to Shoukan Shoujo no Dorei Majutsu"] =[
  "title" =>"Isekai Maou to Shoukan Shoujo no Dorei Majutsu",
  "episode" =>7,
  "image" =>"anime_image/Isekai Maou to Shoukan Shoujo no Dorei Majutsu.jpg",
    "url" => "anime-html/Isekai Maou to Shoukan Shoujo no Dorei Majutsu-main/Isekai Maou to Shoukan Shoujo no Dorei Majutsu-main.php",
    "gener" => "",
];
 $anime["Boruto Naruto Next Generations"] =[
  "title" =>"Boruto Naruto Next Generations",
  "episode" =>69,
  "image" =>"anime_image/boruto.jpg",
    "url" => "anime-html/Boruto Naruto Next Generations-main/Boruto Naruto Next Generations-main.php",
    "gener" => "",
];
 $anime["Back Street Girls Gokudolls"] =[
  "title" =>"Back Street Girls Gokudolls",
  "episode" =>7,
  "image" =>"anime_image/Back Street Girls Gokudolls.jpg",
    "url" => "anime-html/Back Street Girls Gokudolls-main/Back Street Girls Gokudolls-main.php",
    "gener" => "",
];
 $anime["Steins;Gate 0"] =[
  "title" =>"Steins;Gate 0",
  "episode" =>18,
  "image" =>"anime_image/Steins;Gate 0.jpg",
    "url" => "anime-html/Steins;Gate 0-main/Steins;Gate 0-main.php",
    "gener" => "",
];
 $anime["Free! Dive to the Future"] =[
  "title" =>"Free! Dive to the Future",
  "episode" =>6,
  "image" =>"anime_image/Free! Dive to the Future.jpg",
    "url" => "anime-html/Free! Dive to the Future-main/Free! Dive to the Future-main.php",
    "gener" => "",
];
 $anime["Yu☆Gi☆Oh! VRAINS"] =[
  "title" =>"Yu☆Gi☆Oh! VRAINS",
  "episode" =>64,
  "image" =>"anime_image/Yu Gi Oh! VRAINS.jpg",
    "url" => "anime-html/Yu☆Gi☆Oh! VRAINS-main/Yu☆Gi☆Oh! VRAINS-main.php",
];
 $anime["Captain Tsubasa (2018)"] =[
  "title" =>"Captain Tsubasa (2018)",
  "episode" =>20,
  "image" =>"anime_image/Captain Tsubasa (2018).jpg",
    "url" => "anime-html/Captain Tsubasa (2018)-main/Captain Tsubasa (2018)-main.php",
];
 $anime["lupin lll part 5"] =[
  "title" =>"lupin lll part 5",
  "episode" =>19,
  "image" =>"anime_image/lupin.jpg",
    "url" => "anime-html/lupin lll part 5-main/lupin lll part 5-main.php",
];
$anime["Overload III"] =[
  "title" =>"Overload III",
  "episode" =>6,
  "image" =>"anime_image/Overload III.jpg",
    "url" => "anime-html/Overload III-main/Overload III-main.php",
];
 $anime["BLACK CLOVER (TV)"] =[
  "title" =>"BLACK CLOVER (TV)",
  "episode" =>45,
  "image" =>"anime_image/Black Clover (TV).jpg",
    "url" => "anime-html/BLACK CLOVER (TV)-main/BLACK CLOVER (TV)-main.php",
];
 $anime["Layton Mystery Tanteisha Katri no Nazotoki File"] =[
  "title" =>"Layton Mystery Tanteisha Katri no Nazotoki File",
  "episode" =>19,
  "image" =>"anime_image/Layton Mystery Tanteisha Katri no Nazotoki File.jpg",
    "url" => "anime-html/Layton Mystery Tanteisha Katri no Nazotoki File-main/Layton Mystery Tanteisha Katri no Nazotoki File-main.php",
];
 $anime["One Room 2nd Season"] =[
  "title" =>"One Room 2nd Season",
  "episode" =>6,
  "image" =>"anime_image/One Room 2nd Season.jpg",
    "url" => "anime-html/One Room 2nd Season-main/One Room 2nd Season-main.php",
];
 $anime["Phantom in the Twilight"] =[
  "title" =>"Phantom in the Twilight",
  "episode" =>6,
  "image" =>"anime_image/Phantom in the Twilight.jpg",
    "url" => "anime-html/Phantom in the Twilight-main/Phantom in the Twilight-main.php",
];
 $anime["Back Street Girls Gokudolls"] =[
  "title" =>"Back Street Girls Gokudolls",
  "episode" =>6,
  "image" =>"anime_image/Back Street Girls Gokudolls.jpg",
    "url" => "anime-html/Back Street Girls Gokudolls-main/Back Street Girls Gokudolls-main.php",
];
 $anime["Chio-chan no Tsuugakuro"] =[
  "title" =>"Chio-chan no Tsuugakuro",
  "episode" =>6,
  "image" =>"anime_image/Chio-chan no Tsuugakuro.jpg",
    "url" => "anime-html/Chio-chan no Tsuugakuro-main/Chio-chan no Tsuugakuro-main.php",
];
 $anime["Happy Sugar Life"] =[
  "title" =>"Happy Sugar Life",
  "episode" =>5,
  "image" =>"anime_image/Happy Sugar Life.jpg",
    "url" => "anime-html/Happy Sugar Life-main/Happy Sugar Life-main.php",
];
 $anime["Asobi Asobase"] =[
  "title" =>"Asobi Asobase",
  "episode" =>6,
  "image" =>"anime_image/Asobi Asobase.jpg",
    "url" => "anime-html/Asobi Asobase-main/Asobi Asobase-main.php",
];
 $anime["Late Night! The Genius Bakabon"] =[
  "title" =>"Late Night! The Genius Bakabon",
  "image" =>"anime_image/Late Night! The Genius Bakabon.jpg",
  "episode" =>6,
    "url" => "anime-html/Late Night! The Genius Bakabon-main/Late Night! The Genius Bakabon-main.php",
];
*/

