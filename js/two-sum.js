/**
 * @param {number[]} numbers 
 * @param {number} target
 */
function twoSum(numbers, target) {
  const map = new Map();

  for (let pos = 0; pos < numbers.length; pos++) {
    const number = numbers[pos];
    const complement = target - number;

    if (map.has(complement)) {
      return [complement, number];
    }

    map.set(number, pos);
  }
  return [];
}

console.log(twoSum([2, 7, 11, 15], 9))
console.log(twoSum([3, 2, 4], 6))
console.log(twoSum([3, 3], 6))
