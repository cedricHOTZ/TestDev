<?php

class Poule
{
  private $pattes = 2;


  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Caquette()
  {
    echo 'Cot cot cot cot ';
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
