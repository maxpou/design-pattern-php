# Null Object Pattern (Behavioural)

## Before/after

Before:

```php
if ($myBar instanceOf Bar) {
    echo $myBar->getAddress();
} else {
    echo "Not available!";
}
```

After:

```php
echo $myBar->getAddress();
```


## NullObject (only)

The first step implement NullObject pattern.  
If you take a look on the NullObjectTest class, you may find this pattern useless. (and I agree with you)

```
$ composer test-dox DP/NullObject/Example/tests/NullObjectTest.php

NullObject\Tests\NullObject
 [x] Real object properties are reachable
 [x] Null object is reachable too
 ```

## NullObject + Factory

With Factory Pattern, NullObject pattern is more relevant. In a few words, Factory pattern provide a RealBar object if input string is known or an NullBar if name is unknown.  

Factory method look like this:

```php
public static function getBar($barName)
{
    if (inDatabase(barName)) {
        return new RealBar($barName, self::getAddress($barName));
    }

    return new NullBar();
}
```

And we use it like this:

```php
$wellKnownBar = BarFactory::getBar("Delirium Bar");
$UnknownBar = BarFactory::getBar("Unknown bar");

echo $wellKnownBar->getAddress(); //Brussels
echo $UnknownBar->getAddress();   //Attribute address isn't available
```



```
$ composer test-dox DP/NullObject/Example/tests/NullObjectFactoryTest.php

NullObject\Tests\NullObjectFactory
 [x] Factory get real object from string
 [x] Factory create a null object if not found
 ```
