<?php 

trait NumberSeriesOne{

    function numberSeriesA(){
        echo "Number Series A\n";
    }

}

trait NumberSeriestwo{

    function numberSeriesA(){
        echo "Number Series second method A\n";
    }

}

// trait ar moddhe j method thake oi same method class ar moddhe overwrite korle class ar method e call hobe
// but extend kora class ar  moddhe same method thakle aga trait ar method run hobe


class NumberSeries{

    use NumberSeriesOne,NumberSeriestwo{
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriestwo::numberSeriesA as numberSeriesAAA;
    }

    function numberSeriesA(){
        echo "Number Series A+ print here";
    }
    

}

$object = new NumberSeries();

$object->numberSeriesAAA();
