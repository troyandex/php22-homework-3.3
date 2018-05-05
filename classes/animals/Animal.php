<?php
namespace classes\animals;


abstract class Animal extends \classes\Goods implements \interfaces\AnimalInterface
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