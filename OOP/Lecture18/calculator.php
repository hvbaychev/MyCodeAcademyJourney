<?php
/*
Създайте калкулатор за конвертиране на разменния
курс на валути.
Ще са ви нужни класове, които да репрезентират
валутата (class Currency с инстанции за BGN, EUR, USD
и т.н.), както и клас Calculator, който ще приема две
инстанции на Currency (от валута/към валута). От тях
ще взима автоматично разменния курс и символа, който
да изпише като резултат ($, €, £ и т.н.). Помислете какви
методи ще дефинирате и коя ще е базовата валута. 
*/

class Currency{
    private $name;
    private $exchangeRate;
    private $symbol;

    public function __construct(string $name, float $exchangeRate, string $symbol)
    {
        $this->name = $name;
        $this->exchangeRate = $exchangeRate;
        $this->symbol = $symbol;
    }

    public function getName(){
        return $this->name;
    }

    public function getExchangeRate(){
        return $this->exchangeRate;
    }

    public function getSymbol(){
        return $this->symbol;
    }

    public function convertTo($amount, Currency $toCurrency){
        $convertedAmount = $amount * $this->exchangeRate / $toCurrency->getExchangeRate();
        return array($convertedAmount, $toCurrency->getSymbol());
    }
}

class Calculator{
    private $fromCurrency;
    private $toCurrency;
    
    public function __construct(Currency $fromCurrency, Currency $toCurrency) {
        $this->fromCurrency = $fromCurrency;
        $this->toCurrency = $toCurrency;
    }
    
    public function convert($amount) {
        list($convertedAmount, $symbol) = $this->fromCurrency->convertTo($amount, $this->toCurrency);
        return number_format($convertedAmount, 2) . ' ' . $symbol;
    }
}

$bgn = new Currency('BGN', 1.0, 'лв.');
$usd = new Currency('USD', 1.696, '$');
$eur = new Currency('EUR', 1.955, '€');

$calculator = new Calculator($bgn, $usd);
echo $calculator->convert(100) . "\n"; // 59.10 $

$calculator = new Calculator($eur, $bgn);
echo $calculator->convert(50) . "\n"; // 97.27 лв
