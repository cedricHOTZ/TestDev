<?php

class Dog
{
  private $pattes = 4;


  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Aboie()
  {
    echo 'Wouf Wouf ';
  }

  /**
   * Get the value of _pattes
   */
  public function getNbPattes()
  {
    return $this->pattes;
  }

  /**
   * Set the value of _pattes
   *
   * @return  self
   */
  public function setNbPattes($pattes)
  {
    $this->pattes = $pattes;

    return $this;
  }
}
