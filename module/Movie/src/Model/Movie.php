<?php

namespace Movie\Model;

use Movie\Vo;

/**
 * Class Movie
 *
 * @package Movie\Model
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
abstract class Movie
{
    /**
     * The value object from which we can get model information.
     *
     * @var Vo\Movie
     */
    protected $data;

    /**
     * Movie constructor.
     *
     * @param $data - the value object model
     */
    public function __construct(Vo\Movie $data)
    {
        $this->data = $data;
    }

    /**
     * Get the name of the movie.
     *
     * @return string - the name of the movie
     */
    public function getName(): string
    {
        return $this->data->getName();
    }

    /**
     * Get the amount of frequent renter points, based on the genre.
     * This is overwritten if necessary.
     *
     * @param int $daysRented - the amount of days this has been rented.
     *
     * @return int - the frequent renter points earned
     */
    public function getFrequentRentalPoints(int $daysRented): int
    {
        return 1;
    }

    /**
     * Get the total amount owed, based on the genre.
     *
     * @param int $daysRented - the amount of days this has been rented.
     *
     * @return float - the amount owed
     */
    public abstract function getTotalOwed(int $daysRented): float;
}
