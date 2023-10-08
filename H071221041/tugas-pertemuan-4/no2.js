//no2
let karakter = prompt("Masukkan inputan : ").split("");
let geser = parseInt(prompt("Masukkan Nilai n : "))

let new_karakter = "" //menyimpan hasil

for (let i of karakter) {
    if (/[a-z]/.test(i)) {
        new_karakter += String.fromCharCode((((i.charCodeAt(0) + geser - 97) % 26) + 97))
    } else if (/[A-Z]/.test(i)) {
        new_karakter += String.fromCharCode((((i.charCodeAt(0) + geser - 65) % 26) + 65))
    } else {
        new_karakter += " "
    }
}
alert(new_karakter);