<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});
include 'function.php';



trait TimestampableEntity
{
    public $createdAt;
    public $updatedAt;
    public function setCreateAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}

$film1 = new Film();
$test = currentMovies();


$film1->hydrate(currentMovies());

var_dump($test);
