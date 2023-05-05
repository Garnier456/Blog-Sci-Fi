<?php 

namespace App\Entity;

class Category 
{

  private int $idCategory;
  private string $name;
  private ?string $icon;

  public function __construct(
    int $idCategory,
    string $name,
    ?string $icon
  ) {
    $this->idCategory = $idCategory;
    $this->name = $name;
    $this->icon = $icon;
  }

  


  /**
   * Get the value of idCategory
   */
  public function getIdCategory(): int
  {
    return $this->idCategory;
  }

  /**
   * Set the value of idCategory
   */
  public function setIdCategory(int $idCategory): self
  {
    $this->idCategory = $idCategory;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of icon
   */
  public function getIcon(): ?string
  {
    return $this->icon;
  }

  /**
   * Set the value of icon
   */
  public function setIcon(?string $icon): self
  {
    $this->icon = $icon;

    return $this;
  }
}