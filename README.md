#TDD Kata Template

> Remember that the point of the kata is not arriving at a correct answer. The point is the stuff you learn along the way. The goal is the practice, not the solution.
> - Dave Thomas, http://codekata.com/

## Performing a Kata
* Select a Kata
* Clone the project
* Setup with php composer.phar install
* Add / Update classes in src and matching Test
    * /spec - if using phpspec
    * /tests - if using phpunit
* Red, Green, Refactor - At each point, run your chosen tests suite
    * Write a test to Fail
    * Write the code that lets the test pass
    * Cleanup src code w/o modifying test
    * Cleanup tests w/o modifying src

## Kata Ideas / Resources
There are lots of great places to find Kata

http://codekata.com/
http://codingdojo.org/cgi-bin/index.pl?KataCatalogue
http://www.wiredtothemoon.com/2012/12/12-tdds-of-christmas/

## Alternatives to setting up a project
http://www.codewars.com/
http://www.codekatas.org/

# Project Details

## Make sure composer is installed
Running this command will install composer into the current directory.
That could be a directory containing your projects, or a local "bin" directory
in your path.
```
curl -sS https://getcomposer.org/installer | php
```
## Project Checkout and Setup
Pull the template project 
```
git clone https://github.com/kcphpug/tdd-kata-template.git my-kata
```
or (if you prefer ssh keys)
```
git clone git@github.com:kcphpug/tdd-kata-template.git 
``` 

Then, you may want to setup a branch if you want to share your kata--or keep all your kata under on project, etc
``` 
git branch fizzbuzz-kata
``` 

## Let composer get your libraries
```
php composer.phar install
```
## Running Test suites
Composer will install phpunit and phpspec for you in your project's vendor directory.

To make things even easier, it will add your commands to the project's bin directory


### PHP Unit
```
bin/phpunit
```
To get started with your tests, check out:
https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html


### Running PHPSpec
```
bin/phpspec run
```
phpspec isn't just phpunit with different syntax, but it's certainly worth checking out:
http://www.phpspec.net/en/latest/manual/getting-started.html

