<?php
$target_dir = "./files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "<p>File is an image - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "<p>El fichero es válido y se subió con éxito.</p>";
        } else {
            echo "<p>¡Posible ataque de subida de ficheros!</p>";
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

?>
<p><a href="../index.php">Back</a></p>