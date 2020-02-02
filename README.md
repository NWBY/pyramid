# Pyramid

Laravel package for creating tech stacks in an application. Create and store a stack in a table and retrieve stack(s).

### Getting started

`composer require "nwby/pyramid"`

### Usage

```
use NWBY\Pyramid

public function __construct() {
    $this->pyramid = new Pyramid();
}
```

Publish migration:
`php artisan vendor:publish --provider="NWBY\Pyramid\PyramidServiceProvider" --tag="migrations"`

**TODO:** Add docs for creating a stack and retrieving stack(s).
