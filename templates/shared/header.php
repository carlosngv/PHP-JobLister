<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" integrity="sha384-nNK9n28pDUDDgIiIqZ/MiyO3F4/9vsMtReZK39klb/MtkZI3/LtjSjlmyVPS3KdN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $title; ?></title>
</head>
<body>

<header class="pb-3 mb-4 border-bottom">
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <a class="navbar-brand" href="#"><?php echo SITE_TITLE; ?></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Create Listing</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<?php displayMessage();  ?>
