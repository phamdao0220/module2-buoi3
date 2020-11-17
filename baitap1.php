<?php

class ReadingList
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RuntimeException('stack is empty!');

        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}

$myFood = new ReadingList(10);
$myFood->push('Very Delicious');
$myFood->push('Very EyeCatching');
$myFood->push('Very Nutritious');
$myFood->push('very Good Quality');
$myFood->push('Great');
echo $myFood->pop()."<br/>";
echo $myFood->pop()."<br/>";
echo $myFood->pop()."<br/>";
$myFood->push("b");
$myFood->push("a");


 var_dump($myFood->isEmpty()) ;


echo $myFood->pop()."<br/>";
echo $myFood->pop()."<br/>";
echo $myFood->pop()."<br/>";

echo $myFood->pop()."<br/>";

var_dump($myFood->isEmpty()) ;

