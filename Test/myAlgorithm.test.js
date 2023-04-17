const myAlgorithm = require('./myAlgorithm');
const { test } = require('jest');
test('myAlgorithm should return the correct result for a given input', () => {
  expect(myAlgorithm([1, 2, 3])).toEqual(6);
});
