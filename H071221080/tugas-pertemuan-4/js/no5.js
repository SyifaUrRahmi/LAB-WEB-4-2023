// No. 5 - Number to Binary
const decimalToBinary = (decimalNumber) => {
  if (!Number.isInteger(decimalNumber) || decimalNumber < 0) {
    return "Input harus berupa angka bulat positif.";
  }

  if (decimalNumber === 0) {
    return "0";
  }

  let binaryResult = "";

  while (decimalNumber > 0) {
    const result = decimalNumber % 2;
    console.log({ result });
    binaryResult = result.toString() + binaryResult;
    decimalNumber = Math.floor(decimalNumber / 2);
    console.log({ binaryResult, decimalNumber });
  }

  return binaryResult;
};

const inputNumber = parseInt(prompt("Masukkan angka desimal:"));

const binaryRepresentation = decimalToBinary(inputNumber);
console.log(
  `Representasi biner dari ${inputNumber} adalah: ${binaryRepresentation}`
);
