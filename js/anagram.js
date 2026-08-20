/**
 * @param {string} w1 
 * @param {string} w2 
 */
function isAnagram(w1, w2) {
  const clean = (str) => str.toLowerCase().replaceAll(' ', '').split('').sort().join('');
  return clean(w1) === clean(w2);
}

console.log(isAnagram("listen", "silent"))
console.log(isAnagram("rail safety", "fairy tales"))
console.log(isAnagram("hello", "world"))
console.log(isAnagram("amor", "roma"))
console.log(isAnagram("carro", "coroa"))
