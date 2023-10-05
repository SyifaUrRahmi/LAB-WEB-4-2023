// No. 1 - Pow / Pangkat Bilangan
// const num1 = parseInt(prompt("Masukkan angka 1: "));
// let num2 = parseInt(prompt("Masukkan angka 2: "));
// // const pow = num1 ** num2;
// // console.log(`${num1} pangkat ${num2} adalah ${pow}`);

// let result = 1;
// while (num2 > 0) {
//   result *= num1;
//   num2--;
// }
// console.log(result);

// --------------------------------------------------
// No. 2 - Chiper Text
// const chipperTextTester = (text, shift) => {
//   let chipperText = "";

//   for (let i = 0; i < text.length; i++) {
//     let char = text[i];

//     if (/[a-zA-Z]/.test(char)) {
//       const isUpperCase = char === char.toUpperCase();

//       let charCode = char.charCodeAt(0);
//       // console.log({ charCode });
//       charCode =
//         ((charCode - (isUpperCase ? 65 : 97) + shift) % 26) +
//         (isUpperCase ? 65 : 97);

//       char = String.fromCharCode(charCode);
//       // console.log({ char });
//     }
//     chipperText += char;
//   }

//   return chipperText;
// };

// const text = prompt("Masukkan text: ");
// const shift = parseInt(prompt("Masukkan shift: "));

// const chipperText = chipperTextTester(text, shift);
// console.log({ chipperText });

// --------------------------------------------------
// No. 3 - Palindrom
// const text = prompt("Masukkan text: ");
// const reverseText = text.split("").reverse().join("");
// console.log(reverseText);

// if (text === reverseText) console.log("Palindrom");
// else console.log("Bukan Palindrom");

// --------------------------------------------------
// No. 4 - Array Sort
// const arraySort = (array) => {
//   const n = array.length;

//   for (let i = 1; i < n; i++) {
//     let current = array[i];
//     let j = i - 1;
//     // console.log({ current, j });

//     while (j >= 0 && array[j] > current) {
//       array[j + 1] = array[j];
//       // console.log(array[j + 1]);
//       j--;
//     }

//     array[j + 1] = current;
//   }
// };

// const n = parseInt(prompt("Masukkan jumlah angka:"));
// const numbers = [];

// for (let i = 0; i < n; i++) {
//   const number = parseInt(prompt(`Masukkan angka ke-${i + 1}:`));
//   numbers.push(number);
// }

// arraySort(numbers);

// console.log("Angka yang sudah diurutkan:");
// console.log(numbers.join(" "));

// --------------------------------------------------
// No. 5 - Number to Binary
// const decimalToBinary = (decimalNumber) => {
//   if (!Number.isInteger(decimalNumber) || decimalNumber < 0) {
//     return "Input harus berupa angka bulat positif.";
//   }

//   if (decimalNumber === 0) {
//     return "0";
//   }

//   let binaryResult = "";

//   while (decimalNumber > 0) {
//     const result = decimalNumber % 2;
//     console.log({ result });
//     binaryResult = result.toString() + binaryResult;
//     decimalNumber = Math.floor(decimalNumber / 2);
//     console.log({ binaryResult, decimalNumber });
//   }

//   return binaryResult;
// };

// const inputNumber = parseInt(prompt("Masukkan angka desimal:"));

// const binaryRepresentation = decimalToBinary(inputNumber);
// console.log(
//   `Representasi biner dari ${inputNumber} adalah: ${binaryRepresentation}`
// );
