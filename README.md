# PHP Test Coverage Image from Github Actions

Demonstration of a PHPUnit code coverage report, in image form, published back to the repo and linked in the readme.

## Code Coverage

This repo has PHPUnit code coverage of:

[[insert image]]

## Notes

The example code is pretty contrived.  In the `Decorator::yell()` method, we purposely alter the statement
string when someone requests that we don't yell. However, we're not writing a unit test to cover that path.
This should give us less than 100% code coverage for our image.
