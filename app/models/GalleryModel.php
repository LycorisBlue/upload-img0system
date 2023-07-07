<?php
class GalleryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllPhotos()
    {
        $query = 'SELECT * FROM photos';
        $stmt = $this->db->connect()->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addPhoto($name, $photoPath)
    {
        $allowedExtensions = array('png', 'jpg');
        $fileExtension = strtolower(pathinfo($photoPath, PATHINFO_EXTENSION));

        if (in_array($fileExtension, $allowedExtensions)) {
            $query = 'INSERT INTO photos (name, photo_path) VALUES (:name, :photo_path)';
            $stmt = $this->db->connect()->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':photo_path', $photoPath);
            return $stmt->execute();
        } else {
            return false; // Extension de fichier non prise en charge
        }
    }
}
