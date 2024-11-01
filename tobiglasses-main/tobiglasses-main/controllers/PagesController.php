<?php 

require_once 'BaseController.php';
class PagesController extends BaseController {
    
    function __construct() {
        $this -> folder = 'pages';
    }

    public function home() {
        $data = [
            "Message" => "Hello world",
        ];
        $this -> render('home', $data);
    }


    public function error() {
        $this -> render('error');
    }
}