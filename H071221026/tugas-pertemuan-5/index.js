let comCardEl = document.getElementsByClassName("bot-card")[0];
let comSumEl = document.getElementsByClassName("comSums")[0];

let playerCardEl = document.getElementsByClassName("player-card")[0];
let playerSumEl = document.getElementsByClassName("playerSums")[0];
let playerMoney = document.getElementsByClassName("player-Money")[0];
let inputMoney = document.getElementById("inputUang")

let hasil = document.getElementById("hasil");

let startBut = document.getElementById("btn-start")
let takeBut = document.getElementById("btn-take")
let holdBut = document.getElementById("btn-hold")

let emots = document.getElementsByClassName("emot")[0];

let playerSum = 0;
let comSum = 0;

let comASCard = 0;
let playerASCard = 0;

let cards;
let bisaTambah = true;

let emotConst = document.createElement("img");

function cardsBuilder() {
    let cardTypes = ["H", "B", "S", "K"];
    let cardValues = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"]
    cards = [];

    for (let i = 0; i < cardTypes.length; i++) {
        for (let j = 0; j < cardValues.length; j++) {
            cards.push(cardValues[j] + "-" + cardTypes[i]);
        }
    }
}

function acakkartu() {
    for (let i = 0; i < cards.length; i++) {
        let randomNum = Math.floor(Math.random() * cards.length);
        let temp = cards[i];
        cards[i] = cards[randomNum];
        cards[randomNum] = temp;
    }
}

function getValueOfCard(card) {
    let cardDetail = card.split("-");
    let value = cardDetail[0];

    if (isNaN(value)) {
        if (value == "A") {
        return 11
        } else {
        return 10
        }
    }

    return parseInt(value);
}

function checkASCard(card) {
    if (card[0] == "A") {
        return 1;
    }else {
        return 0;
    }
}

function reduceASCardValue(jumlah, asCards) {
    while (jumlah > 21 && asCards > 0) {
        jumlah -= 10;
        asCards -= 1;
    }
    return jumlah;
}

window.onload = () => {
    cardsBuilder();
    acakkartu();
    takeBut.setAttribute("disabled", true);
    holdBut.setAttribute("disabled", true);
};

startBut.addEventListener("click", function () {
    let uangs = parseInt(playerMoney.textContent);
    let bet = inputMoney.value
    if (inputMoney.value == '') {
        alert("Masukkan Taruhan Dulu Broww")
    }else if(bet>uangs){
        alert("Uang tidak mencukupi")
    }else {
        if (startBut.textContent === "Try Again") {
            comSum = 0;
            playerSum = 0;
            comASCard = 0;
            playerASCard = 0;
            bisaTambah = true;
            
            hasil.textContent = "";

            const allCardsImage = document.querySelectorAll("img");
            for (let i = 0; i < allCardsImage.length; i++) {
                allCardsImage[i].remove();
            }
    
            cardsBuilder();
            acakkartu();
        }
        
        playerMoney.textContent -= inputMoney.value;
        takeBut.disabled = false;
        holdBut.disabled = false;
        startBut.setAttribute("disabled", true);
    
        for (let i = 0; i < 2; i++) {
            let cardImg = document.createElement("img");
            let card = cards.pop();
            cardImg.src = `/images/cards/${card}.png`;
            playerSum += getValueOfCard(card);
            playerASCard += checkASCard(card);
            playerSumEl.textContent = playerSum;
            playerCardEl.append(cardImg);
        }
    }
});

takeBut.addEventListener("click", function () {
    if (!bisaTambah){
        return;
    }

    let cardImg = document.createElement("img");
    let card = cards.pop();
    cardImg.src = `/images/cards/${card}.png`;
    playerSum += getValueOfCard(card);
    playerASCard += checkASCard(card);
    playerSumEl.textContent = playerSum;
    playerCardEl.append(cardImg);

    if (reduceASCardValue(playerSum, playerASCard) > 21) {
        bisaTambah = false
    }

    if (playerSum > 21) {
        takeBut.disabled = true;
        holdBut.disabled = true;
        startBut.disabled = false;
        startBut.textContent = "Try Again";
        hasil.textContent = "YOUU LOSEE (TOBAT HEYY, UANG HARAM SEMUAA ITU)";
        inputMoney.value = ""
        hasil.style.color= "black";
        hasil.style.fontWeight= 600
        emotConst.src= "images/gif/6MSj.gif"
        emots.append(emotConst)
    }
})

holdBut.addEventListener("click", function(){
    const comCardPlus = () => {
    setTimeout(() => {
        let cardImg = document.createElement("img");
        let card = cards.pop();
        cardImg.src = `/images/cards/${card}.png`;
        comSum += getValueOfCard(card);
        comASCard += checkASCard(card);
        comCardEl.append(cardImg);
        comSumEl.textContent = comSum;

        if (comSum < 19) {
        comCardPlus();
        } else {
        comSum = reduceASCardValue(comSum, comASCard);
        playerSum = reduceASCardValue(playerSum, playerASCard);
        bisaTambah = false;

        let message = "";
        if (playerSum > 21 || playerSum % 22 < comSum % 22) {
            message = "YOUU LOSEE (TOBAT HEYY, UANG HARAM SEMUAA ITU)";
            inputMoney.value = ""
            hasil.style.color= "black";
            hasil.style.fontWeight= 600
            emotConst.src= "images/gif/6MSj.gif"
        } else if (comSum > 21 || playerSum % 22 > comSum % 22) {
            message = "YOUU WINNN (TOBAT BLOK BANGKRUT ANTUM)";
            hasil.style.color= "yellow";
            var uang = parseInt(playerMoney.textContent);
            let keuntungan = inputMoney.value * 2
            playerMoney.textContent = uang + keuntungan;
            emotConst.src= "images/gif/Be.gif"
        } else if (playerSum === comSum) {
            message = "SERI";
            hasil.style.color= "grey";
            hasil.style.fontWeight= 600
            inputMoney.value = ""
            emotConst.src= "images/gif/7CVM.gif"
        }

        emots.append(emotConst)
        hasil.textContent = message;
        inputMoney.value = ""
        startBut.textContent = "Try Again";
        startBut.disabled = false;
        takeBut.disabled = true;
        holdBut.disabled = true;
        }
    }, 1000);
    };

    comCardPlus();
})
