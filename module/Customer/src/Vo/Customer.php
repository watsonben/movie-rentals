<?php

namespace Customer\Vo;

/**
 * Class Customer
 *
 * @package Customer\Vo
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Customer
{
    /**
     * The name of the customer.
     *
     * @var string
     */
    protected $name;

    /**
     * The rentals the customer currently has.
     *
     * @var array
     */
    protected $rentals;

    /**
     * Customer constructor.
     *
     * @param $name - the name of the customer
     * @param $rentals - the rentals the customer currently has
     */
    public function __construct(string $name, array $rentals)
    {
        $this->name = $name;
        $this->rentals = $rentals;
    }

    /**
     * Get the name of the customer.
     *
     * @return string - the customer's name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the name of the customer.
     *
     * @param string $name - the customer's name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the rentals that the customer currently has.
     *
     * @return array - the rentals
     */
    public function getRentals(): array
    {
        return $this->rentals;
    }

    /**
     * Set the array of rentals that the customer currently has.
     *
     * @param array $rentals - the rentals
     *
     * @return void
     */
    public function setRentals(array $rentals): void
    {
        $this->rentals = $rentals;
    }
}
