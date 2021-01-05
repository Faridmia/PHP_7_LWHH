<?php 


trait NumberSeriesOne{

    function numberSeriesA(){
        echo "Number Series A\n";
        parent::numberSeriesA();
    }

    function numberSeriesB(){
        echo "number series B\n";
        $this->numberSeriesA();
    }
}

// trait ar moddhe j method thake oi same method class ar moddhe overwrite korle class ar method e call hobe
// but extend kora class ar  moddhe same method thakle aga trait ar method run hobe
class SomeClass{
    function numberSeriesA(){
        echo "Number Series A+ print here";
    }
}

class NumberSeries extends SomeClass{

    use NumberSeriesOne;

    // function numberSeriesA(){
    //     echo "Number Series A print here";
    // }

}


$object = new NumberSeries();

$object->numberSeriesA();
