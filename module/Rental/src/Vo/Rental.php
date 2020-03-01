<?php

namespace Rental\Vo;

use Movie\Model\Movie;

/**
 * Class Rental
 *
 * @package Rental\Vo
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Rental
{
    /**
     * @var int
     */
    protected $daysRented;

    /**
     * @var Movie
     */
    protected $movie;

    /**
     * Rental constructor.
     *
     * @param Movie $movie - the movie being rented
     * @param int $daysRented - the amount of days the movie has been rented
     */
    public function __construct(Movie $movie, int $daysRented)
    {
        $this->daysRented = $daysRented;
        $this->movie = $movie;
    }

    /**
     * Get the amount of days that the movie has been rented.
     *
     * @return int - the amount of days rented
     */
    public function getDaysRented(): int
    {
        return $this->daysRented;
    }

    /**
     * Set the amount of days for which this movie has been rented.
     *
     * @param int $daysRented - the amount of days rented
     *
     * @return void
     */
    public function setDaysRented(int $daysRented): void
    {
        $this->daysRented = $daysRented;
    }

    /**
     * Get the movie being rented.
     *
     * @return Movie - the movie being rented
     */
    public function getMovie(): Movie
    {
        return $this->movie;
    }

    /**
     * Set the movie being rented.
     *
     * @param Movie $movie - the movie being rented
     *
     * @return void
     */
    public function setMovie(Movie $movie): void
    {
        $this->movie = $movie;
    }
}
