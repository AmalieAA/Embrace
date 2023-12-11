<?php
require "settings/init.php";

if (!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if (!empty($file["profileImage"]["tmp_name"])){
        move_uploaded_file($file["profileImage"]["tmp_name"], "uploads/" . basename($file["profileImage"]["name"]));
    }

    $sql = "INSERT INTO user (
                       fullName, 
                       dateOfBirth, 
                       email, 
                       password, 
                       gender, 
                       pronouns, 
                       sexuality, 
                       lookingForRelationship, 
                       lookingForFriendship, 
                       myValues, 
                       preferedValues,
                       description,
                       profileImage) 
                values(:fullName, 
                       :dateOfBirth, 
                       :email, 
                       :password, 
                       :gender, 
                       :pronouns, 
                       :sexuality, 
                       :lookingForRelationship, 
                       :lookingForFriendship, 
                       :myValues, 
                       :preferedValues,
                       :description,
                       :profileImage)";
    $bind = [
            ":fullName" => $data["fullName"],
            ":dateOfBirth" => $data["dateOfBirth"],
            ":email" => $data["email"],
            ":password" => $data["password"],
            ":gender" => $data["gender"],
            ":pronouns" => $data["pronouns"],
            ":sexuality" => $data["sexuality"],
            ":lookingForRelationship" => $data["lookingForRelationship"] ? "1" : "0",
            ":lookingForFriendship" => $data["lookingForFriendship"] ? "1" : "0",
            ":myValues" => join("+", $data["myValues"]),
            ":preferedValues" => join("+",$data["preferedValues"]),
            ":description" => $data["description"],
            ":profileImage" => (!empty($file["profileImage"]["tmp_name"])) ? $file["profileImage"]["name"] : null,
    ];

    $db->sql($sql, $bind, false);
    $userIds = $db->sql("SELECT userId FROM user ORDER BY userId DESC LIMIT 1");
    $cookie_name = "userId";
    $cookie_value = $userIds[0]->userId;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

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

<body class="bg-light-green">


