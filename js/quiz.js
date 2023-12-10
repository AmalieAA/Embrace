document.querySelectorAll(".no-button").forEach( button => {
    button.addEventListener("click", () => chooseAnswer("nej"));
});

document.querySelectorAll(".yes-button").forEach( button => {
    button.addEventListener("click", () => chooseAnswer("ja"));
});

function chooseAnswer(answer){

    const activeQuestion = document.querySelector("#QuizTabs .active");

    const correctAnswer = activeQuestion.dataset.questionCorrect;

    if(answer.toLowerCase()==correctAnswer.toLowerCase()){
        activeQuestion.querySelector(".quiz-answer-correct").classList.add("show");
    }
    else {
        activeQuestion.querySelector(".quiz-answer-wrong").classList.add("show");
    }

    activeQuestion.querySelector(".yes-button").classList.add("hide");
    activeQuestion.querySelector(".no-button").classList.add("hide");

    activeQuestion.querySelectorAll(".quiz-navigation-btn").forEach(button => {
        button.classList.add("show")
    });
}