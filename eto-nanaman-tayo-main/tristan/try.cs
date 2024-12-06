using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("Enter a number to calculate its factorial:");
        int number = int.Parse(Console.ReadLine());

        // Call the factorial function and print the result
        int result = Factorial(number);
        Console.WriteLine($"The factorial of {number} is: {result}");

        Console.ReadLine(); // Keep console open until Enter is pressed
    }

    // Recursive function to calculate factorial
    static int Factorial(int n)
    {
        // Base case: factorial of 0 is 1
        if (n == 0)
            return 1;
        
        // Recursive call to calculate factorial
        return n * Factorial(n - 1);
    }
}
