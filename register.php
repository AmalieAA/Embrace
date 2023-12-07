<?php
require "settings/init.php";

if (!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if (!empty($file["prodBillede"]["tmp_name"])){
        move_uploaded_file($file["prodBillede"]["tmp_name"], "uploads/" . basename($file["prodBillede"]["name"]));
    }

    $sql = "INSERT INTO produkter (prodTitel, prodAuthor, prodGenre, prodPublisher, prodLanguage, prodPublishDate, prodFormat, prodPages, prodPrice, prodDescription, prodBillede) values(:prodTitel, :prodAuthor, :prodGenre, :prodPublisher, :prodLanguage, :prodPublishDate, :prodFormat, :prodPages, :prodPrice, :prodDescription, :prodBillede)";
    $bind = [":prodTitel" => $data["prodTitel"], ":prodAuthor" => $data["prodAuthor"], ":prodGenre" => $data["prodGenre"], ":prodPublisher" => $data["prodPublisher"], ":prodLanguage" => $data["prodLanguage"], ":prodPublishDate" => $data["prodPublishDate"], ":prodFormat" => $data["prodFormat"], ":prodPages" => $data["prodPages"], ":prodPrice" => $data["prodPrice"], ":prodDescription" => $data["prodDescription"],
        ":prodBillede" => (!empty($file["prodBillede"]["tmp_name"])) ? $file["prodBillede"]["name"] : null,
    ];

    $db->sql($sql, $bind, false);

    echo "Produktet er nu indsat. <a href='insert.php'>Indsæt et produkt mere</a>";
    header("Location: registerComplete.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Opret profil</title>

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


<div class="container-fluid">
    <form id="RegisterForm" class="p-3 tab-content" method="post" action="register.php" enctype="multipart/form-data">

        <div class="tab-pane fade show active" id="create-account">

            <div>
                <h4 class="text-center my-4">Opret konto</h4>
            </div>


            <div class="my-4">
                <label class="py-2" for="name">Dit navn</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[name]" id="name" placeholder="Angiv dit for- og efternavn" value="">
            </div>

            <div class="my-4">
                <label class="py-2" for="dateOfBirth">Din fødselsdag</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="date" name="data[dateOfBirth]" id="dateOfBirth" placeholder="Angiv din fødselsdag" value="">
            </div>

            <div class="my-4">
                <label class="py-2" for="email">Din e-mail</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[email]" id="email" placeholder="Indtast din e-mail" value="">
            </div>

            <div class="my-4">
                <label class="py-2" for="password">Adgangskode</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[password]" id="password" placeholder="Indtast en adgangskode" value="">
            </div>

            <div class="my-4">
                <label class="py-2" for="password">Bekræft adgangskode</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[password]" id="password" placeholder="Indtast din adgangskode igen for at bekræfte" value="">
            </div>

            <div class="d-flex justify-content-between my-3" role="tablist">

                <a class="btn btn-primary" href="index.php">Tilbage</a>
                <button class="btn btn-primary" type="button" onclick="showNextTab()">Videre</button>
            </div>

        </div>

        <div class="tab-pane fade" id="create-user">


            <div class="my-4">
                <label class="py-2" for="gender">Køn</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[gender]" id="gender" placeholder="Angiv din kønsidentitet" value="">
            </div>

            <div class="my-4">
                <label class="py-2" for="pronouns">Dine pronominer</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[pronouns]" id="pronouns" placeholder="Angiv dine pronominer" value="">
            </div>

            <div class="my-4">
                <label class="py-2" for="sexuality">Seksualitet</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[sexuality]" id="sexuality" placeholder="Indtast din seksualitet" value="">
            </div>


            <div class="my-4">
                <div>
                     <label class="py-2">Hvad søger du?
                         <span class="label-subtitle">
                             Nye relationer eller forhold
                         </span>
                     </label>
                </div>

                <div class="input-text">
                    <input class="form-check-input" type="checkbox" value="" id="lookingForFriendship">
                    <label class="form-check-label" for="lookingForFriendship">Relationer</label>
                </div>

                <div class="input-text">
                    <input class="form-check-input" type="checkbox" value="" id="lookingForRelationship">
                    <label class="form-check-label" for="lookingForRelationship">Forhold</label>
                </div>
            </div>


            <div class="my-4">
                <label class="py-2" for="myValues">Dine værdier?
                    <span class="label-subtitle">
                             Du kan vælge flere værdier
                    </span>
                </label>

                <select class="form-select input-text border-0 shadow-sm py-2" multiple name="data[myValues]" id="myValues">
                    <option>Vælg dine egne værdier</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>

            <div class="my-4">
                <label class="py-2" for="preferedValues">Dine værdier
                    <span class="label-subtitle">
                             Du kan vælge flere værdier
                    </span>
                </label>

                <select class="form-select input-text border-0 shadow-sm py-2" multiple name="data[preferedValues]" id="preferedValues">
                    <option>Hvilke værdier søger du i en relation?</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>



            <div class="my-4">
                <label class="py-2" for="description">Beskrivelse</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="text" name="data[description]" id="description" placeholder="Indsæt en kort beskrivelse om dig sekv" value="">
            </div>

            <div class="my-4">
                <label class="py-2" for="profileImage">Profilbillede</label>
                <input class="form-control input-text border-0 shadow-sm py-2 " type="file" name="data[profileImage]" id="profileImage" placeholder="" value="">
            </div>

            <div class="d-flex justify-content-between my-3" role="tablist">


                <button class="btn btn-primary" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn btn-primary" type="button" onclick="showNextTab()">Videre</button>
            </div>

        </div>

        <div class="tab-pane fade" id="create-quiz">

            <div class="my-4">
                <label class="py-2" for="question1">Spørgsmål 1</label>

                <select class="form-select input-text border-0 shadow-sm py-2" name="data[question1]" id="question1">
                    <option>Angiv dit svar</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>

            <div class="my-4">
                <label class="py-2" for="question2">Spørgsmål 2</label>

                <select class="form-select input-text border-0 shadow-sm py-2" name="data[question2]" id="question2">
                    <option>Angiv dit svar</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>

            <div class="my-4">
                <label class="py-2" for="question3">Spørgsmål 3</label>

                <select class="form-select input-text border-0 shadow-sm py-2" name="data[question3]" id="question3">
                    <option>Angiv dit svar</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>

            <div class="my-4">
                <label class="py-2" for="question4">Spørgsmål 4</label>

                <select class="form-select input-text border-0 shadow-sm py-2" name="data[question4]" id="question4">
                    <option>Angiv dit svar</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>

            <div class="my-4">
                <label class="py-2" for="question5">Spørgsmål 5</label>

                <select class="form-select input-text border-0 shadow-sm py-2" name="data[question5]" id="question5">
                    <option>Angiv dit svar</option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>

            <div class="d-flex justify-content-between my-3" role="tablist">

                <button class="btn btn-primary" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn btn-primary" type="submit">Næste</button>

            </div>

        </div>

    </form>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/tabNavigation.js"></script>

</body>
</html>

