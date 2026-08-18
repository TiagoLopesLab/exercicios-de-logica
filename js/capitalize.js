/**
 * @param {string} text 
 */
function capitalize(text) {
  return text.trim().split(' ')
    .map(word => {
        if (!word) return '';
        return word[0].toUpperCase() + word.slice(1).toLowerCase();
    })
    .join(' ');
}

console.log(capitalize('ola mundo'))
console.log(capitalize('jAVAsCrIpT e leGal'))
console.log(capitalize('PHP'))
