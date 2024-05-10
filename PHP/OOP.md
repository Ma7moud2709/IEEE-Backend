# IEEE Task-16
<hr>


* ### Encapsulation:
    refers to bundling the data (attributes) and methods (functions) that operate on the data into a single unit called a `class`. It helps in hiding the internal state of an object and only exposing the necessary functionalities. 
* ### Abstraction:
    on the other hand, is the process of hiding the implementation details of a class and showing only the necessary parts to the outside world. In PHP, you achieve encapsulation and abstraction through access modifiers like public, private, and protected.

<hr>

* ## Inheritance

    Inheritance is a mechanism in object-oriented programming that allows a new class (derived or child class) to inherit properties and methods from an existing class (base or parent class). This promotes code reusability and establishes a hierarchical relationship between classes. In PHP, you use the `extends` keyword to implement inheritance.

<hr>

* ## PHP Interfaces & Polymorphism

    Interfaces in PHP define a contract that classes can implement, specifying methods that must be defined within those classes. This promotes code consistency and allows for polymorphism, where objects can be treated as instances of their parent class or interface. PHP uses the `implements` keyword to implement interfaces and achieve polymorphism.

<hr>

* ## PHP Traits

    Traits in PHP provide a way to reuse methods in multiple classes. They are similar to classes but cannot be instantiated on their own. Traits are used to group functionality in a fine-grained and reusable manner, allowing classes to include multiple traits to inherit their methods. You use the `use` keyword in PHP to include traits in a class.

<hr>

# IEEE Task-17

# Error Handling in PHP

PHP provides several mechanisms for error handling to help developers manage and debug their code effectively. The main techniques for handling errors in PHP include:

- **Error Reporting Level**: PHP lets developers set error reporting levels using `error_reporting` in php.ini or `error_reporting()` function dynamically (e.g., E_ALL, E_ERROR, E_WARNING) to control error display or logging.

- **Error Logging**: PHP logs errors to a specified file using `error_log`, useful for recording production errors discreetly.

- **Try-Catch Blocks**: PHP supports structured exception handling with try-catch blocks, enabling effective handling of specific exceptions.

- **Custom Error Handling**: Developers can define custom error handlers using `set_error_handler()` and `set_exception_handler()` to manage PHP's response to different errors and exceptions.

- **Error Suppression**: PHP's `@` operator suppresses errors for a specific expression, but its use is cautioned against due to potential debugging challenges and hidden bugs.

---

# Late Static Binding & How It Works

Late static binding is a feature in PHP that allows a child class to reference its parent class's static properties or methods using the `static` keyword. This is particularly useful in situations where you want to access static properties or methods of a parent class in a child class without explicitly specifying the parent class name.

Here's an example to illustrate how late static binding works:

```php
class ParentClass {
    protected static $property = 'Parent Property';

    public static function getProperty() {
        return static::$property;
    }
}

class ChildClass extends ParentClass {
    protected static $property = 'Child Property';
}

echo ChildClass::getProperty(); // Outputs: Child Property
```
