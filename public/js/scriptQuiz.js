const question = document.querySelector(".question");
const answers = document.querySelector(".answers");
const spnQtd = document.querySelector(".spnQtd");



const content = document.querySelector(".content");
const contentFinish = document.querySelector(".finish");
const btnRestart = document.querySelector(".finish button");

import questions from "./quiz.js";

let currentIndex = 0;
let questionsCorrect = 0;
let totalPointsValue = 0;

btnRestart.onclick = () => {
  content.style.display = "flex";
  contentFinish.style.display = "none";

  currentIndex = 0;
  questionsCorrect = 0;
  loadQuestion();

  if (totalPointsValue === 0) {
    btnRestart.style.display = "block";
  } else {
    btnRestart.style.display = "none";
  }
};

function nextQuestion(e) {
  if (e.target.getAttribute("data-correct") === "true") {
    questionsCorrect++;
  }

  if (currentIndex < questions.length - 1) {
    currentIndex++;
    loadQuestion();
  } else {
    finish();
  } 
}
function finish() {
    correctCount.textContent = questionsCorrect;
    totalCount.textContent = questions.length;
  
    const score = (questionsCorrect / questions.length) * 100;
    let totalPointsValue;
    let totalPointsClass;
  
    if (score === 100) {
        totalPointsValue = 15;
        totalPointsClass = "green";
      } else if (score >= 70) {
        totalPointsValue = 10;
        totalPointsClass = "orange";
      } else {
        totalPointsValue = 0;
        totalPointsClass = "red";
      }
  
    totalPoints.textContent = `Pontuação ${totalPointsValue}`;
    totalPoints.classList.add(totalPointsClass);
      
    content.style.display = "none";
    contentFinish.style.display = "flex";
    if (totalPointsValue === 0) {
        btnRestart.style.display = "block";
      } else {
        btnRestart.style.display = "none";
      }
  }
  

function loadQuestion() {
    totalPoints.classList.remove("green", "orange", "red");

  spnQtd.innerHTML = `${currentIndex + 1}/${questions.length}`;
  const item = questions[currentIndex];
  answers.innerHTML = "";
  question.innerHTML = item.question;

  item.answers.forEach((answer) => {
    const div = document.createElement("div");

    div.innerHTML = `
    <button class="answer" data-correct="${answer.correct}">
      ${answer.option}
    </button>
    `;

    answers.appendChild(div);
  });

  document.querySelectorAll(".answer").forEach((item) => {
    item.addEventListener("click", nextQuestion);
  });
}

loadQuestion();