/**
 * @param {number[]} numbers
 */
function sumEvenNumbers(numbers) {
  return numbers.reduce((acc, number) => {
    return number % 2 === 0 ? number + acc : acc
  }, 0)
}

console.log(sumEvenNumbers([1, 2, 3, 4, 5]))
console.log(sumEvenNumbers([10, 15, 20, 25]))
console.log(sumEvenNumbers([1, 3, 5, 7]))
