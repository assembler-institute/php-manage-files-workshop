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
try {
    $newFileName = "./workshop/files/3-create-write-file.txt";
    $fileContent = 'This is the content of the "3-create-write-file.txt" file.';

    // Now the file is created, but it's empty.
    $file = fopen($newFileName, "w");

    // Here we add the content to the file
    fwrite($file, $fileContent);

    // You can add new content to the file
    fwrite($file, "\nNew content in a new line.");

    $file = fopen($newFileName, "r");

    // Print the content
    $content = fread($file, filesize($newFileName));
    echo nl2br($content);

    // Close the file buffer
    fclose($file);
} catch (Throwable $t) {
    echo $t->getMessage();
}
<br><br>?></code></pre>

        <p><strong>Result:</strong></p>

        <div class="alert alert-primary" role="alert">
            <p class="mb-0">
                <?php

                try {
                    $newFileName = "./workshop/files/3-create-write-file.txt";
                    $fileContent = 'This is the content of the "3-create-write-file.txt" file.';

                    // Now the file is created, but it's empty.
                    $file = fopen($newFileName, "w");

                    // Here we add the content to the file
                    fwrite($file, $fileContent);

                    // You can add new content to the file
                    fwrite($file, "\nNew content in a new line.");

                    $file = fopen($newFileName, "r");

                    // Print the content
                    $content = fread($file, filesize($newFileName));
                    echo nl2br($content);

                    // Close the file buffer
                    fclose($file);
                } catch (Throwable $t) {
                    echo $t->getMessage();
                }

                ?>
            </p>
        </div>
    </div>
</div>