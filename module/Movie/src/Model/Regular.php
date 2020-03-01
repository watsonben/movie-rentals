<?php

namespace Movie\Model;

/**
 * Class Regular
 *
 * @package Movie\Model
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Regular extends Movie
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
        $total = 2.0;
        if ($daysRented > 2) {
            $total += ($daysRented - 2) * 1.5;
        }

        return $total;
    }
}
