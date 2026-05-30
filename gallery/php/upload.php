<?php
if (isset($_FILES['image'])) {
    # code... nom 
    $nomImage = $_FILES['image'] ['name'];
    // emplacement 
    $tmpImage = $_FILES['image']['tmp_name'];
    $dossier = "images/";
    // deplacement de l image 
    move_uploaded_file($tmpImage, $dossier.$nomImage);
    echo"Image envoyée avec succès";
    echo"<img src='image/$nomImage' width='300'>";
}
?>