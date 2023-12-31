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

    <div id="QuizTabs" class="tab-content">
        <div class="tab-pane show active" id="Question1" data-question-correct="<?php echo $connectedUser->question1 ?>">

            <div class="bg-white shadow-sm text-center m-3 p-3 rounded-3 border border-dark-green">

                <div class="question-icon mb-5">
                    <i class="fa-solid fa-person-snowboarding text-dark-green"></i>
                </div>

                <p>
                    Tror du at <?php echo $connectedUser->firstname?> har prøvet at deltage i en ekstrem sport eller aktivitet?
                </p>
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    <p>
                        Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question1?> på denne.
                    </p>
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <p>
                        Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question1?> på denne.
                    </p>
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

                <div class="question-icon mb-5">
                    <i class="fa-solid fa-champagne-glasses text-dark-green"></i>
                </div>

                <p>
                    Har <?php echo $connectedUser->firstname?> nogensinde holdt en fest og var den sidste, der gik i seng?
                </p>
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    <p>
                        Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question2?> på denne.
                    </p>
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <p>
                        Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question2?> på denne.
                    </p>
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

                <div class="question-icon mb-5">
                    <i class="fa-solid fa-plane-departure text-dark-green"></i>
                </div>

               <p>
                    Er <?php echo $connectedUser->firstname?> typen der har taget på en spontan rejse uden at have planlagt noget på forhånd?
               </p>
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    <p>
                        Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question3?> på denne.
                    </p>
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <p>
                        Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question3?> på denne.
                    </p>
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

                <div class="question-icon mb-5">
                    <i class="fa-solid fa-hands-asl-interpreting text-dark-green"></i>
                </div>

               <p>
                   Har <?php echo $connectedUser->firstname?> kastet sig ud i at lære et nyt sprog på egen hånd?
               </p>

                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>

                    <p>
                        Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question4?> på denne.
                    </p>
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>

                    <p>
                        Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question4?> på denne.
                    </p>
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

                <div class="question-icon mb-5">
                    <i class="fa-solid fa-handshake-angle text-dark-green"></i>
                </div>

                <p>
                    Har <?php echo $connectedUser->firstname?> nogensinde deltaget i frivilligt arbejde for en sag, som vedkommende brænder for?
                </p>
                <br>
                <br>
                <div class="quiz-answer quiz-answer-correct">
                    <i class="fa-solid fa-circle-check text-dark-green"></i>
                    <p>
                        Korrekt! <?php echo $connectedUser->firstname?> svarede også <?php echo $connectedUser->question5?> på denne.
                    </p>
                </div>
                <div class="quiz-answer quiz-answer-wrong">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <p>
                        Desværre, <?php echo $connectedUser->firstname?> svarede <?php echo $connectedUser->question5?> på denne.
                    </p>
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


