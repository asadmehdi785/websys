Asad Mehdi
Lab #6 - PHP, OOP, and Input Handling

Part 0
- Lab 6 folder served by Apache

Part 1: Object Oriented PHP
- The subclasses are implemented underneath the Addition subclass

Part 2: POST Handling
- POST handling code for other operations is implmeneted underneath the code for the Addition operation

Questions

#1
The abstract parent Operation class is the main class from which all the other subclasses derive from. It contains two protected variables for the two operands, a constructor (which contains a check for non-numeric operands), and two abstract functions, operate() and getEquation(), which are implemented in the subclasses.

The Addition subclass implements the operate() function by returning the sum of $operand_1 and $operand_2. The getEquation() function returns a string showing the two numbers that were added and the result.

The Subtraction subclass implements the operate() function by returning the difference of the two operands, and the getEquation() function returns a string showing the two numbers that were subtracted and the result.

The Multiplication subclass implements the operate() function by returning the product of the two operands, and the getEquation() function returns a string showing the two numbers that were subtracted and the result.

The Division subclass implements the operate() function by      ....    , and the getEquation() function returns a string showing the two numbers that were divided and the result.

The Cube subclass implements the operate() function by returning the cube of the first operand and ignoring the second. The getEquation() function returns a string showing the number that was cubed and the result.

The Factorial subclass implmenets the operate() function by returning the factorial of the first operand and ignoring the second. The getEquation() function returns a string showing the number that the factorial was taken of and the result.

When an operation button has been clicked (let's say for example we want to add two numbers), then we first check if the 'REQUEST_METHOD' of $_SERVER is 'POST', and if it is, then we set the first and second operations to what the user entered. Then, we check if the addition button has been clicked by checking the value of $_POST['add'], and if it has, then we create a new Addition object, and set the two operands. Then, the new object calls its getEquation() method, which in turn calls the operate() function, and the answer is returned and echoed onto the screen.

#2
If we were to use $_GET instead of $_POST, then the main difference would be that the results would be cached, and the parameters would be saved in the browser history. In addition, the application would become less secure, because the data sent is part of the URL for $_GET.

Switching to $_GET would be preferable in this case, since we're not dealing with sensitive data. Since $_GET tends to be slightly faster, this is what we want. $_POST passes the value behind the scenes, while in $_GET it's mostly visible, but since we are dealing with just a calculator I think that would be fine.

#3
One thing we could do is to change the if/elseif/else structure to switch structure. Switch statements tend to be faster since they use a jump table which allows the program to jump directly to the case that it is looking for. This would streamline the process and make it faster. Besides this I am not quite sure what other changes we could make.

Hope you have a nice day!