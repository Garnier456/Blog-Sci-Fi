<?php

namespace App\Entity;

class User
{

  private int $idUser;
  private string $name;
  private string $email;
  private string $password;
  private int $is_admin;

  public function __construct(
    int $idUser,
    string $name,
    string $email,
    string $password,
    int $is_admin
  ) {
    $this->idUser = $idUser;
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->is_admin = $is_admin;
  }




  /**
   * Get the value of idUser
   */
  public function getIdUser(): int
  {
    return $this->idUser;
  }

  /**
   * Set the value of idUser
   */
  public function setIdUser(int $idUser): self
  {
    $this->idUser = $idUser;

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
   * Get the value of email
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * Set the value of email
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword(): string
  {
    return $this->password;
  }

  /**
   * Set the value of password
   */
  public function setPassword(string $password): self
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of is_admin
   */
  public function getIsAdmin(): int
  {
    return $this->is_admin;
  }

  /**
   * Set the value of is_admin
   */
  public function setIsAdmin(int $is_admin): self
  {
    $this->is_admin = $is_admin;

    return $this;
  }
}
