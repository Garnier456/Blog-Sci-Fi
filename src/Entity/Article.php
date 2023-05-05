<?php

namespace App\Entity;

use DateTimeImmutable;
use App\Entity\User;
use App\Entity\Category;

class Article
{

  private int $idArticle;
  private string $title;
  private string $intro;
  private string $content;
  private ?string $image;
  private DateTimeImmutable $createdAt;
  private User $user_id;
  private int $category_id;

  public function __construct(
    int $idArticle,
    string $title,
    string $intro,
    string $content,
    ?string $image,
    DateTimeImmutable $createdAt,
    User $user_id,
    int $category_id
  ) {
    $this->idArticle = $idArticle;
    $this->title = $title;
    $this->intro = $intro;
    $this->content = $content;
    $this->image = $image;
    $this->createdAt = $createdAt;
    $this->user_id = $user_id;
    $this->category_id = $category_id;
  }



  /**
   * Get the value of idArticle
   */
  public function getIdArticle(): int
  {
    return $this->idArticle;
  }

  /**
   * Set the value of idArticle
   */
  public function setIdArticle(int $idArticle): self
  {
    $this->idArticle = $idArticle;

    return $this;
  }

  /**
   * Get the value of title
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * Set the value of title
   */
  public function setTitle(string $title): self
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of intro
   */
  public function getIntro(): string
  {
    return $this->intro;
  }

  /**
   * Set the value of intro
   */
  public function setIntro(string $intro): self
  {
    $this->intro = $intro;

    return $this;
  }

  /**
   * Get the value of content
   */
  public function getContent(): string
  {
    return $this->content;
  }

  /**
   * Set the value of content
   */
  public function setContent(string $content): self
  {
    $this->content = $content;

    return $this;
  }

  /**
   * Get the value of image
   */
  public function getImage(): ?string
  {
    return $this->image;
  }

  /**
   * Set the value of image
   */
  public function setImage(?string $image): self
  {
    $this->image = $image;

    return $this;
  }

  /**
   * Get the value of createdAt
   */
  public function getCreatedAt(): DateTimeImmutable
  {
    return $this->createdAt;
  }

  /**
   * Set the value of createdAt
   */
  public function setCreatedAt(string|DateTimeImmutable $createdAt): self
  {
    if (is_string($createdAt)) { // '2016-12-26'
      $createdAt = new DateTimeImmutable($createdAt);
    }

    $this->createdAt = $createdAt;

    return $this;
  }

  /**
   * Retourne la date de création de l'article formattée 
   */
  public function getFormattedCreatedAt(): string
  {
    return $this->createdAt->format('d/m/Y');
  }

  /**
   * Get the value of user_id
   */
  public function getUserId(): User
  {
    return $this->user_id;
  }

  /**
   * Set the value of user_id
   */
  public function setUserId(User $user_id): self
  {
    $this->user_id = $user_id;

    return $this;
  }

  /**
   * Get the value of category_id
   */
  public function getCategoryId(): int
  {
    return $this->category_id;
  }

  /**
   * Set the value of category_id
   */
  public function setCategoryId(int $category_id): self
  {
    $this->category_id = $category_id;

    return $this;
  }
}
