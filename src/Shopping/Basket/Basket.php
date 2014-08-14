<?php

namespace Shopping\Basket;

use Shopping\Fruit\Apple;
use Shopping\Fruit\FruitInterface;

/**
 * Class Basket
 * @package Shopping\Basket
 */
class Basket implements \Iterator, \Countable
{
    /** @var int */
    private $position = 0;

    /** @var array */
    private $fruits = array();

    public function __construct()
    {
        /*
         * Don't want to look like a loser in the
         * supermarket with no fruit in my basket...
         * @todo Buy fruit myself in future
         */
        $this->addFruit(new Apple());
        $this->addFruit(new Pear());
    }

    /**
     * @param FruitInterface $fruit
     */
    public function addFruit(FruitInterface $fruit)
    {
        $this->fruits[] = $fruit;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count()
    {
        return count($this->fruits);
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return FruitInterface
     */
    public function current()
    {
        if ($this->valid($this->position)) {
            return $this->fruits[(integer)$this->position];
        }
        throw new \OutOfBoundsException('Current position ' .
            'does not have any fruit');
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return (integer)$this->position;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        if (isset($this->fruits[(integer)$this->position]) &&
            $this->fruits[(integer)$this->position] instanceof FruitInterface) {
            return true;
        }
        return false;
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->position = 0;
    }

} 