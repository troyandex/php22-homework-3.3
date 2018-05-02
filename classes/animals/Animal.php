<?php
namespace Classes\Animals;


abstract class Animal extends SuperClass implements AnimalInterface
{
    protected $breed; // порода
    protected $dwellingPlace; // место обитания

    public function __construct($breed, $dwellingPlace)
    {
        $this->breed = $breed;
        $this->dwellingPlace = $dwellingPlace;
    }
    public function makeSound()
    {
        echo $this->breed . ' говорит - "' . $this->sound . '"<br>';
    }
}