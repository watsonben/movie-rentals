<?php

namespace Movie\Model;

/**
 * Class NewRelease
 *
 * @package Movie\Model
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class NewRelease extends Movie
{
    /**
     * Get the total amount owed, based on the genre.
     *
     * @param int $daysRented - the amount of days this has been rented.
     *
     * @return float - the amount owed
     */
    public function getTotalOwed(int $daysRented): float
    {
        return $daysRented * 3.0;
    }

    /**
     * Get the amount of frequent renter points, based on the genre.
     *
     * @param int $daysRented - the amount of days this has been rented.
     *
     * @return int - the frequent renter points earned
     */
    public function getFrequentRentalPoints(int $daysRented): int
    {
        $points = 1;
        if ($daysRented > 1) {
            $points++;
        }

        return $points;
    }
}
