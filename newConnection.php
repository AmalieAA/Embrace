<?php
require "settings/init.php";


$currentUser = $db->sql("SELECT * FROM user WHERE userId = " . $_COOKIE["userId"])[0];

$sql = "SELECT * FROM user WHERE userId = " . $_GET["connectedUser"];

$connectedUser = $db->sql($sql)[0];
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Profilside</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ddc56212a6.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<main role="main" class="container-fluid">


    <div class="row bg-white shadow-sm m-3 p-3 align-items-center flex-grow-1">

        <div class="col-5 my-5">

            <div class="new-match-pic text-center mx-auto">
                <img class="img-fluid" src="uploads/<?php echo $connectedUser->profileImage; ?>">
            </div>
        </div>

        <div class="col-2 text-center">
            <i class="fa-solid fa-plus"></i>
        </div>

        <div class="col-5">

            <div class="new-match-pic text-center mx-auto">
                <img class="img-fluid" src="uploads/<?php echo $currentUser->profileImage; ?>">
            </div>

        </div>

        <div class="text-center">
            <p>I har begge vist gensidig interesse </p>
        </div>
    </div>



    <div class="d-flex justify-content-between m-3 my-5" role="tablist">


        <a class="btn shadow-sm" href="">Besked</a>
        <a class="btn shadow-sm" href="quiz.php?connectedUser=<?php
        echo $connectedUser->userId;

        ?>">Quiz</a>
    </div>



</main>
<?php include "includes/bottomNavigation.php";?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


