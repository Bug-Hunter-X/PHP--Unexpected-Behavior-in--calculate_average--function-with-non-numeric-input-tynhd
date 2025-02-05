# PHP: Unexpected Behavior in `calculate_average` function with non-numeric input

This repository demonstrates a subtle bug in a simple PHP function designed to calculate the average of an array of numbers.  The function fails gracefully when encountering non-numeric values, leading to unexpected results or errors.

The `bug.php` file contains the buggy code. The `bugSolution.php` file demonstrates the improved, more robust version.

## Bug Description

The `calculate_average` function correctly computes the average when given a numeric array. However, if the input array contains any non-numeric values, `array_sum` will either fail completely or incorrectly handle the values and the division may result in unexpected behavior, division by zero errors, or incorrect average calculation. 

## Solution

The solution involves adding input validation to check if all elements of the array are numeric before performing the calculation.  Error handling is also implemented to provide a more informative response to the user in case of invalid input.