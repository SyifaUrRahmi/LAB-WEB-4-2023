// NO1

// function pangkatiteratif (angka, pangkat){
//     // inisialisasi variabel
//     let hasil = 1
//     // loop akan terus berjalan selama i kurang dari pangkat
//     for(let i = 0; i < pangkat; i++){ //setiap iterasi berjalan i bertambah satu
//         //hasil akan dikalikan angka secara berulang ulang sebanyak pangkat
//         hasil *= angka 
//     }
//     //pengembalian nilai
//     return hasil
// }
//     console.log(pangkatiteratif(3, 0))


// // NO2
function caesarCipher(text,s) {
    let result="";
    for (let i = 0; i < text.length; i++)
    {
        //mengakses karakter pada indeks i dan disimpan ke varabel char
        let char = text[i];
        //mengonversi karakter ke kode ASCII 
        let ch = char.charCodeAt();
        //memeriksa huruf untuk huruf kecil
        if (char >= "a" && char <= "z") {
            //melakukan pergeseran pada kode ASCII huruf kecil dan membungkusnya jika pergeseran melewati akhir alfabet
            ch = ((ch-97 + s)% 26)+ 97;
        } else if (char >= "A" && char <= "Z"){
            //melakukan pergeseran pada kode ASCII huruf besar dan membungkusnya jika pergeseran melewati akhir alfabet
            ch = ((ch-65 + s)% 26)+ 65;
        }else {
            console.log("inputan bukan angka")
        }
        //menambahkan karakter yang sudah dienkripsi ke variabel result
        result += String.fromCharCode(ch); //mengonversi kode ASCII yang sudah dienkripsi kembali ke karakter
    }
    return result;
}
console.log(caesarCipher("1bc", 2));






// // NO3

// function isPalindrome(word) {
//     //split mengubah string jadi array karakter
//     //reverse membalikkan elemen dalam array
//     //join menggabungkan array karakter jadi string
//     let word2 = word.split('').reverse().join('')
//     return word === word2;
// }
// let kata = "katak";
// if (isPalindrome(kata)) {
// console.log(kata + " adalah palindrom.");
// } else {
// console.log(kata + " bukan palindrom.");
// }



// // NO4
// function sortNumbers(numbers) {
//     //loop akan jalan selama nilai i kurang dari panjang array dikurangi satu supaya elemen 
//     //terakhir tdk perlu dibndingkan dengan elemen setelahnya
//     for (let i = 0; i < numbers.length - 1; i++) {
//         //perbandingan dari elemen setelah elemen yang sedang diperiksa dalam loop pertama
//         for (let j = i + 1; j < numbers.length; j++) {
//             // Tukar posisi jika angka di indeks j lebih kecil
//             if (numbers[j] < numbers[i]) {
//                 //angkasementara digunakan untuk menyimpan nilai angka di indeks i
//                 let angkasementara = numbers[i];
//                 //numbers[i] diisi dengan nilai di indeks j
//                 numbers[i] = numbers[j];
//                 //numbers[j] diisi dengan nilai yang disimpan di variabel sementara angkasementara
//                 numbers[j] = angkasementara;
//             }
//         }
//     }
//     return numbers;
// }

// let numbers = [5, 2, 9, 1, 5, 6];
// let sortedNumbers = sortNumbers(numbers);
// // join mengurutkan menjadi satu string dengan elemen terpisah oleh koma dan spasi.
// console.log("Angka Terurut: " + sortedNumbers.join(", "));


// // NO5
//konversi inputan string menjadi integer
// number = parseInt(prompt("Masukkan angka: "));
// //mengonversi nilai number menjadi representasi string dalam basis 2 (biner)
// binaryNumber = number.toString(2);
// console.log(binaryNumber);


// let binary = ''
// function konversibiner(decimal) {
//     if (decimal == 0){
//         return 0
//     }else {

//         while (decimal > 0){
//             binary = (decimal % 2) + binary
//             decimal = Math.floor(decimal / 2)
//         }
//     }
// return binary
// }

// console.log(konversibiner(0))