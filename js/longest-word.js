/**
 * @param {string} text 
 */
function findLongestWord(text) {
  return text.trim().split(' ').reduce((longest, current) => 
    current.length > longest.length ? current : longest
  , '');
}

console.log(findLongestWord('O rato roeu a roupa'))
console.log(findLongestWord('Eu amo programar em Javascript e PHP'))
console.log(findLongestWord('Ola mundo'))
