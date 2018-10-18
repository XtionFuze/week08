<?php 
$allContent = array(
    "home"=>array(
        "title"=>"Home",
        "content"=>"This is the content page"
        ),
    "about"=>array(
        "title"=>"About",
        "content"=>"This is About content."
        ),
    "buy"=>array(
        "title"=>"Buy Now!",
        "content"=>"Buy now content"
        ),
    "contact"=>array(
        "title"=>"Contact",
        "content"=>"Contact content...we should really say more"
        )
    );
$myNav = array(
    array(
        "title"=>"Home",
        "page"=>"home"
        ),
    array(
        "title"=>"Contact",
        "page"=>"contact"
        ),
    array(
        "title"=>"About",
        "page"=>"about"
        ),
    array(
        "title"=>"Buy",
        "page"=>"buy"
        )
    );
$myNavCount = count($myNav);
?>