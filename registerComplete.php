<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Profil oprettet</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Mooli&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ddc56212a6.js" crossorigin="anonymous"></script>
    <script src="js/themeToggle.js"></script>
    <script src="js/fontToggle.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-light-green">

<?php include "includes/header.php";?>


    <main role="main" class="container-fluid pt-0">
        <div class="min-vh-100 text-center d-flex flex-column justify-content-center p-3">

            <div id="ProcesBar" class="row p-4">

                <div class="col bg-dark-green shadow-sm"></div>
                <div class="col bg-dark-green shadow-sm"></div>
                <div class="col bg-dark-green shadow-sm"></div>


            </div>

            <div class="flex-grow-1 d-flex flex-column justify-content-center">

                <div>
                    <img id="DoneIcon" class="img-fluid my-5" src="images/Done-icon.webp">
                </div>


                <h4 class="fw-normal">
                    Din profil er nu klar
                </h4>


                <a href="overview.php" class="btn btn-light-blue shadow-sm m-4">Start din nye rejse</a>

            </div>

        </div>
    </main>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
