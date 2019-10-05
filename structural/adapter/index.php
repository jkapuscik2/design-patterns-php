<?php

namespace structural\adapter;

require(__DIR__ . '/../../autoloader.php');

$msg = "";

if (array_key_exists("fileName", $_POST)
    && array_key_exists("storage", $_POST)
    && array_key_exists("action", $_POST)) {

    $client = new Client($_POST['storage']);

    if (strtolower($_POST['action']) === "get") {
        try {
            $file = $client->get($_POST['fileName']);

            header("Content-Type: application/octet-stream");
            header("Content-Transfer-Encoding: Binary");
            header("Content-disposition: attachment; filename=\"{$file->getName()}\"");

            echo $file->getContent();

        } catch (\Exception $e) {
            $msg = $e->getMessage();
        }

    } elseif (strtolower($_POST['action']) === 'delete') {
        try {
            $client->delete($_POST['fileName']);
            $msg = "File '{$_POST['fileName']}' delete from storage '{$_POST['storage']}'";
        } catch (\Exception $e) {
            $msg = $e->getMessage();
        }
    }
}

if (sizeof($_FILES) && array_key_exists("storage", $_POST)) {
    $client = new Client($_POST['storage']);

    try {
        $fileName = $_FILES['file']["name"];
        $client->save($_FILES['file']["tmp_name"], $fileName);

        $msg = "File '{$_FILES['file']["name"]}' uploaded to storage '{$_POST['storage']}'";
    } catch (\Exception $e) {
        $msg = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adapter Demo</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(195,195,195)">

<div class="container">
    <div class="col-3 mx-auto">
        <img class="img-fluid" src="assets/logo.png"/>
    </div>
    <div class="card col-6 mx-auto p-1">
        <div class="card-body">
            <form id="file-add-form"
                  method="post"
                  enctype="multipart/form-data">
                <h6 class="card-subtitle mb-2 text-muted">Upload your file here</h6>
                <div class="custom-file">
                    <input type="file"
                           name="file"
                           class="custom-file-input"
                           id="file"
                           required>
                    <label class="custom-file-label" for="file">Choose file</label>
                </div>

                <div class="row mx-auto mt-2 mb-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                               name="storage" value="local" checked>
                        <label class="form-check-label">Local filesystem</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="storage" value="azure">
                        <label class="form-check-label">Azure</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="storage" value="aws">
                        <label class="form-check-label">AWS</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-secondary mt-4">Submit</button>
            </form>
        </div>
    </div>

    <div class="card col-6 mx-auto p-1 mt-2">
        <div class="card-body">

            <form id="file-change-form" method="post">

                <div class="form-group">
                    <label>File name</label>
                    <input type="text"
                           class="form-control"
                           name="fileName"
                           aria-describedby="emailHelp"
                           placeholder="Enter file name"
                           required>
                    <small class="form-text text-muted">Enter filename, choose it's storage and action</small>
                </div>

                <div class="row mx-auto mt-2 mb-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                               name="storage" value="local" checked>
                        <label class="form-check-label">Local filesystem</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="storage" value="azure">
                        <label class="form-check-label">Azure</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="storage" value="aws">
                        <label class="form-check-label">AWS</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Choose action</label>
                    <select name='action' class="form-control">
                        <option>GET</option>
                        <option>DELETE</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-secondary mt-4">Submit</button>
            </form>
        </div>


    </div>

    <?php if ($msg): ?>
        <div class="alert alert-light mt-2" role="alert">
            <?= $msg ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>