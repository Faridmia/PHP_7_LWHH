<?php 
interface Observer {
    public function update($news);
}

class NewsPublisher {
    private $observers = [];
    private $latestNews;

    public function subscribe(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this->latestNews);
        }
    }

    public function publishNews($news) {
        $this->latestNews = $news;
        $this->notify();
    }
}


class Subscriber implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update($news) {
        echo $this->name . " received news: " . $news . "\n";
    }
}


$publisher = new NewsPublisher();

$sub1 = new Subscriber('Alice');
$sub2 = new Subscriber('Bob');

$publisher->subscribe($sub1);
$publisher->subscribe($sub2);

$publisher->publishNews('New PHP Version Released!');