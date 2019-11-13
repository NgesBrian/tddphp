# tddphp
this project is to demostrate test driven development in php. I used PHPUnit. 
The project has three folders.

# Src
It holds the php classes that I want to test. In this case, I have a sum clas with two functions that sum up items in an array add that adds two numbers

# tests
It contains the written tests class to test the functions in the above class. i have demonstrated 6 asserts

# Vendor
It contains bin and related installations of phpunit gotten from composer install. I use PHPUnit version 5.

# Composer
It gives requirements to install PHPUnit version 5. It also create a PHP namespace for the src folder. 

# Phpunit.xml
defines the autoload file of phpunit.

# Testing
run the command  vendor/bin/phpunit
