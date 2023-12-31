<?php

/*
Създайте основата за електронен магазин - клас Product, Cart и Payment.
Различните типове продукти ще бъдат обединени от общ абстрактен клас,
съдържащ общите им методи и пропъртита. Различните Payment методи ще
имат общ интерфейс. За да е успешно завършена задачата:
- Създайте интерфейс и множество класове, които го имплементират: Нека
интерфейсът бъде с един или повече методи и след това създайте
множество класове, които го прилагат.
- Създадат абстрактен клас с един или повече конкретни методи и един
или повече абстрактни методи. След това трябва да създадате един или
повече класове, които наследяват този абстрактен клас и прилагат
неговите абстрактни методи.
- Създайте final клас със статични методи: нагледен пример за енумератор
- Създайте йерархия на класове с наследяване, интерфейси и абстрактни
класове

1. интерфейс - плащане
1.1. тип плащане:
- картово
- в кеш
2. интерфейс - валута
2.1 тип валута

3. Абастрактен клас продукт
-име 
-цена 
3.1 абстрактна функция - описание

4. клас женски дрехи
- нови възможности
- вкарване на стойностите от родителският клас
- извикване на абстрактният клас за описание

5. клас мъжки дрехи
- нови възможности
- вкарване на стойностите от родителски клас
- извикване на абстрактният клас за описание

6. продукти за хегиена
- нови възможности
- вкарване на стойностите от родителски клас
- извикване на абстранкният клас за описание

7. клас кошница
- нови възможности
- вкарване на интерфейс плащане с карта или кеш
- вкарване на интерфейс за валута
- добавяне на продукта в кошница (в масив)
- сетване на метода за плащане
- сетване на валутата
- сумиране на сметката (връщане на сумата и валутата)

8. създаване на обекти и извикването на методите:
- женска дреха
- мъжка дреха
- нещо за хигиената
- добавяне в картата, като се прави нова
- добавяне на продуктите в нея
- извикване на плащане
- добавяне начин на плащане
- добавяне на валута
- какво има в количката
- общата сума в количката
- финални методи за плащане

*/



interface PayMethod {        // common payment - interface // connect all 
    public function pay(float $amount);
}

class CardPay implements PayMethod {   // first type of payment
    public function pay(float $amount):float {
        return $amount;
    }
}

class CashPay implements PayMethod {  // second type of payment
    public function pay(float $amount):float {
        return $amount;
    }
}


interface Sign {
    public function currency(string $symbol);
}

class BgnSign implements Sign {
    public function currency(string $symbol) {
        return $symbol;
    }
}


abstract class Product {   // common product --- like a items, because this is abstract for one shop
    protected $name;       // we can have shoes and dress, and etc.
    public $price;

    public function __construct(string $name, float $price) {  // main construct or parent::
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function getDescription(): string;   // description ... other common
        

    public function getPrice(): float {  // take the price
        return $this->price;
    }
}

class womenClothesDress extends Product {
    private $color;   // different on woman store - color
    private $made;
    private $material;

    public function __construct(string $name, float $price, string $color, string $made, string $material) {  // new __construct
        parent::__construct($name, $price); // from abstract  Products
        $this->color = $color;
        $this->made = $made;
        $this->material = $material;
    }

    public function getDescription(): string {   // other abstract Products
        return "Dress: $this->name in $this->color - $this->price. Made in: $this->made. Material - $this->material".PHP_EOL;
    }
}

class manClothesShoes extends Product {
    private $size;

    public function __construct(string $name, float $price, int $size) {  // same
        parent::__construct($name, $price);  // same
        $this->size = $size;
    }

    public function getDescription(): string {
        return "Shoes: $this->name in size $this->size - $this->price".PHP_EOL; // same
    }
}

class Hygiene extends Product {
    private $brand;
    private $smell;

    public function __construct(string $name, float $price, string $brand, string $smell){
        parent::__construct($name, $price);
        $this->brand = $brand;
        $this->smell = $smell;
    }

    public function getDescription(): string {
        return "Soap is: $this->name from $this->brand for $this->price and smell like $this->smell".PHP_EOL;
    }
}

class Cart {  // shoping cart or bag
    private $items = [];
    private PayMethod $payMethod;  // implement paymethod 
    private Sign $sign;

    public function addProduct(Product $product) {  // add product in bascet
        $this->items[] = $product;  // collect items in array
    }

    public function setPayment(PayMethod $payMethod) {
        $this->payMethod = $payMethod;
    }
    public function setSign(Sign $sign){
        $this->sign = $sign;
    }

    public function checkout() {  // calculate total sum
        $total = 0;  
        foreach ($this->items as $item) {
            $total += $item->price;
        }

        return $this->payMethod->pay($total) . ' ' . $this->sign->currency('BGN');
    }
    public function getItems(): array {
        return $this->items;
    }
}

final class PayMethods {
    const CREDITCARD = "CREDIT CARD";
    const CASH = "CASH";

    public static function getAll(): array {
        return [self::CREDITCARD, self::CASH];
    }
}


$dress = new womenClothesDress("Summer dress", 39.99, "blue", "Italy", "Cotton");
$shoes = new manClothesShoes("Sneakers", 59.99, 42);
$flower = new Hygiene("Dove", 10.00 , "Procter and Gamble", "Chrysanthemums");
echo $dress->getDescription();
echo $shoes->getDescription();
echo $flower->getDescription();

$cart = new Cart();


$cart->addProduct($dress);
$cart->addProduct($shoes);
$cart->addProduct($flower);


$creditCard = new cardPay();
$cart->setPayment($creditCard);
$bgnSign = new BgnSign();
$cart->setSign($bgnSign);


$cart->checkout();
echo "Cart Contents: ".PHP_EOL;
print_r($cart->getItems());


$totalFinal = $cart->checkout();
echo "Total: " . $totalFinal.PHP_EOL;

$allPaymentMethods = PayMethods::getAll();
foreach($allPaymentMethods as $paymentMethod) {
    echo $paymentMethod . PHP_EOL;
}
