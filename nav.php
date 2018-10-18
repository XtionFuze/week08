<!-- <ul class="nav">
    <li class="nav-item"><a class="nav-link" href="template.php?page=home">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="template.php?page=about">About</a></li>
    <li class="nav-item"><a class="nav-link" href="template.php?page=contact">Contact</a></li>
    <li class="nav-item"><a class="nav-link" href="template.php?page=buy">Buy Now!</a></li>
</ul> -->
<?php 
/*
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
*/
$myNavCount = count($myNav);

echo "<ul class='nav'>";
for($i=0;$i<count($myNav);$i++){
echo    "<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
}
echo "</ul>";

?>