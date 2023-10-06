// No. 3 - Palindrom
const text = prompt("Masukkan text: ");
const reverseText = text.split("").reverse().join("");
console.log(reverseText);

if (text === reverseText) console.log("Palindrom");
else console.log("Bukan Palindrom");
