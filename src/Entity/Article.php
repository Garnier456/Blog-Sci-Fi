<?php

namespace App\Entity;

use DateTime;

class Article
{

  private int $idArticle = 0;
  private string $title;
  private string $summary;
  private string $content;
  private string $image;
  private DateTime $createdAt;
  private int $userId;
  private Category $category;

  public function __construct(array $data = [])
  {
    foreach ($data as $propertyName => $value) {
      $setter = 'set' . ucfirst($propertyName);
      if (method_exists($this, $setter)) {
          $this->$setter($value);
      }
  }
  }


  public function getArticleId(): int
  {
    return $this->idArticle;
  }


  public function setArticleId(int $idArticle): self
  {
    $this->idArticle = $idArticle;

    return $this;
  }


  public function getTitle(): string
  {
    return $this->title;
  }


  public function setTitle(string $title): self
  {
    $this->title = $title;

    return $this;
  }


  public function getSummary(): string
  {
    return $this->summary;
  }


  public function setSummary(string $summary): self
  {
    $this->summary = $summary;

    return $this;
  }


  public function getContent(): string
  {
    return $this->content;
  }


  public function setContent(string $content): self
  {
    $this->content = $content;

    return $this;
  }


  public function getImage(): ?string
  {
    return $this->image;
  }


  public function setImage(?string $image): self
  {
    $this->image = $image;

    return $this;
  }


  public function getCreatedAt(): DateTime
  {
    return $this->createdAt;
  }


  public function setCreatedAt(string|DateTime $createdAt): self
  {
      if (is_string($createdAt)) {
          $createdAt = new DateTime($createdAt);
      }

      $this->createdAt = $createdAt;

      return $this;
  }

  public function getFormattedCreatedAt(): string
    {
        return $this->createdAt->format('d/m/Y');
    }

  public function getUserId(): int
  {
    return $this->userId;
  }


  public function setUserId(int $userId): self
  {
    $this->userId = $userId;

    return $this;
  }


  public function getCategory(): Category
  {
    return $this->category;
  }


  public function setCategory(Category $category): self
  {
    $this->category = $category;

    return $this;
  }

  public function getCategoryName(): string
  {
      return $this->category->getName();
  }

  public function getCategoryIcon(): string
  {
      return $this->category->getIcon();
  }
}



