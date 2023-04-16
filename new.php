<?php

    // змінні
    $a=10; // цілочисельна змінна int
    $b='10'; // рядкова змінна string
    $c=10.01; // змінна float
    echo $a+$b+$c."<br>"; // 30.01 - неявне перетворення типів даних
    echo $a.$b.$c."<br>"; // 101010.01 - конкатинація
    var_dump($a, $b, $c); // int(10) string(2) "10" float(10.01) - тип змінної із значенням
    echo "<br>";
    // явне перетворення типів
    $x = 23465.768;
    echo (int)$x."<br>"; // 23465 перетворення float в int
    $x = "23465.768";
    echo (float)$x."<br>"; // 23465.768 перетворення string в float

    // функції з string
    $Hello="Hello, my old-new world!";
    echo strlen($Hello)."<br>"; // 24 - обчислює кількість символів
    echo str_word_count($Hello)."<br>"; // 4 - обчислює кількість слів
    echo strrev($Hello)."<br>"; // !dlrow wen-dlo ym ,olleH - реверс всіх символів
    echo strpos($Hello, "old")."<br>"; // 10 - номер символа, з якого починається введене значення (якщо воно є в string)
    echo str_replace("world", "universe", $Hello)."<br>"; // Hello, my old-new universe! - замінює вибране слово новим

    // explode, implode
    $Hello1=explode(" ", $Hello); // розділяє рядок на масив елементів за певним знаком
    print_r($Hello1); // Array ( [0] => Hello, [1] => my [2] => old-new [3] => world! ) - print_r - виводить масив
    echo "<br>";
    $Hello2=implode(" ", $Hello1); // з'єднує масив елементів у рядок, розділяючи певним знаком
    echo $Hello2."<br>";
    $Hello1=explode(" ", $Hello, 3); // третій параметр вказує ліміт елементів в масиві
    print_r($Hello1); // Array ( [0] => Hello, [1] => my [2] => old-new world! )
    echo "<br>";
    $Hello2=implode(" ", $Hello1);
    echo $Hello2."<br>";

    // порівняння '<' '>' '<=' '>=' '==' '!=' '===' '!=='
    if($a===$b) { // значення і тип змінної A рівний значенню і типу змінної B
        echo "$a===$b.<br>";
    } else if($a==$b) { // значення A рівне значенню B, незалежно від типу
        echo "$a==$b.<br>"; // виведе
    } else {
        "$a!=$b.<br>";
    }
    if($a!==$b) { // значення змінної A не рівний значенню змінній B або тип змінної A не рівний типу змінній B
        echo "$a!==$b.<br>"; // виведе
    } else if($a!=$b) { // змінна A не рівна змінній B
        echo "$a!=$b.<br>";
    } else {
        "$a==$b.<br>";
    }

    // switch
    switch ($a) {
        case 10:
            echo "case: 10.<br>"; // виведе
            break;
        case 20:
            echo "case: 20.<br>";
            break;
        default:
            echo "default.<br>";
    }

    // while
    $x = 3;
    while($x>=0) {
        echo "x = $x; ";
        $x--;
    } // x = 3; x = 2; x = 1; x = 0;
    echo "<br>";

    // do while
    $x = 3;
    do {
        echo "x = $x; ";
        $x--;
    } while($x>=0); //x = 3; x = 2; x = 1; x = 0;
    echo "<br>";

    // for
    $vegetables = array("Potato", "Tomato", "Radish");
    for($x=0; $x<count($vegetables); $x++) {
        echo "vegetables[$x] = $vegetables[$x]; "; // vegetables[0] = Potato; vegetables[1] = Tomato; vegetables[2] = Radish;
    }
    echo "<br>";

    // foreach
    $vegetables = array("Potato"=>35, "Tomato"=>70, "Radish"=>80); // хеш-масив (асоціативний масив)
    foreach($vegetables as $x => $val) { // цикл використовується лише для array, щоб пройти попарно ключ-значення
        echo "$x = $val; "; // Potato = 35; Tomato = 70; Radish = 80;
    }
    echo "<br>";

    // functions, global, static
    function MyTest1() { // функція без параметрів
        global $a, $b;
        $d=$a+$b;
        echo $d."<br>";
    }
    MyTest1(); //20
    function MyTest2($number=0) { // функція з параметром
        $d=$GLOBALS['a']+$GLOBALS['b']+$number;
        echo $d."<br>";
    }
    MyTest2(3); //23
    function MyTest3() {
        static $d=1;
        echo $d."<br>";
        $d++;
    }
    MyTest3(); // 1
    MyTest3(); // 2
    MyTest3(); // 3

    // classes
    class Vegetable {
        public $name, $cost;
        public function __construct($name="", $cost=0) { // конструктор класу
            $this->name = $name;
            $this->cost = $cost;
        }
        public function __destruct() { // деструктор класу
            echo "Деструктор $this->name<br>";
        }
        public function info() { // функція виведення інформації про об'єкт
            return "$this->name costs $this->cost";
        }
    }
    $newVegetable1 = new Vegetable("Onion", "45");
    echo $newVegetable1 -> info()."<br>"; // Onion costs 45.
    $newVegetable2 = new Vegetable("Cucumber", "60");
    echo $newVegetable2 -> info()."<br>"; // Cucumber costs 60.
    $newVegetable3 = new Vegetable();
    echo $newVegetable3 -> info()."<br>"; // costs 0.

    class Cabbage extends Vegetable { // клас Cabbage, що наслідує клас Vegetable
        public $count;
        public function __construct($name="", $cost=0, $count=0) { // конструктор класу
            parent::__construct($name, $cost); // звернення до батьківського класу
            $this->count=$count;
        }
        public function __destruct() { // деструктор класу
            parent::__destruct();
        }
        public function info() { // функція виведення інформації про об'єкт
            echo parent::info();
            return " count: $this->count<br>";
        }
    }
    $newCabbage = new Cabbage("Cabbage", 77, 4);
    echo $newCabbage->info(); // Cabbage costs 77 count: 4.

    var_dump($newVegetable2 instanceof Vegetable); // bool(true) - чи відповідає об'єкт введеному класу
    echo "<br>";
    var_dump($newCabbage instanceof Vegetable); // bool(true) - чи відповідає об'єкт введеному класу
    echo "<br>";
    var_dump($newCabbage instanceof Cabbage); // bool(true) - чи відповідає об'єкт введеному класу
    echo "<br>";

    // pattern Singleton(Одинак)
    class Singleton {
        private static $instance=null;
        private function __construct() {
        }
        public static function getInstance() {
            if(self::$instance===null){
                self::$instance = new self();
            }
            return self::$instance;
        }
    }
    $newSingleton1 = Singleton::getInstance();
    $newSingleton2 = Singleton::getInstance();
    if ($newSingleton1 === $newSingleton2) {
        echo "newSingleton1 === newSingleton2<br>"; // виведе
    }
    else {
        echo "newSingleton1 !== newSingleton2<br>";
    }

    // GET
    // для отримання певних даних з сторінки, всі параметри зі значеннями вказуються в URL, можна додавати до закладок, є кешовані
    if (isset($_GET['name'])) { // Перевіряємо, чи існує параметр "name" в запиті GET
        $name = $_GET['name']; // Отримуємо значення параметра "name"
        echo "Привіт, $name!<br>"; // Виводимо привітання з цим іменем
    } else {
        echo "Помилка: ім'я не вказано!<br>"; // Якщо параметр "name" відсутній, виводимо повідомлення про помилку
    }

    // POST
    // для надсилання та оновлення певних даних, форм, безпечно використовувати для передачі паролів, логінів, емейлів,
    // розміщує дані в тілі і має кілька методів кодування
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        if (empty($name)) {
            echo "Помилка: ім'я не вказано!<br>";
        } else {
            echo "Привіт, $name!<br>";
        }
    }

/*
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
 */
