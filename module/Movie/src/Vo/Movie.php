<?php

namespace Movie\Vo;

/**
 * Class Movie
 *
 * @package Movie\Vo
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Movie
{
    /**
     * @var string
     */
    private $name;

    /**
     * Movie constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the name of the movie.
     *
     * @return string - the name of the movie
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the name of the movie.
     *
     * @param string $name - the name of the movie
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
