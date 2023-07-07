<?php
class GalleryController
{
    private $model;

    public function __construct()
    {
        $this->model = new GalleryModel();
    }

    public function index()
    {
        $photos = $this->model->getAllPhotos();
        require_once 'app/views/home.php';
    }

    public function upload()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $photo = $_FILES['photo'];

            $targetDirectory = 'public/uploads/';
            $targetPath = $targetDirectory . basename($photo['name']);

            if (move_uploaded_file($photo['tmp_name'], $targetPath)) {
                $photoPath = $targetPath;
                $this->model->addPhoto($name, $photoPath);
                header('Location: index.php');
            } else {
                echo "Erreur lors du téléchargement de la photo.";
            }
        }

        require_once 'app/views/upload.php';
    }
}
