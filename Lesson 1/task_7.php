<?php
class A {
    public function foo () {
        static $x = 0;
        echo ++ $x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;

var_dump($a1);
echo "<br>";
var_dump($b1);
echo "<br>";

$a1 -> foo ();
$b1 -> foo ();
$a1 -> foo ();
$b1 -> foo ();

/* Работает одинаково с предыдущим заданием.
 * Не нашла почему.
 */
