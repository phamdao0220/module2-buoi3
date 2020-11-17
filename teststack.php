<?php
class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10) {

        $this->stack = array();

        $this->limit = $limit;
    }

    public function push($item) {

        if (count($this->stack) < $this->limit) {

            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {

            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}
$myBooks = new ReadingList();

$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords');
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');





echo $myBooks->pop()."<br/>";
echo $myBooks->top()."<br/>";
echo $myBooks->pop();
//print("<pre>" . print_r($myBooks, true) . "</pre>");
