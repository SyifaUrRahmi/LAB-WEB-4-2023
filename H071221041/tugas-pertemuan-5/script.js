let botSums = 0;
let mySums = 0;
let botASCards = 0;
let myASCards = 0;
let cards;
let isCanHit = true;

const buttonStart = document.getElementById("buttonStart");
const buttonHit = document.getElementById("buttonHit");
const buttonHold = document.getElementById("buttonHold");

const mySumsElement = document.querySelector(".mySums");
const myCardsElement = document.querySelector(".my-cards");
const myMoney = document.getElementById("myMoney");

const inputBet = document.getElementById("inputBet");

const botSumsElement = document.querySelector(".botSums");
const botCardsElement = document.querySelector(".bot-cards");
const resultElement = document.getElementById("result");

const generateDeck = () => {
  const cardTypes = ["H", "D", "S", "K"];
  const cardValues = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "K", "Q", "J"];

  cards = cardTypes.flatMap(cardType => cardValues.map(cardValue => `${cardValue}-${cardType}`));
};


const shuffleCards = () => {
  cards.sort(() => Math.random() - 0.5);
};


const errorMessage = "Masukkan jumlah taruhan";
const invalidAmountMessage = "Masukkan jumlah uang yang benar";
const notEnoughMoneyMessage = "Maaf, uang kamu tidak cukup";
const outOfMoneyMessage = "Maaf, uang kamu habis. Tobat mko";

buttonStart.addEventListener("click", () => {
  const inputBetValue = inputBet.value.trim();
  if (!inputBetValue) {
    alert(errorMessage);
    return;
  }

  const betAmount = parseInt(inputBetValue);
  if (isNaN(betAmount) || betAmount <= 0) {
    alert(invalidAmountMessage);
    return;
  }

  if (betAmount > parseInt(myMoney.textContent)) {
    alert(notEnoughMoneyMessage);
    return;
  }

  if (parseInt(myMoney.textContent) <= 0) {
    alert(outOfMoneyMessage);
    return;
  }

  if (buttonStart.textContent === "Coba Lagi") {
    botSums = 0;
    mySums = 0;
    botASCards = 0;
    myASCards = 0;
    isCanHit = true;
    resultElement.textContent = "";
    botSumsElement.textContent = "";

    const myCards = document.querySelector(".my-cards");
    myCards.innerHTML = "";

    const botCards = document.querySelector(".bot-cards");
    botCards.innerHTML = "";

    let cardImg = document.createElement("img");
    cardImg.src = "pic/back.png";
    cardImg.className = "hidden-card";
    botCardsElement.appendChild(cardImg);

    generateDeck();
    shuffleCards();
  }

  buttonHit.disabled = false;
  buttonHold.disabled = false;
  buttonStart.textContent = "Coba Lagi";
  buttonStart.disabled = true;

  const myCards = document.querySelector(".my-cards");
  myCards.innerHTML = "";

  mySums = 0;
  for (let i = 0; i < 2; i++) {
    if (cards.length > 0) {
      let cardImg = document.createElement("img");
      let card = cards.pop();
      cardImg.src = `/pic/${card}.png`;
      mySums += getValueOfCard(card);
      myASCards += checkASCard(card);
      mySumsElement.textContent = mySums;
      myCardsElement.appendChild(cardImg);
    }
  }
  resultElement.textContent = "";
});


buttonHit.addEventListener("click", () => {
  if (!isCanHit) return;
  let cardImg = document.createElement("img");
  let card = cards.pop();
  cardImg.src = `/pic/${card}.png`;
  mySums += getValueOfCard(card);
  myASCards += checkASCard(card);
  mySumsElement.textContent = mySums;
  myCardsElement.appendChild(cardImg);
  if (adjustASValue(mySums, myASCards) > 21) isCanHit = false;
  if (mySums > 21) {
    buttonHit.disabled = true;
    buttonHold.disabled = true;
    buttonStart.disabled = false;
    resultElement.textContent = "kamu kalah xixixi";
    myMoney.textContent -= inputBet.value;
  }
});

buttonHold.addEventListener("click", () => {
  setTimeout(() => {
    document.querySelector(".hidden-card").remove();
  }, 1000);

  const addBotCards = () => {
    setTimeout(() => {
      let cardImg = document.createElement("img");
      let card = cards.pop();
      cardImg.src = `/pic/${card}.png`;
      botSums += getValueOfCard(card);
      botASCards += checkASCard(card);
      botCardsElement.appendChild(cardImg);
      botSumsElement.textContent = botSums;
      if (botSums < 18) {
        addBotCards();
      } else {
        botSums = adjustASValue(botSums, botASCards);
        mySums = adjustASValue(mySums, myASCards);
        isCanHit = false;
        let message = "";
        if (mySums > 21 || mySums % 22 < botSums % 22) {
          message = "kamu kalah xixixi";
          myMoney.textContent -= inputBet.value;
        } else if (botSums > 21 || mySums % 22 > botSums % 22) {
          message = "Selamat kamu menang!";
          myMoney.textContent = parseInt(myMoney.textContent) + parseInt(inputBet.value);
        } else if (mySums === botSums) message = "Seri wkwk";
        resultElement.textContent = message;
        buttonStart.disabled = false;
        buttonHit.disabled = true;
        buttonHold.disabled = true;
      }
    }, 1000);
  };

  addBotCards();
});

function getValueOfCard(card) {
  let cardDetail = card.split("-");
  let value = cardDetail[0];
  return isNaN(value) ? (value === "A" ? 11 : 10) : parseInt(value);
}

function checkASCard(card) {
  if (card[0] === "A") return 1;
  else return 0;
}

function adjustASValue(sums, asCards) {
  for (let i = 0; i < asCards && sums > 21; i++) {
    sums -= 10;
  }
  return sums;
}

window.onload = () => {
  generateDeck();
  shuffleCards();
  buttonHit.disabled = true;
  buttonHold.disabled = true;
};