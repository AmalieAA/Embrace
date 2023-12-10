<?php
require "settings/init.php";


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


<main role="main" class="container-fluid pt-5">

    <div id="QuizTabs" class="tab-content">
        <div class="tab-pane show active" id="Question1" data-question-correct="<?php echo $connectedUser->question1 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question"></i>
                </div>

                Spørgsmål 1

                <div class="quiz-answer quiz-answer-correct">
                    Korrekt! <?php echo $connectedUser->fullName?> svarede også <?php echo $connectedUser->question1?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    Desværre, <?php echo $connectedUser->fullName?> svarede <?php echo $connectedUser->question1?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-between m-3 my-5" role="tablist">

                <button class="btn shadow-sm no-button" type="button">Nej</button>
                <button class="btn shadow-sm yes-button" type="button">Ja</button>

                <button class="btn shadow-sm quiz-navigation-btn quiz-navigation-btn-back" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn btn-dark-green shadow-sm quiz-navigation-btn quiz-navigation-btn-next" type="button" onclick="showNextTab()">Videre</button>

            </div>
        </div>

        <div class="tab-pane" id="Question2" data-question-correct="<?php echo $connectedUser->question2 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question"></i>
                </div>

                Spørgsmål 2

                <div class="quiz-answer quiz-answer-correct">
                    Korrekt! <?php echo $connectedUser->fullName?> svarede også <?php echo $connectedUser->question2?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    Desværre, <?php echo $connectedUser->fullName?> svarede <?php echo $connectedUser->question2?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-between m-3 my-5 " role="tablist">

                <button class="btn shadow-sm no-button" type="button">Nej</button>
                <button class="btn shadow-sm yes-button" type="button">Ja</button>

                <button class="btn shadow-sm quiz-navigation-btn quiz-navigation-btn-back" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn btn-dark-green shadow-sm quiz-navigation-btn quiz-navigation-btn-next" type="button" onclick="showNextTab()">Videre</button>

            </div>
        </div>

        <div class="tab-pane" id="Question3" data-question-correct="<?php echo $connectedUser->question3 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question"></i>
                </div>

                Spørgsmål 3

                <div class="quiz-answer quiz-answer-correct">
                    Korrekt! <?php echo $connectedUser->fullName?> svarede også <?php echo $connectedUser->question3?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    Desværre, <?php echo $connectedUser->fullName?> svarede <?php echo $connectedUser->question3?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-between m-3 my-5" role="tablist">

                <button class="btn shadow-sm no-button" type="button">Nej</button>
                <button class="btn shadow-sm yes-button" type="button">Ja</button>

                <button class="btn shadow-sm quiz-navigation-btn quiz-navigation-btn-back" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn btn-dark-green shadow-sm quiz-navigation-btn quiz-navigation-btn-next" type="button" onclick="showNextTab()">Videre</button>

            </div>
        </div>

        <div class="tab-pane" id="Question4" data-question-correct="<?php echo $connectedUser->question4 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question"></i>
                </div>

                Spørgsmål 4

                <div class="quiz-answer quiz-answer-correct">
                    Korrekt! <?php echo $connectedUser->fullName?> svarede også <?php echo $connectedUser->question4?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    Desværre, <?php echo $connectedUser->fullName?> svarede <?php echo $connectedUser->question4?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-between m-3 my-5" role="tablist">

                <button class="btn shadow-sm no-button" type="button">Nej</button>
                <button class="btn shadow-sm yes-button" type="button">Ja</button>

                <button class="btn shadow-sm quiz-navigation-btn quiz-navigation-btn-back" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn btn-dark-green shadow-sm quiz-navigation-btn quiz-navigation-btn-next" type="button" onclick="showNextTab()">Videre</button>

            </div>
        </div>

        <div class="tab-pane" id="Question5" data-question-correct="<?php echo $connectedUser->question5 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question"></i>
                </div>

                Spørgsmål 5

                <div class="quiz-answer quiz-answer-correct">
                    Korrekt! <?php echo $connectedUser->fullName?> svarede også <?php echo $connectedUser->question5?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    Desværre, <?php echo $connectedUser->fullName?> svarede <?php echo $connectedUser->question5?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-between m-3 my-5" role="tablist">

                <button class="btn shadow-sm no-button" type="button">Nej</button>
                <button class="btn shadow-sm yes-button" type="button">Ja</button>

                <button class="btn shadow-sm quiz-navigation-btn quiz-navigation-btn-back" type="button" onclick="showPreviousTab()">Tilbage</button>
                <button class="btn btn-dark-green shadow-sm quiz-navigation-btn quiz-navigation-btn-next" type="button" onclick="showNextTab()">Videre</button>

            </div>
        </div>

    </div>



</main>

<?php include "includes/bottomNavigation.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/tabNavigation.js"></script>
<script src="js/quiz.js"></script>
</body>
</html>


