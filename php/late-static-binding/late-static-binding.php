<?php
    class Car
    {
        public function run()
        {
            return static::getName();
        }

        private static function getName()
        {
            return 'Car';
        }
    }

    class Toyota extends Car
    {
        public static function getName()
        {
            return 'Toyota';
        }
    }

    $obj1 = new Toyota;
    $obj2 = new Car;
    echo $obj1->run();    echo "<br/>";// Output: Toyota
    echo $obj2->run();    echo "<br/>";// Output: Car
?>