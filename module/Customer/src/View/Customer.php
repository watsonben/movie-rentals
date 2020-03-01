<?php

namespace Customer\View;

use Customer\Model;

/**
 * Class Customer
 *
 * @package Customer\View
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Customer
{
    /**
     * The business model we use to render.
     *
     * @var Model\Customer;
     */
    protected $model;

    /**
     * Customer constructor.
     *
     * @param Model\Customer $model
     */
    public function __construct(Model\Customer $model)
    {
        $this->model = $model;
    }

    /**
     * Generates a plain-text statement of the customer's rental status.
     *
     * @return string - the plain-text statement
     */
    public function getStatement(): string
    {
        $totalAmount = 0;
        $result = 'Rental Record for ' . $this->model->getName() . PHP_EOL;

        $totals = $this->model->getTotalsByMovie();

        foreach ($totals as $movieName => $total) {
            $totalAmount += $total;
            $result .= "\t" . str_pad($movieName, 30, ' ', STR_PAD_RIGHT) . "\t" . $total . PHP_EOL;
        }

        $result .= 'Amount owed is ' . $totalAmount . PHP_EOL;
        $result .= 'You earned ' . $this->model->getFrequentRenterPoints() . ' frequent renter points' . PHP_EOL;

        return $result;
    }

    /**
     * Generates an HTML statement of the customer's rental status.
     *
     * @return string - the html statement
     */
    public function getStatementHtml(): string
    {
        $totalAmount = 0;
        $result = '<h1>Rental Record for <em>' . $this->model->getName() . '</em></h1>' . PHP_EOL;

        $totals = $this->model->getTotalsByMovie();

        $result .= '<ul>' . PHP_EOL;
        foreach ($totals as $movieName => $total) {
            $totalAmount += $total;
            $result .= '    <li>' . $movieName . ' - ' . $total . '</li>' . PHP_EOL;
        }
        $result .= '<\ul>' . PHP_EOL;

        $result .= '<p>Amount owed is <em>' . $totalAmount . '</em></p>' . PHP_EOL;
        $result .= '<p>You earned <em>' . $this->model->getFrequentRenterPoints() . '</em> frequent renter points</p>' . PHP_EOL;

        return $result;
    }
}
