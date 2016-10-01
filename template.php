<?php
require_once("config.php");
require_once("funcs.php");

class Template {
    public static function index() {
        return Path::join("templates", TEMPLATE_NAME, "index.php");
    }
}
?>