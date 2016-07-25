# Strategy Pattern (Behavioural)

Sometimes, I read code like that:

```php
if ($mybeer->type == "noAlcoholBeer") {
    $mybeer->drinkNoAlcoholBeer();
} elseif ($mybeer->type == "strongBeer") {
    $mybeer->drinkStrongBeer();
} else {
    $mybeer->drinkSoftBeer();
}
```

I found it pretty ugly. I got the solution: Strategy Pattern !!!  
Look, I can do the same with no indentation level. Great no? ;)

```php
$beer->applyDrink();
```

```
$ composer test-dox

Strategy\Tests\Strategy
 [x] After drinking tourtel i throw it out the window
 [x] After drinking heineken i feel dehydrated and ok
 [x] After drinking kwak i cannot drive
```

![Strategy Pattern Wikipedia](https://upload.wikimedia.org/wikipedia/commons/3/39/Strategy_Pattern_in_UML.png)

Here, the AbstractBeer class is the **Context**, DrinkBehaviorInterface is the **Strategy** and DrinkxxxBeer classes are the **ConcreteStrategy**.  
By the way, the Context, isn't necessary an Abstract class. You can also create an only class (without inheritance) and set the contextInterface on the fly.
