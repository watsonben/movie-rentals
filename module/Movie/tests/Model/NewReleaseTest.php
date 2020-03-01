<?php

namespace MovieTest;

use Movie\Model\NewRelease;
use Movie\Vo\Movie;
use PHPUnit\Framework\TestCase;

/**
 * Class NewReleaseTest.
 *
 * I've included this as an example of some unit testing.
 * I didn't want to do too much, as it wasn't mentioned in the README,
 * but I did want to have _some_ at least...
 *
 * @package MovieTest
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class NewReleaseTest extends TestCase
{
    /**
     * Test getting the name of the movie.
     *
     * @return void
     */
    public function testGetName(): void
    {
        $expected = 'Test name';
        $movie = new NewRelease(new Movie($expected));

        $actual = $movie->getName();

        $this->assertEquals($expected, $actual);
    }

    /**
     * Data provider for testGetFrequentRentalPoints.
     *
     * @return array
     */
    public function providerTestGetFrequentRentalPoints(): array
    {
        return [
            [1, 1], // Rented for a day
            [2, 2], // Rented for multiple days
            [0, 1], // Rented for no days
        ];
    }

    /**
     * Test getting the frequent renter points.
     *
     * @covers \Movie\Model\NewRelease::getFrequentRentalPoints
     * @provider providerTestGetFrequentRentalPoints
     *
     * @param $daysRented - the days for which the movie has been rented
     * @param $expected - the expected frequent renter points
     *
     * @return void
     */
    public function testGetFrequentRentalPoints($daysRented, $expected): void
    {
        $movie = new NewRelease(new Movie('Test name'));
        $actual = $movie->getFrequentRentalPoints($daysRented);

        $this->assertEquals($expected, $actual);
    }

    /**
     * Data provider for testGetTotalOwed.
     *
     * @return array
     */
    public function providerTestGetTotalOwed(): array
    {
        return [
            [1, 3.0], // Rented for a day
            [2, 6.0], // Rented for multiple days
            [0, 0.0], // Rented for no days
        ];
    }

    /**
     * Test getting the total amount owed.
     *
     * @covers \Movie\Model\NewRelease::getTotalOwed
     * @provider providerTestGetTotalOwed
     *
     * @param $daysRented - the days for which the movie has been rented
     * @param $expected - the expected total amount owed
     *
     * @return void
     */
    public function testGetTotalOwed($daysRented, $expected): void
    {
        $movie = new NewRelease(new Movie('Test name'));
        $actual = $movie->getTotalOwed($daysRented);

        $this->assertEquals($expected, $actual);
    }
}
