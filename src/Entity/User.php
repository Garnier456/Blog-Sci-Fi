<?php

namespace App\Entity;

use App\Service\UserRole;

class User
{

  private int $idUser;
  private string $userName;
  private string $email;
  private string $password;
  private UserRole $role;

  public function __construct(array $data = [])
  {
      foreach ($data as $propertyName => $value) {
          $setter = 'set' . ucfirst($propertyName);
          if (method_exists($this, $setter)) {
              $this->$setter($value);
          }
      }
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
  public function getUserName(): string
  {
    return $this->userName;
  }

  /**
   * Set the value of name
   */
  public function setUserName(string $userName): self
  {
    $this->userName = $userName;

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
     * Get the value of role
     */
    public function getRole(): UserRole
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole(string|UserRole $role): self
    {
        if (is_string($role)) {
            $role = UserRole::from($role);
        }

        $this->role = $role;

        return $this;
    }
}
