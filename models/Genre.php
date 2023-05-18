<?php

class Genre
{
    public $name;
    public $min_age;

    public function __construct(string $name, int $min_age)
    {
        $this->name = $name;
        $this->min_age = $min_age;
    }
}