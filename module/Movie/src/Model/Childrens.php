<?php

namespace Movie\Model;

/**
 * Class Childrens
 *
 * @package Movie\Model
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Childrens extends Movie
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
        $total = 1.5;
        if ($daysRented > 3) {
            $total += ($daysRented - 3) * 1.5;
        }

        return $total;
    }
}
