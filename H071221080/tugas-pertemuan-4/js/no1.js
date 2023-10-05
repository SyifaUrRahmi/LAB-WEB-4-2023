// No. 1 - Pow / Pangkat Bilangan
const num1 = parseInt(prompt("Masukkan angka 1: "));
let num2 = parseInt(prompt("Masukkan angka 2: "));

let result = 1;
while (num2 > 0) {
  result *= num1;
  num2--;
}
console.log(result);
