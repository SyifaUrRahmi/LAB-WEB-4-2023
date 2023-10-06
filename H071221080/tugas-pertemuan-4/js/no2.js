// No. 2 - Chiper Text
const chipperTextTester = (text, shift) => {
  let chipperText = "";

  for (let i = 0; i < text.length; i++) {
    let char = text[i];

    if (/[a-zA-Z]/.test(char)) {
      const isUpperCase = char === char.toUpperCase();

      let charCode = char.charCodeAt(0);
      // console.log({ charCode });
      charCode =
        ((charCode - (isUpperCase ? 65 : 97) + shift) % 26) +
        (isUpperCase ? 65 : 97);

      char = String.fromCharCode(charCode);
      // console.log({ char });
    }
    chipperText += char;
  }

  return chipperText;
};

const text = prompt("Masukkan text: ");
const shift = parseInt(prompt("Masukkan shift: "));

const chipperText = chipperTextTester(text, shift);
console.log({ chipperText });
