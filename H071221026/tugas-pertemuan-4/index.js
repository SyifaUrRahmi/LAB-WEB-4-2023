// nomor 1
// let angka = parseInt(prompt("Masukkan Angka : "))
// let pangkat = parseInt(prompt("Masukkan pangkat : "))
// let hasil =1
// if (pangkat>0) {
//     for (let i = 0; i < pangkat; i++) {
//         hasil *= angka;
//     }
//     console.log(hasil);
// } else if (pangkat=0) {
//     console.log(hasil);
// } else {
//     for (let i = 0; i < pangkat; i++) {
//         hasil *= angka;
//     }
//     console.log(1/hasil);
// }

//nomor 2
// const kata = prompt("Masukkan Kata : ");
// const n = parseInt(prompt("Masukkan angka : "));
// const hurufAZ = "abcdefghijklmnopqrstuvwxyz";

// let hasil = "";

// for (let i = 0; i < kata.length; i++) {
//     let karakter = kata[i];

//     if (/[a-zA-Z]/.test(karakter)) {
//         let hurufIndeks = hurufAZ.indexOf(karakter.toLowerCase());
//         if (hurufIndeks !== -1) {
//             let geserIndeks = (hurufIndeks + n) % 26;
//             if (geserIndeks < 0) {
//                 geserIndeks += 26;
//             }
//             let hurufGeser = hurufAZ[geserIndeks];

//             if (karakter === karakter.toUpperCase()) {
//                 hurufGeser = hurufGeser.toUpperCase();
//             }

//             karakter = hurufGeser;
//         }
//     }

//     hasil += karakter;
// }
// console.log(hasil);

//nomor3
// const numberStr = prompt("Masukkan Text : ")
// const NumArray = numberStr.split('');

// if (NumArray.length == 1) {
//     console.log(`${numberStr} adalah Text palindrome`);
// } else {
//     const reversedNumArray = NumArray.reverse();
//     const reversedNumberStr = reversedNumArray.join('');

//     if (numberStr === reversedNumberStr) {
//         console.log(`${numberStr} adalah Text palindrome`);
//     } else {
//         console.log(`${numberStr} bukan Text palindrome`);
//     }
// }

//Nomor 4
// let numbers = []
// const n = parseInt(prompt("Masukkan nilai n : "))
// for (let i = 0; i < n; i++) {
//     let number = parseInt(prompt(`Masukkan angka ke ${i} :`))
//     numbers.push(number);
// }

// const panjang = numbers.length
// let tukar;

// do {
//     tukar= false;
//     for (let i = 0; i < panjang-1 ; i++) {
//         if (numbers[i]>numbers[i+1]) {
//         let balik = numbers[i]
//         numbers[i] = numbers[i+1]
//         numbers[i+1] = balik
//         tukar = true
//         }
//     }
// } while (tukar);

// console.log(numbers.join(', '));

//nomor 5
let angka = parseInt(prompt("Masukkan Angka : "))

if (angka === 0) {
    console.log(`dalam bentuk binary adalah 0`);
}else {
    let binary = ''
    while (angka>0){
        let sisa = angka%2
        binary = sisa+binary
        angka = Math.floor(angka/2)
    }
    console.log(`dalam bentuk binary adalah ${binary}`);
}