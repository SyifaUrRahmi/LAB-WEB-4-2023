let kata = prompt("Masukkan kata: ")
let n = parseInt(prompt("Masukkan nilai n: "))

let final = []
for (let i=0; i<kata.length; i++){
    if(Number.isNaN(n)){
        alert("Nilai n harus berupa angka")
        break
    }
    let charcode = kata[i].charCodeAt(0)
    if(charcode < 65){
        prompt("Masukkan string: ")
        break
    }
    else if(charcode > 122){
        prompt("Masukkan string: ")
        break
    }
    else if(charcode > 90 && charcode < 97){
        prompt("Masukkan string: ")
        break
    }
    let code = charcode += n
    if(code > 122){
        code -= 26
    }
    else if(code > 90 && code < 97){
        code -= 26
    }
    let shifted_char = String.fromCharCode(code)
    final.push(shifted_char)
}

final = final.join("")
alert(final)