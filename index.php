<?php
require_once("template.php");

if(isset($_GET['page'])) {
    $page = $_GET['page'];
    include(Template::page($page));
} else {
    include(Template::index());   
}
?>