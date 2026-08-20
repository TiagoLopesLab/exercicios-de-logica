/**
 * @param {number[]} numbers 
 */
function moveZeros(numbers) {
  const nonZeroArray = []
  const zeroArray = []

  numbers.forEach(number => {
    if (typeof number !== 'number') {
      throw new Error('All the items must be of type number')
    }

    if (number === 0) {
      zeroArray.push(0)
    } else {
      nonZeroArray.push(number)
    }
  })

  return [...nonZeroArray, ...zeroArray]
}

console.log(moveZeros([0, 1, 0, 3, 12]))
console.log(moveZeros([0, 0, 5, 0, 9, 8]))
console.log(moveZeros([2, 4, 6]))
