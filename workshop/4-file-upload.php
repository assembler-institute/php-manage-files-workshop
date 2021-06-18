<div class="card">
    <div class="card-body">
        <p class="card-text">
            You also can create your own files and modify it, there is two main functions for this.
            Keep in mind that you must have permissions on you server side in order to create/modify files.
            Every time that you modify a file, you're replacing all the previous content of the file.
        </p>

        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th style="width: 7em" scope="col">Function</th>
                    <th scope="col">Description</th>
                    <th style="width: 3em;" scope="col">Documentation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>fopen()</td>
                    <td>This function is also used to create a file. If you specify a file that doesn't exist, it will create it, given that the file is opened for writing (w) or appending (a).</td>
                    <td style="text-align: center;"><a href="https://www.php.net/manual/es/function.fopen.php" target="_blank" rel="noopener noreferrer">Link</a></td>
                </tr>
                <tr>
                    <td>fwrite()</td>
                    <td>This function is used to write to a file. The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.</td>
                    <td style="text-align: center;"><a href="https://www.php.net/manual/es/function.fwrite" target="_blank" rel="noopener noreferrer">Link</a></td>
                </tr>
            </tbody>
        </table>

        <p><strong>Code:</strong></p>

        <pre><code>&#60?php<br><br>
$target_dir = "./files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "&#60p>File is an image - " . $check["mime"] . ".&#60/p>";
        $uploadOk = 1;
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "&#60p>El fichero es válido y se subió con éxito.&#60/p>";
        } else {
            echo "&#60p>¡Posible ataque de subida de ficheros!&#60/p>";
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
<br><br>?></code></pre>

        <p><strong>Result:</strong></p>

        <div class="alert alert-primary" role="alert">
            <form class="mb-0" action="./workshop/4.1-upload-script.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
    </div>
</div>