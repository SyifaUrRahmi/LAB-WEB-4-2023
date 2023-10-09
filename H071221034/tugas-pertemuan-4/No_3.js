let string = prompt("Masukkan kata: ")
let string2 = string.split("")

let new_string = string2.reverse()
new_string = new_string.join("")

if (string == new_string){
    alert(string + " merupakan kata palindrom")
}
else{
    alert(string + " bukan merupakan kata palindrom")
}


// let string = prompt("Masukkan kata: ")

// function isPalindrome(str) {
//     str = str.replace(/\s/g, '').toLowerCase();
//     const reversedStr = str.split('').reverse().join('');
//     return str === reversedStr;
// }
  
// if (isPalindrome(string)) {
//     alert(string + " merupakan kata palindrom");
// } else {
//     alert(string + " bukan merupakan kata palindrom");
// } 