<main role="main" class="container-fluid">
    <form id="RegisterForm" class="p-3 tab-content" method="post" action="register.php" enctype="multipart/form-data">

        <div class="tab-pane fade show active" id="create-account">

            <div id="ProcesBar" class="row p-4">
                <div class="col bg-opacity-50 bg-dark-green shadow-sm"></div>
                <div class="col shadow-sm"></div>
                <div class="col shadow-sm"></div>
            </div>

            <div>
                <h4 class="text-center my-5">Opret konto</h4>
            </div>


            <div class="my-5">
                <label class="py-2" for="fullName">Dit navn</label>
                <input class="form-control input-text border-0 shadow-sm" type="text" name="data[fullName]" id="fullName" placeholder="Angiv dit for- og efternavn" value="">
            </div>

            <div class="my-5">
                <label class="py-2" for="dateOfBirth">Din fødselsdag</label>
                <input class="form-control input-text border-0 shadow-sm" type="date" name="data[dateOfBirth]" id="dateOfBirth" placeholder="Angiv din fødselsdag" value="">
            </div>

            <div class="my-5">
                <label class="py-2" for="email">Din e-mail</label>
                <input class="form-control input-text border-0 shadow-sm" type="email" name="data[email]" id="email" placeholder="Indtast din e-mail" value="">
            </div>

            <div class="my-5">
                <label class="py-2" for="password">Adgangskode</label>
                <input class="form-control input-text border-0 shadow-sm" type="text" name="data[password]" id="password" placeholder="Indtast en adgangskode" value="">
            </div>

            <div class="my-5">
                <label class="py-2" for="password">Bekræft adgangskode</label>
                <input class="form-control input-text border-0 shadow-sm" type="text" name="data[password]" id="password" placeholder="Indtast din adgangskode igen for at bekræfte" value="">
            </div>

            <div class="d-flex justify-content-between my-3" role="tablist">

                <a class="btn shadow-sm" href="index.php">Tilbage</a>
                <button class="btn shadow-sm" type="button" onclick="showNextTab()">Videre</button>
            </div>

        </div>

        <div class="tab-pane fade" id="create-user">

            <div id="ProcesBar" class="row p-4">
                <div class="col bg-dark-green shadow-sm"></div>
                <div class="col bg-opacity-50 bg-dark-green shadow-sm"></div>
                <div class="col shadow-sm"></div>
            </div>

            <div>
                <h4 class="text-center my-5">Opret profil</h4>
            </div>

            <div class="my-5">
                <label class="py-2" for="gender">Køn</label>
                <input class="form-control input-text border-0 shadow-sm" type="text" name="data[gender]" id="gender" placeholder="Angiv din kønsidentitet" value="">
            </div>

            <div class="my-5">
                <label class="py-2" for="pronouns">Dine pronominer</label>
                <input class="form-control input-text border-0 shadow-sm" type="text" name="data[pronouns]" id="pronouns" placeholder="Angiv dine pronominer" value="">
            </div>

            <div class="my-5">
                <label class="py-2" for="sexuality">Seksualitet</label>
                <input class="form-control input-text border-0 shadow-sm" type="text" name="data[sexuality]" id="sexuality" placeholder="Indtast din seksualitet" value="">
            </div>


            <div class="my-5">
                <div>
                     <label class="py-2">Hvad søger du?
                         <span class="label-subtitle">
                             Nye relationer eller forhold
                         </span>
                     </label>
                </div>

                <div>
                    <input class="form-check-input" type="checkbox" name="data[lookingForFriendship]" value="true" id="lookingForFriendship">
                    <label class="form-check-label" for="lookingForFriendship">Relationer</label>
                </div>

                <div>
                    <input class="form-check-input" type="checkbox" name="data[lookingForRelationship]" value="true" id="lookingForRelationship">
                    <label class="form-check-label" for="lookingForRelationship">Forhold</label>
                </div>
            </div>


            <div class="my-5">
                <label class="py-2" for="myValues">Dine værdier?
                    <span class="label-subtitle">
                             Du kan vælge flere værdier
                    </span>
                </label>

                <select class="form-select input-text border-0 shadow-sm" multiple name="data[myValues][]" id="myValues">
                    <option value="1">Kommunikation</option>
                    <option value="2">Familie og forpligtigelse</option>
                    <option value="3">Ambitioner og mål</option>
                    <option value="4">Sjov og humor</option>
                    <option value="5">Ærlighed</option>
                    <option value="6">Eventyr og oplevelser</option>
                    <option value="7">Empati og medfølelse</option>
                    <option value="8">Tolerance og ansvarlighed</option>
                    <option value="9">Mod</option>
                    <option value="10">Passion</option>
                </select>
            </div>

            <div class="my-5">
                <label class="py-2" for="preferedValues">Hvilke værdier søger du
                    i en relation?
                    <span class="label-subtitle">
                             Du kan vælge flere værdier
                    </span>
                </label>

                <select class="form-select input-text border-0 shadow-sm" multiple name="data[preferedValues][]" id="preferedValues">
                    <option value="1">Kommunikation</option>
                    <option value="2">Familie og forpligtigelse</option>
                    <option value="3">Ambitioner og mål</option>
                    <option value="4">Sjov og humor</option>
                    <option value="5">Ærlighed</option>
                    <option value="6">Eventyr og oplevelser</option>
                    <option value="7">Empati og medfølelse</option>
                    <option value="8">Tolerance og ansvarlighed</option>
                    <option value="9">Mod</option>
                    <option value="10">Passion</option>
                </select>
            </div>



            <div class="my-5">
                <label class="py-2" for="description">Beskrivelse</label>
                <input class="form-control input-text border-0 shadow-sm" type="text" name="data[description]" id="description" placeholder="Indsæt en kort beskrivelse om dig sekv" value="">
            </div>

            <div class="my-5">
                <label class="py-2" for="profileImage">Profilbillede</label>
                <input class="form-control input-text border-0 shadow-sm" type="file" name="profileImage" id="profileImage" placeholder="" value="">
            </div>

            <div class="d-flex justify-content-between my-3" role="tablist">


                <button class="btn shadow-sm" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn shadow-sm" type="button" onclick="showNextTab()">Videre</button>
            </div>

        </div>

        <div class="tab-pane fade" id="create-quiz">

            <div id="ProcesBar" class="row p-4">
                <div class="col bg-dark-green shadow-sm"></div>
                <div class="col bg-dark-green shadow-sm"></div>
                <div class="col bg-opacity-50 bg-dark-green shadow-sm"></div>
            </div>

            <div>
                <h4 class="text-center my-5">Opret en quiz om dig</h4>
            </div>

            <div class="my-5">
                <label class="py-2" for="question1">Har du prøvet at deltage i en ekstrem sport eller aktivitet?

                </label>

                <select class="form-select input-text border-0 shadow-sm" name="data[question1]" id="question1">
                    <option>Angiv dit svar</option>
                    <option>Ja</option>
                    <option>Nej</option>
                </select>
            </div>

            <div class="my-5">
                <label class="py-2" for="question2">Har du nogensinde holdt en fest, hvor du var den sidste, der gik i seng?

                </label>

                <select class="form-select input-text border-0 shadow-sm" name="data[question2]" id="question2">
                    <option>Angiv dit svar</option>
                    <option>Ja</option>
                    <option>Nej</option>
                </select>
            </div>

            <div class="my-5">
                <label class="py-2" for="question3">Har du nogensinde taget en spontan rejse uden at have planlagt noget på forhånd?</label>

                <select class="form-select input-text border-0 shadow-sm" name="data[question3]" id="question3">
                    <option>Angiv dit svar</option>
                    <option>Ja</option>
                    <option>Nej</option>
                </select>
            </div>

            <div class="my-5">
                <label class="py-2" for="question4">Har du prøvet at lære et nyt sprog på egen hånd?
                </label>

                <select class="form-select input-text border-0 shadow-sm" name="data[question4]" id="question4">
                    <option>Angiv dit svar</option>
                    <option>Ja</option>
                    <option>Nej</option>
                </select>
            </div>

            <div class="my-5">
                <label class="py-2" for="question5">Har du nogensinde deltaget i frivilligt arbejde for en sag, du brænder for?
                </label>

                <select class="form-select input-text border-0 shadow-sm" name="data[question5]" id="question5">
                    <option>Angiv dit svar</option>
                    <option>Ja</option>
                    <option>Nej</option>
                </select>
            </div>

            <div class="d-flex justify-content-between my-3" role="tablist">

                <button class="btn shadow-sm" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn shadow-sm" type="submit">Næste</button>

            </div>

        </div>

    </form>
</main>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/tabNavigation.js"></script>

</body>
</html>

