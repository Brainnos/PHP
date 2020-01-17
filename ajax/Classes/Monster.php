<?php


class Monster
{
private $vie;
private $attack;

public function __construct()
{
    $this->vie = 100;
    $this->attack = 10;
}
/**
 * Get the value of vie
 */ 
public function getVie()
{
return $this->vie;
}

/**
 * Set the value of vie
 *
 * @return  self
 */ 
public function setVie($vie)
{
$this->vie = $vie;
}

/**
 * Get the value of attack
 */ 
public function getAttack()
{
return $this->attack;
}

/**
 * Set the value of attack
 *
 * @return  self
 */ 
public function setAttack($attack)
{
$this->attack = $attack;
}
}


