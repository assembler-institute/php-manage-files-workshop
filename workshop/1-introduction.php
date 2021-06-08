<div>
    <div class="bd-example">
        <div class="accordion" id="introductionAccordion">
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What does it mean to manage files?
                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#introductionAccordion">
                    <div class="accordion-body">
                        <p>When you are working in the server environment you are able to manipulate the information and files of the backend part.
                            In PHP you have built-in methods that allows you to read, modify, create and delete files and directories</p>
                        <div class="alert alert-warning" role="alert">
                            <h6 class="alert-heading">Be careful when manipulating files!</h6>
                            <p class="mb-0">You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file,
                                filling a hard-drive with garbage data, and deleting the content of a file by accident.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Real use cases
                    </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                        <p>Some of the most used cloud tools to manage files are Google Drive, Dropbox, OneDrive, ... This tools
                            must manipulate files in the backend part in order to simulate an environment similar to the one you have on your computer.</p>
                        <img src="./assets/img/file-manager.gif" alt="File manager" width="700px">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Code example
                    </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                        <p>In PHP there is a simple function to read a file and print their content. The <strong>readfile()</strong> function reads a file and writes it to the output buffer.</p>
                        <p>In this repository you have a file called <strong>"example-file.txt"</strong> that contains some plain text.</p>
                        <pre style="background-color: #d5d5d5">&#60?

php echo readfile("./workshop/files/example-file.txt");

?></pre>

                        <!--TODO poner el resultado del fichero-->
                        <p><strong>Example:</strong></p>
                        <!-- &#60div>hola&#60/div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>