<div class="card">
    <div class="card-body">
        <p class="card-text">
            Like you can see before, the <strong>readFile()</strong> function it's very simple to use, but you can't customize how you want to retrieve
            the information from the file.
        </p>
        <p class="card-text">
            Now you will learn how to open, read, and close a file on the server in a manual way.
            There is tree main functions that you will have to use are:
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
                    <td>Opens a URL or a file, it requires two parameters, the file/url that you want to open and the way that you want to be opened. </td>
                    <td style="text-align: center;"><a href="https://www.php.net/manual/es/function.fopen.php" target="_blank" rel="noopener noreferrer">Link</a></td>
                </tr>
                <tr>
                    <td>fread()</td>
                    <td>Once the file is opened, fread() function reads the file, you must provide two parameters, the path and the length of the file.</td>
                    <td style="text-align: center;"><a href="https://www.php.net/manual/es/function.fread" target="_blank" rel="noopener noreferrer">Link</a></td>
                </tr>
                <tr>
                    <td>fclose()</td>
                    <td>Finally, you should close the file in order to save server memory (not mandatory but recommended)</td>
                    <td style="text-align: center;"><a href="https://www.php.net/manual/es/function.fclose.php" target="_blank" rel="noopener noreferrer">Link</a></td>
                </tr>
            </tbody>
        </table>

        <p><strong>Code:</strong></p>

        <pre><code>&#60?php<br><br>
try {
    $fileName = "./workshop/files/example-file.txt";

    if (!file_exists($fileName)) {
        throw new Exception('File open failed');
    }

    // The function returns a pointer to the file if it is successful or zero if it is not. Files are opened for read or write operations.
    $file = fopen($fileName, "r");

    // Reads the file
    $content = fread($file, filesize($fileName));

    echo $content;

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
                    $fileName = "./workshop/files/example-file.txt";

                    if (!file_exists($fileName)) {
                        throw new Exception('File open failed');
                    }
                    // The function returns a pointer to the file if it is successful or zero if it is not. Files are opened for read or write operations.
                    $file = fopen($fileName, "r");

                    // Reads the file
                    $content = fread($file, filesize($fileName));

                    echo $content;

                    // Close the file buffer
                    fclose($file);
                } catch (Throwable $t) {
                    echo $t->getMessage();
                }

                ?>
            </p>
        </div>
    </div>