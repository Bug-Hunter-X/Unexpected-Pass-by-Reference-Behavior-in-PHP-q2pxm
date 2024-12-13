# PHP Pass-by-Reference Bug

This repository demonstrates a common, yet subtle, error in PHP related to pass-by-reference. The `doubleIt` function modifies the original variable passed as an argument, which might lead to unexpected results if you aren't aware of this behavior.

## The Bug
The `bug.php` file showcases the issue.  Observe how the variable `$number` is modified directly within the `doubleIt` function, even after being returned from the function.  This may be confusing if you were expecting a copy of the variable to be modified and not the original one.

## The Solution
The `bugSolution.php` shows a way to avoid this confusion and achieve more predictable outcomes by clarifying the intention. The solution avoids directly modifying the passed variable. 

## How to reproduce:
1.  Clone this repository.
2. Run `bug.php` and `bugSolution.php` using a PHP interpreter.
3. Compare the outputs to see how pass by reference affects the original variable and understand the recommended solution.
