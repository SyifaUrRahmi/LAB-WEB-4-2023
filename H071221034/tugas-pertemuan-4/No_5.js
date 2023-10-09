// let angkaDesimal = parseInt(prompt("Masukkan angka: "))
// let angkaBiner = angkaDesimal.toString(2)

// alert("Angka dalam bentuk biner: " + angkaBiner)

let angkaDesimal = parseInt(prompt("Masukkan angka: "))
let angkaBiner = ""

if(angkaBiner == 0){
    angkaBiner = "0"
}else{
    while(angkaDesimal > 0){
        angkaBiner = (angkaDesimal % 2) + angkaBiner
        angkaDesimal = Math.floor(angkaDesimal / 2)
    }
}

alert("Angka dalam bentuk biner: " + angkaBiner)