<?php
require_once("config.php");
require_once("funcs.php");

class People {
    public static function get_people() {
        $dir_elems = array_diff(scandir(PEOPLE_DIR), array('..', '.'));
        foreach ($dir_elems as $person_dir) {
            yield new Person($person_dir);
        }
    }
}

class Person {
    private $name;
    private $info;
    private $email;
    private $image;
    
    public function __construct($path) {
        $person_path = Path::join(PEOPLE_DIR, $path);
    
        $txt = file_get_contents(Path::join($person_path, "info"));
        $all_info = explode("|", $txt);
        
        $this->name = $all_info[0];
        $this->info = $all_info[1];
        $this->email = $all_info[2];
        $this->image = Path::join($person_path, "image.jpg");
    }
    
    public function name() {
        return $this->name;
    }
    
    public function image() {
        return $this->image;
    }
    
    public function info() {
        return $this->info;
    }
    
    public function email() {
        return $this->email;
    }
}
?>
