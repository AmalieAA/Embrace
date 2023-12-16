<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Quiz er udfyldt</title>

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
<div id="PageWrapper">

<?php include "includes/header.php";?>

<main role="main" class="container-fluid">

    <div class="d-flex flex-column fs-5 justify-content-center bg-white shadow-sm text-center m-3 p-3 flex-grow-1 rounded-3 border border-dark-green">

        <div class="question-icon mb-5">
            <i class="fa-solid fa-handshake text-dark-green"></i>
        </div>

        <p>
            I har nu lært hinanden
            bedre at kende
            <br>
            <br>
            Start en samtale og
            påbegynd jeres nye relation
        </p>
    </div>


    <div class="d-flex justify-content-evenly p-3 pt-4">
        <div class="btn-rounded">

            <a class="btn btn-dark-green shadow-sm" href="overview.php">
                <i class="fa-solid fa-door-open"></i>
            </a>
            Senere
        </div>
        <div class="btn-rounded">

            <a class="btn bg-dark-green text-light shadow-sm" href="overview.php">
                <i class="fa-solid fa-comment-dots"></i>
            </a>
            Start samtale
        </div>
    </div>



</main>

<?php include "includes/bottomNavigation.php";?>

</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


