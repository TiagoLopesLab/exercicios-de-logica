/**
 * @param {string} text 
 */
function palindromeChecker(text) {
  const cleanText = text.toLowerCase().replaceAll(' ', '');
  const reversedText = cleanText.split('').reverse().join('');

  return cleanText === reversedText;
}

console.log(palindromeChecker('arara'))
console.log(palindromeChecker('A base do teto desaba'))
console.log(palindromeChecker('javascript'))
