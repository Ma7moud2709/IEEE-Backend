# IEEE Task-7

### What is PHP?

PHP (Hypertext Preprocessor) is a widely-used open-source server-side scripting language that is especially suited for web development and can be embedded into HTML. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994 and has since evolved into a powerful tool for creating dynamic and interactive web pages

### Three Main Error Types in PHP

- **Notice:** Non-critical errors during script execution, indicating potential issues but not halting execution.
- **Warning:** More severe than notices, warning of potential problems that could cause unexpected behavior, although they don't stop script execution.
- **Fatal Error:** Most severe PHP errors, encountered in situations like calling undefined functions or syntax errors, leading to immediate termination of the script.

### Echo vs. Print

- **Echo:** Echo is a language construct rather than a function, so it doesn't require parentheses when used. It can output multiple strings separated by commas and is generally faster than print. Echo doesn't return any value.

- **Print:** Print is also a language construct, but it behaves like a function, requiring parentheses when used. It only allows for outputting one string at a time and returns 1, making it suitable for use in expressions.

### Sensitivity in PHP

- PHP is case-sensitive for variable names but not for function names or keywords.

<hr>

# IEEE Task-8

# Programming Language vs Scripting Language

**Programming Language**: A programming language is a formal language comprising a set of instructions that produce various kinds of output. It allows developers to create complex programs and applications by specifying a sequence of instructions for a computer to execute.

**Scripting Language**: A scripting language is a subset of programming languages that is typically interpreted rather than compiled. It is often used for automating tasks, writing small programs, and controlling other software applications. Scripting languages are usually easier to learn and use for tasks like web development, system administration, and rapid prototyping.

# Dynamically Typed vs Statically Typed Language

**Dynamically Typed Language**: In a dynamically typed language, variable types are determined at runtime. This means that you don't need to declare the type of a variable explicitly, and the type can change during execution.

**Statically Typed Language**: In a statically typed language, variable types are determined at compile time. This means that you must explicitly declare the type of each variable, and the type checking is done before the code is executed. Once a variable is declared with a certain type, it cannot change to another type.

# Assign by Value vs Assign by Reference

**Assign by Value**: When assigning a variable by value, the value stored in the variable is copied to a new location in memory. Changes made to the original variable do not affect the copied variable, and vice versa.

**Assign by Reference**: When assigning a variable by reference, instead of copying the value, a reference or pointer to the original variable's memory location is used. This means that both the original variable and the assigned variable point to the same memory location. Changes made to one variable will affect the other since they both refer to the same memory location.
