<?php
if (isset($_FILES['fileToUpload'])) {
    # code... nom 
    $nomImage = $_FILES['fileToUpload']['name'];
    // emplacement 
    $tmpImage = $_FILES['fileToUpload']['tmp_name'];
    $dossier = "image/";
    // deplacement de l image 
    if (move_uploaded_file($tmpImage, $dossier . $nomImage)) {
        echo "Image envoyée avec succès";
        echo "<img src='image/$nomImage' width='300'>";
    } else {
        echo "Une erreur s'est produit ";
    }
} else {
    echo "Veuillez selectionner un image ";
}
?>