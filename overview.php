<?php
require "settings/init.php";

$sql = "SELECT * FROM user WHERE userId != :userId";
$bind = [":userId" => $_COOKIE["userId"]];

if (!empty($_GET["prevUser"])){
    $sql .= " AND userId != :prevUser";
    $bind[":prevUser"] = $_GET["prevUser"];

}
$sql .= " ORDER BY RAND() LIMIT 1";
$users = $db->sql($sql, $bind);

?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Find din næste relation</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ddc56212a6.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-grey">
    <div id="PageWrapper">

        <?php include "includes/header.php";?>

        <?php
        foreach ($users as $user)
        ?>

        <main role="main" class="container-fluid">


            <div class="bg-white shadow-sm m-3 p-3 flex-grow-1 rounded-3 border border-light-blue">

                <div id="ProfilePic" class="text-center mx-auto">

                    <img class="img-fluid" src="uploads/<?php echo $user->profileImage; ?>">

                </div>

                <div class="row text-center pt-3 pb-5">

                    <div class="col"><?php echo $user->firstname; ?></div>
                    <div class="col"><?php echo $user->pronouns; ?></div>
                    <div class="col"><?php

                        $today = date('Y-m-d');


                        $age = date_diff(date_create($user->dateOfBirth), date_create($today))->y;

                        echo $age;
                        ?>
                    </div>

                </div>

                <div class="row pt-3 pb-5">



                    <div class="col-4 text-center">

                        <div class="fs-4">
                            <i class="fa-solid fa-eye text-light-blue"></i>
                        </div>

                        <?php
                        if($user->lookingForFriendship == 1 && $user->lookingForRelationship == 1){
                            echo "Forhold <br> & <br> relationer";
                        }
                        elseif ($user->lookingForFriendship == 1){
                            echo "Relationer";
                        }
                        elseif ($user->lookingForRelationship == 1){
                            echo "Forhold";
                        }

                        ?></div>

                    <div class="col">
                        <ul id="ValuesList">

                            <?php

                            $splitValues = explode("+", $user->myValues);

                            foreach ($splitValues as $value) {

                                echo "<li>" . $value . "</li>";
                            }

                            ?>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="d-flex justify-content-evenly p-3 pt-4">

                <div class="btn-rounded">
                    <a class="btn btn-light-blue shadow-sm" href="overview.php?prevUser=<?php
                    echo $user->userId;

                    ?>">
                        <i class="fa-regular fa-face-meh"></i>
                    </a>
                    Ikke for mig
                </div>
                <div class="btn-rounded">

                    <a class="btn btn-light-blue shadow-sm" href="newConnection.php?connectedUser=<?php
                    echo $user->userId;

                    ?>">
                        <i class="fa-regular fa-face-laugh"></i>
                    </a>
                    Lær at kende
                </div>

            </div>


        </main>


        <?php include "includes/bottomNavigation.php";?>

    </div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


