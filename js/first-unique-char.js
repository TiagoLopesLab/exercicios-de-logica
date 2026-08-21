/**
 * @param {string} text
 */
function firstUniqueChar(text) {
  const freq = {};

  for (const char of text) {
    freq[char] = (freq[char] || 0) + 1;
  }

  for (let i = 0; i < text.length; i++) {
    if (freq[text[i]] === 1) {
      return i;
    }
  }

  return -1;
}

console.log(firstUniqueChar("desenvolvedor"))
console.log(firstUniqueChar("javascript"))
console.log(firstUniqueChar("aabbcc"))
