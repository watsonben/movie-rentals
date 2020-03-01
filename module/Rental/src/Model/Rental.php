<?php

namespace Rental\Model;

use Movie\Model\Movie;
use Rental\Vo;

/**
 * Class Rental
 *
 * @package Rental\Model
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Rental
{
    /**
     * The value object from which we can get model information.
     *
     * @var Vo\Rental
     */
    protected $data;

    /**
     * Rental constructor.
     *
     * @param Vo\Rental $data - the value object model
     */
    public function __construct(Vo\Rental $data)
    {
        $this->data = $data;
    }

    /**
     * Get the movie that is being rented.
     *
     * @return Movie - the rented movie
     */
    public function getMovie(): Movie
    {
        return $this->data->getMovie();
    }

    /**
     * Get the amount of days for which this movie has been rented.
     *
     * @return int - the amount of days
     */
    public function getDaysRented(): int
    {
        return $this->data->getDaysRented();
    }

    /**
     * Get the total amount owed for renting the movie for this amount of days.
     *
     * @return float - the total owed
     */
    public function getTotalOwed(): float
    {
        $movie = $this->getMovie();
        $daysRented = $this->getDaysRented();

        return $movie->getTotalOwed($daysRented);
    }

    /**
     * Get the total amount of frequent rental points earned by renting this movie.
     *
     * @return int - the points earned
     */
    public function getFrequentRentalPoints(): int
    {
        $movie = $this->getMovie();
        $daysRented = $this->getDaysRented();
        return $movie->getFrequentRentalPoints($daysRented);
    }
}
