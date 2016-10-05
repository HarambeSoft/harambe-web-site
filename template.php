<?php
require_once("config.php");
require_once("funcs.php");

class Template {
    private static function template_folder() {
        return Path::join("templates", TEMPLATE_NAME);
    }
    public static function index() {
        return Path::join(Template::template_folder(), "index.php");
    }
    
    public static function page($page) {
        return Path::join(Template::template_folder(), $page . ".php");
    }
}
?>