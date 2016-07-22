# Strategy Pattern

Sometimes, I read code like that:

```php
if ($myUser->type == "customer") {
    # do stuff
} elseif ($myUser->type == "employee") {
    # do something else
} else {
    # do something else
}
```

Hey guys, I got the solution: Strategy Pattern !!!
I can do the same with no indentation level. Great no? ;)

```
$ composer test-dox

Strategy\Tests\Strategy
 [x] After drinking tourtel i throw it out the window
 [x] After drinking heineken i feel dehydrated and ok
 [x] After drinking kwak i cannot drive
```
