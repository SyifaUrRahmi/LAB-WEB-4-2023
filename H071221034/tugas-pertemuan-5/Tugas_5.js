let aiSum = 0;
let urSum = 0;

let aiASCards = 0;
let urASCards = 0;

let cards;
let isCanHit = true;

const startButton = document.getElementById("startbtn");
const hitButton = document.getElementById("hitbtn");
const holdButton = document.getElementById("holdbtn");

const urSumsElement = document.getElementById("ursum");
const urCardsElement = document.getElementById("urcard");
const urMoney = document.getElementById("money");
let amount = 10000;
urMoney.innerHTML = "Your Money : Rp. " + amount;
const inputMoney = document.getElementById("bet");

const aiSumsElement = document.getElementById("aisum");
const aiCardsElement = document.getElementById("aicard");

const resultElement = document.getElementById("result");

window.onload = () => {
  buildUserCards();
  shuffleCards();
  hitButton.setAttribute("disabled", true);
  holdButton.setAttribute("disabled", true);
};

function buildUserCards() {
  let cardTypes = ["C", "D", "H", "S"];
  let cardValues = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
  cards = [];

  for (let i = 0; i < cardTypes.length; i++) {
    for (let j = 0; j < cardValues.length; j++) {
      cards.push(cardValues[j] + "-" + cardTypes[i]);
    }
  }
}

function shuffleCards() {
  for (let i = 0; i < cards.length; i++) {
    let randomNum = Math.floor(Math.random() * cards.length);
    let temp = cards[i];
    cards[i] = cards[randomNum];
    cards[randomNum] = temp;
  }
}

startButton.addEventListener("click", function () {
  aiSumsElement.innerHTML = 'Score : ';
  if (startButton.textContent === "Try Again") {
    aiSum = 0;
    urSum = 0;
    aiASCards = 0;
    urASCards = 0;
    isCanHit = true;

    const allCardsImage = document.querySelectorAll("img");
    for (let i = 0; i < allCardsImage.length; i++) {
      allCardsImage[i].remove();
    }

    urSumsElement.innerHTML = 'Score : ';
    
    resultElement.textContent = "";

    buildUserCards();
    shuffleCards();
  }

  if (inputMoney.value === "" ) {
    alert("PLEASE ENTER YOUR BET!!");
    return;
  }else if(parseInt(inputMoney.value) <= 0) {
    alert("YOUR INPUT IS NOT VALID!!")
    return;
  }else if(parseInt(inputMoney.value) > amount){
    alert("YOUR BET IS MORE THAN YOUR MONEY!!")
    return;
  }

  hitButton.disabled = false;
  holdButton.disabled = false;
  startButton.textContent = "Try Again";
  startButton.setAttribute("disabled", true);

  for (let i = 0; i < 2; i++) {
    let cardImg = document.createElement("img");
    let card = cards.pop();
    cardImg.src = `Assets/cards/${card}.png`;
    urSum += getValueOfCard(card);
    urASCards += checkASCard(card);
    urSumsElement.innerHTML = 'Score : ' + urSum;
    urCardsElement.append(cardImg);
  }
});

hitButton.addEventListener("click", function () {
  if (isCanHit = false) return;
  let cardImg = document.createElement("img");
  let card = cards.pop();
  cardImg.src = `./Assets/cards/${card}.png`;
  urSum += getValueOfCard(card);
  urASCards += checkASCard(card);
  urSumsElement.innerHTML = 'Score : ' + urSum;
  urCardsElement.append(cardImg);

  if (reduceASCardValue(urSum, urASCards) > 21) isCanHit = false;

  if (urSum > 21) {
    hitButton.disabled = true;
    holdButton.disabled = true;
    startButton.disabled = false;
    resultElement.textContent = "YOU LOSE!!";
    amount -= inputMoney.value;
    urMoney.innerHTML = "Your Money : Rp. " + amount;
  }
});

holdButton.addEventListener("click", function () {
  const addAICards = () => {
    setTimeout(() => {
      let cardImg = document.createElement("img");
      let card = cards.pop();
      cardImg.src = `./Assets/cards/${card}.png`;
      aiSum += getValueOfCard(card);
      aiASCards += checkASCard(card);
      aiCardsElement.append(cardImg);
      aiSumsElement.innerHTML = 'Score : ' + aiSum;

      if (aiSum <= urSum) {
        addAICards();
      } else {
        aiSum = reduceASCardValue(aiSum, aiASCards);
        urSum = reduceASCardValue(urSum, urASCards);
        isCanHit = false;

        if (urSum > 21 || urSum % 22 < aiSum % 22) {
          resultElement.innerHTML = "YOU LOSE!!!";
          amount -= parseInt(inputMoney.value);
          urMoney.innerHTML = "Your Money : Rp. " + amount;
        } else if (aiSum > 21 || urSum % 22 > aiSum % 22) {
          resultElement.innerHTML = "YOU WIN!!";
          amount += parseInt(inputMoney.value);
          urMoney.innerHTML = "Your Money : Rp. " + amount;
        } else if (urSum === aiSum) {
          resultElement.innerHTML = "OUCH, IT'S A DRAW!!";
          urMoney.innerHTML = "Your Money : Rp. " + amount;
        };

        startButton.disabled = false;
        hitButton.disabled = true;
        holdButton.disabled = true;
      }
    }, 1000);
  };

  addAICards();
});

function getValueOfCard(card) {
  let cardDetail = card.split("-");
  let value = cardDetail[0];

  if (isNaN(value)) {
    // Kartu AS
    if (value === "A") return 11;
    // Kartu K, Q, J
    else return 10;
  }

  return parseInt(value);
}

function checkASCard(card) {
  if (card[0] === "A") return 1;
  else return 0;
}

function reduceASCardValue(sums, asCards) {
  while (sums > 21 && asCards > 0) {
    sums -= 10;
    asCards -= 1;
  }
  return sums;
}