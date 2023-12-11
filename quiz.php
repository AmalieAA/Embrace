<?php
require "settings/init.php";


$sql = "SELECT * FROM user WHERE userId = " . $_GET["connectedUser"];

$connectedUser = $db->sql($sql)[0];
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Quiz</title>

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

<main role="main" class="container-fluid">

    <div id="QuizTabs" class="tab-content">
        <div class="tab-pane show active" id="Question1" data-question-correct="<?php echo $connectedUser->question1 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3 rounded-3 border border-dark-green">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question text-dark-green"></i>
                </div>

                Har du prøvet at deltage i en ekstrem sport eller aktivitet?
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question1?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question1?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-evenly p-3 pt-4">
                <div class="btn-rounded no-button">
                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    Nej
                </div>
                <div class="btn-rounded yes-button">

                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                    Ja
                </div>

                <div class="btn-rounded quiz-navigation-btn">
                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showPreviousTab()">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    Tilbage
                </div>
                <div class="btn-rounded quiz-navigation-btn">

                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showNextTab()">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    Videre
                </div>

            </div>
        </div>

        <div class="tab-pane" id="Question2" data-question-correct="<?php echo $connectedUser->question2 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3 rounded-3 border border-dark-green">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question text-dark-green"></i>
                </div>

                Har du nogensinde holdt en fest, hvor du var den sidste, der gik i seng?
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question2?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question2?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-evenly p-3 pt-4">
                <div class="btn-rounded no-button">
                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    Nej
                </div>
                <div class="btn-rounded yes-button">

                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                    Ja
                </div>

                <div class="btn-rounded quiz-navigation-btn">
                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showPreviousTab()">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    Tilbage
                </div>
                <div class="btn-rounded quiz-navigation-btn">

                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showNextTab()">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    Videre
                </div>

            </div>
        </div>

        <div class="tab-pane" id="Question3" data-question-correct="<?php echo $connectedUser->question3 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3 rounded-3 border border-dark-green">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question text-dark-green"></i>
                </div>

                Har du nogensinde taget en spontan rejse uden at have planlagt noget på forhånd?</label>
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question3?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question3?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-evenly p-3 pt-4">
                <div class="btn-rounded no-button">
                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    Nej
                </div>
                <div class="btn-rounded yes-button">

                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                    Ja
                </div>

                <div class="btn-rounded quiz-navigation-btn">
                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showPreviousTab()">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    Tilbage
                </div>
                <div class="btn-rounded quiz-navigation-btn">

                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showNextTab()">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    Videre
                </div>

            </div>
        </div>

        <div class="tab-pane" id="Question4" data-question-correct="<?php echo $connectedUser->question4 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3 rounded-3 border border-dark-green">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question text-dark-green"></i>
                </div>

                Har du prøvet at lære et nyt sprog på egen hånd?
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question4?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question4?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-evenly p-3 pt-4">
                <div class="btn-rounded no-button">
                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    Nej
                </div>
                <div class="btn-rounded yes-button">

                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                    Ja
                </div>

                <div class="btn-rounded quiz-navigation-btn">
                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showPreviousTab()">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    Tilbage
                </div>
                <div class="btn-rounded quiz-navigation-btn">

                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showNextTab()">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    Videre
                </div>

            </div>
        </div>

        <div class="tab-pane" id="Question5" data-question-correct="<?php echo $connectedUser->question5 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3 rounded-3 border border-dark-green">

                <div class="question-icon my-5">
                    <i class="fa-solid fa-question text-dark-green"></i>
                </div>

                Har du nogensinde deltaget i frivilligt arbejde for en sag, du brænder for?
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question5?> på denne.
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question5?> på denne.
                </div>
            </div>


            <div class="d-flex justify-content-evenly p-3 pt-4">
                <div class="btn-rounded no-button">
                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    Nej
                </div>
                <div class="btn-rounded yes-button">

                    <button class="btn btn-dark-green shadow-sm" type="button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                    Ja
                </div>

                <div class="btn-rounded quiz-navigation-btn">
                    <button class="btn btn-dark-green shadow-sm" type="button" onclick="showPreviousTab()">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    Tilbage
                </div>
                <div class="btn-rounded quiz-navigation-btn">

                    <a class="btn btn-dark-green shadow-sm" href="quizDone.php">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    Videre
                </div>

            </div>
        </div>

    </div>



</main>

<?php include "includes/bottomNavigation.php";?>

</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/tabNavigation.js"></script>
<script src="js/quiz.js"></script>
</body>
</html>


