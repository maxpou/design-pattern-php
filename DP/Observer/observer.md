# Design Pattern Observer (Behavioural)

![Observer Pattern Wikipedia](https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Observer.svg/854px-Observer.svg.png)

```
$ composer test-dox

Observer\Tests\Observer
 [x] Nothing append if no observers
 [x] Raise notification if observers
 [x] Raise multiple notification if many observers
 [x] Dont raise notification if observer is detached
 ```


## PHP and Observer Desing Pattern

In this example, I use my own interfaces. But PHP provide two interfaces to implement Observer Design Pattern: [SplSubject](http://php.net/manual/en/class.splsubject.php) and [SplObserver](http://php.net/manual/en/class.splobserver.php).


```php
<?php
interface SplSubject
{
    public function attach(SplObserver $observer) : void;
    public function detach(SplObserver $observer) : void;
    public function notify() : void;
}
```

```php
<?php
interface SplObserver
{
    public function update(SplSubject $subject) : void;
}
```
