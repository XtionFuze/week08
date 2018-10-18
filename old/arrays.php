<?php
/* indexed array */
$newContent = array("Jason", "48", "Green");
$newContent = array("Jacob", "17", "Magneto");
/* multidimensional indexed array */
$newContent = array(
    array("Jason", "48", "Green"),
    array("Jacob", "17", "Magneto"),
    array("Sterling", "16", "Purp")
    );
for($i=0; $i<3; $i++) {
   // echo $i."<br>";
//    echo "Hello, my name is ".$newContent[$i][0]."<br>";
  //  echo "I am ".$newContent[$i][1]." years old<br>";
//    echo "My favorite color is ".$newContent[$i][2]."<br>";
}
//echo "<select>";
    for($i=0; $i<3; $i++) {
  //      echo "<option>".$newContent[$i][0]."</option>";
    }
//echo "</select>";
//echo "<br><br>";
// associative arrays
$myContent = array(
    "name"=>"Jason",
    "age"=>"48",
    "color"=>"green"
    );
//echo $myContent["name"]."<br><br>";
/* associative multidimensional array */
$myContent = array(
    "Jason"=>array(
        "age"=>"48",
        "color"=>"green"
        ),
    "Jacob"=>array(
        "age"=>"17",
        "color"=>"magneto"
        ),
    "Sterling"=>array(
        "age"=>"16",
        "color"=>"purple"
        )    
    );
//echo $myContent["Sterling"]["age"]."<br><br>";
/* indexed multidimensional associative array */
$myContent = array(
    array(
        "name"=>"Jason",
        "age"=>"48",
        "color"=>"green"
        ),
    array(
        "name"=>"Jacob",
        "age"=>"17",
        "color"=>"magneto"
        ),
    array(
        "name"=>"Sterling",
        "age"=>"16",
        "color"=>"purple"
        )    
    );
//echo $myContent[1]["age"]."<br>";
$myNav = array(
    array(
        "title"=>"Home",
        "page"=>"index.php"
        ),
    array(
        "title"=>"Contact",
        "page"=>"contact.php"
        ),
    array(
        "title"=>"About",
        "page"=>"about.php"
        ),
        array(
        "title"=>"Buy Now!",
        "page"=>"buy.php"
        )
    );
// homework: create a navigation from the $myNav array using a for loop
// result should look like the nav.php file

$myNavCount = count($myNav);

echo "<ul class='nav'>";
for($i=0;$i<count($myNav);$i++){
echo    "<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
}
echo "</ul>";

?>