<?php
require_once 'config/config.php';
require_once 'core/Database.php';
require_once 'app/models/GalleryModel.php';
require_once 'app/controllers/GalleryController.php';

$controller = new GalleryController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'upload') {
        $controller->upload();
    } else {
        $controller->index();
    }
} else {
    $controller->index();
}
?>
