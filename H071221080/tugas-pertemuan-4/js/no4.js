// No. 4 - Array Sort
const arraySort = (array) => {
  const n = array.length;

  for (let i = 1; i < n; i++) {
    let current = array[i];
    let j = i - 1;
    // console.log({ current, j });

    while (j >= 0 && array[j] > current) {
      array[j + 1] = array[j];
      // console.log(array[j + 1]);
      j--;
    }

    array[j + 1] = current;
  }
};

const n = parseInt(prompt("Masukkan jumlah angka:"));
const numbers = [];

for (let i = 0; i < n; i++) {
  const number = parseInt(prompt(`Masukkan angka ke-${i + 1}:`));
  numbers.push(number);
}

arraySort(numbers);

console.log("Angka yang sudah diurutkan:");
console.log(numbers.join(" "));
