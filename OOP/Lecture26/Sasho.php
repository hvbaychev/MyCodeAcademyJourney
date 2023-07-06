<?php

class ViewHTML implements View {
    public function hi($greeting) {
        echo "<b>$greeting</b><br/>\n";
    }
}

class ViewPlainText implements View {
    public function hi($greeting) {
        echo $greeting . "\n";
    }
}



class Controller {
    


}




class Facotry {
    protected function __construct() {}
    public static function getView($viewType) {
        if ($viewType === 'PlainText') {
            return new ViewPlainText();
        } elseif ($viewType === 'HTML') {
            return new ViewHTML();
        }
    }
}


$view = Facotry::getView('');

$view->hi('Hello world!');