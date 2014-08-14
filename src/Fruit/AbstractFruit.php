<?php

namespace Shopping\Fruit;

/**
 * Class AbstractFruit
 * @package Shopping\Fruit
 */
abstract class AbstractFruit implements FruitInterface
{
    /** @var string */
    protected $name;

    /** @var integer */
    protected $calories;

    /**
     * @return string Name of the fruit
     */
    public function getName()
    {
        return (string)$this->name;
    }

    /**
     * @return int Calories when consuming the fruit
     */
    public function getCalories()
    {
        return (integer)$this->calories;
    }

}