<?php

namespace Shopping\Fruit;

/**
 * Interface FruitInterface
 * @package Shopping\Fruit
 */
interface FruitInterface
{
    /**
     * @return string Name of the fruit
     */
    public function getName();

    /**
     * @return int Calories when consuming the fruit
     */
    public function getCalories();

} 