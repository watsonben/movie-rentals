<?php

namespace Customer\Model;

use Customer\Vo;
use Movie\Model\Movie;
use Rental\Model\Rental;

/**
 * Class Customer
 *
 * @package Customer\Model
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Customer
{
    /**
     * The value object from which we can get model information.
     *
     * @var Vo\Customer
     */
    protected $dataModel;

    /**
     * Customer constructor.
     *
     * @param $dataModel - the value object model
     */
    public function __construct(Vo\Customer $dataModel)
    {
        $this->dataModel = $dataModel;
    }

    /**
     * Get the name of the customer.
     *
     * @return string - the name of the customer
     */
    public function getName(): string
    {
        return $this->dataModel->getName();
    }

    /**
     * Get the rentals that the customer currently had out.
     *
     * @return array - the rentals
     */
    public function getRentals(): array
    {
        return $this->dataModel->getRentals();
    }

    /**
     * Get the amount of frequent renter points the customer currently has on balance.
     *
     * @return int - the current balance
     */
    public function getFrequentRenterPoints(): int
    {
        $points = 0;

        /** @var Rental $rental */
        foreach ($this->getRentals() as $rental) {
            $points += $rental->getFrequentRentalPoints();
        }

        return $points;
    }

    /**
     * Get the total owed by movie.
     * This is in a movieName => total structure.
     *
     * @return array - totals for each movie
     */
    public function getTotalsByMovie(): array
    {
        $totals = [];
        /** @var Rental $rental */
        foreach ($this->getRentals() as $rental) {
            $movie = $rental->getMovie();
            $total = $rental->getTotalOwed();

            $totals[$movie->getName()] = $total;
        }

        return $totals;
    }
}
