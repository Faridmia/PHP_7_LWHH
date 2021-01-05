<?php 
// trait aka aka use kora jai na akta trait onno trait ar moddhe  use koras jai na code reuse korar jonno trait akta chmotkar jinis
trait NumberSeriesOne{

    private function numberSeriesA(){
        echo "Number Series A\n";
    }

    function numberSeriesB(){
        echo "number series B\n";
        $this->numberSeriesA();
    }
}

trait NumberSeriesTwo{
    use NumberSeriesOne;

    function numberSeriesC(){
        echo "Number Series c\n";
    }

    function numberSeriesD(){
        echo "number series d\n";
    }
}

class NumberSeries{

    //use NumberSeriesOne,NumberSeriesTwo;
    use NumberSeriesTwo;
}

$object = new NumberSeries();

$object->numberSeriesB();
$object->numberSeriesC();
$object->numberSeriesD();


// jkono class trait k use korte parbe



