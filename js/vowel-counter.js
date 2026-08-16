/**
 * @param {string} content 
 */
function vowelCounter(content) {
  return (content.match(/[aeiou]/gi) || []).length
}

console.log(vowelCounter('javascript'))
console.log(vowelCounter('PHP e incrivel'))
console.log(vowelCounter('HLL WRLD'))