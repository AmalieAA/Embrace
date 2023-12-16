<?php
require "settings/init.php";


$users = $db->sql("SELECT * FROM user WHERE userId = " . $_COOKIE["userId"]);

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

<?php
foreach ($users as $user)
?>



<main role="main" class="container-fluid">

    <div class="bg-white shadow-sm m-3 p-3 flex-grow-1 rounded-3 border border-light-blue">

        <div id="ProfilePic" class="text-center mx-auto mt-2">

            <img class="img-fluid" src="uploads/<?php echo $user->profileImage; ?>" alt="Profilbillede">

        </div>

        <div class="text-center py-3">

            <div class="fs-4">
                <?php echo $user->firstname; ?>,
                <span class="fs-6"><?php

                    $today = date('Y-m-d');


                    $age = date_diff(date_create($user->dateOfBirth), date_create($today))->y;

                    echo $age;
                    ?></span>
            </div>
            <div class="fs-7"><?php echo $user->pronouns; ?></div>

        </div>

        <div class="pt-2 pb-5">

            <div class="text-center">

                <div class="mb-2">
                    <i class="fa-solid fa-eye fa-2x text-light-blue"></i>
                </div>

                <?php
                if($user->lookingForFriendship == 1 && $user->lookingForRelationship == 1){
                    echo "Forhold & relationer";
                }
                elseif ($user->lookingForFriendship == 1){
                    echo "Relationer";
                }
                elseif ($user->lookingForRelationship == 1){
                    echo "Forhold";
                }

                ?></div>

            <div class="py-3">
                <ul id="ValuesList" class="row fs-7">

                    <?php
                    $splitValues = explode("+", $user->myValues);

                    foreach ($splitValues as $value) {

                        echo "<li class='col-6'>" . $value . "</li>";
                    }

                    ?>
                </ul>
            </div>


            <div class="pt-3 pb-3">
                <div class="text-center">
                    <i class="fa-solid fa-circle-user fa-2x text-light-blue"></i>
                </div>

                <div class="p-3 fs-7">
                    <?php echo $user->description ?>
                </div>
                <div class="px-2 mt-2 fs-7">
                    <?php if(isset($user->gender)) {  ?>
                        <span class="border border-2 border-light-blue py-1 px-3 rounded-3 me-2"><?php echo $user->gender ?></span>
                    <?php } ?>
                    <?php if (isset($user->sexuality)) { ?>
                        <span class="border border-2 border-light-blue py-1 px-3 rounded-3"><?php echo $user->sexuality ?></span>
                    <?php }?>
                </div>

            </div>

        </div>

    </div>


</main>

<?php include "includes/bottomNavigation.php";?>

</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


