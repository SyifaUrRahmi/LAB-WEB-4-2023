let n = parseInt(prompt("Masukkan angka: "))

let n_array = []

for (let i=1; i <= n; i++){
    let angka_ke = parseInt(prompt("Masukkan angka ke-" + i))
    n_array.push(angka_ke)
}

for (let i = 0; i < n_array.length; i++){
    for(let j = 0; j < n_array.length-i-1; j++){
        if(n_array[j] > n_array[j + 1]){
            let temp = n_array[j]
            console.log(temp)
            n_array[j] = n_array[j + 1]
            n_array[j + 1] = temp
        }
    }
}

alert("Angka yang telah diurutkan: " + n_array.join(" "))