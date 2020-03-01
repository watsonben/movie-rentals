<?php

namespace Customer\Factory;

use Customer\Controller;
use Customer\Model;
use Customer\View;
use Customer\Vo;

use Movie\Model\Childrens;
use Movie\Model\NewRelease;
use Movie\Model\Regular;
use Movie\Vo\Movie;

use Rental\Model\Rental;

/**
 * Class CustomerFactory
 *
 * @package Customer\Factory
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class CustomerFactory
{
    /**
     * Instantiates a new Customer model that we can use to handle the business logic.
     *
     * @return Controller\Customer - the business model
     */
    public function __invoke(): Controller\Customer
    {
        // Since we don't have a database, we're going to insert data manually and pretend the database exists.
        $data = new Vo\Customer('Joe Schmoe', $this->getRentals());

        $model = new Model\Customer($data);
        $view = new View\Customer($model);

        $controller = new Controller\Customer($model, $view);

        return $controller;
    }

    /**
     * Temporary helper to get us the data to use for faking a database.
     *
     * @return array - the rentals to add to the customer records
     */
    public function getRentals(): array
    {
        $childrensMovie = new Childrens(new Movie('Back to the Future'));
        $regularMovie = new Regular(new Movie('Office Space'));
        $newReleaseMovie = new NewRelease(new Movie('The Big Lebowski'));

        $rentals = [
            new Rental(new \Rental\Vo\Rental($childrensMovie, 4)),
            new Rental(new \Rental\Vo\Rental($regularMovie, 3)),
            new Rental(new \Rental\Vo\Rental($newReleaseMovie, 5)),
        ];
        return $rentals;
    }
}
