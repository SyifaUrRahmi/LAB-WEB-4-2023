// Tanpa menggunakan array.sort 
// buatlah sebuah program yang dimana 
// program tersebut meminta angka sebanyak
// n lalu kemudian akan diatur atau diurutkan 
// mulai dari yang terkecil.
// Contoh n=5 maka akan diberikan 5 angka
// 50 20 1 45 3 lalu program akan mengeluarkan 
// 1 3 20 45 50.
// No4
let list = prompt("Masukkan angka dengan pemisah spasi")
  .split(" ")
  .map((str) => parseInt(str));

for (let i in list) {
  for (let j = 0; j < list.length - i - 1; j++) {
    if (list[j] > list[j + 1]) {
      let temporary = list[j];
      list[j] = list[j + 1];
      list[j + 1] = temporary;
    }
  }
}

alert(list);