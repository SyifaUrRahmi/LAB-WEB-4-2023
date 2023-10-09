// let a = parseInt(prompt("Masukkan angka ke-1: "))
// let b = parseInt(prompt("Masukkan angka ke-2: "))

// let c = a**b

// alert("Hasil dari " + a + " pangkat " + b + " = " + c)

//Cara 2
let a = parseInt(prompt("Masukkan angka ke-1: "))
let b = parseInt(prompt("Masukkan angka ke-2: "))

let c = 1
for(i = 0; i < b; i++){
    c = c*a
}

alert("Hasil dari " + a + " pangkat " + b + " = " + c)