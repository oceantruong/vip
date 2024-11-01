<?php 


$controller = isset($_GET['controller']) ? $_GET['controller'] : 'pages';
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

require_once('routes.php');