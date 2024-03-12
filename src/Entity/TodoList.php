<?php

namespace App\Entity;

use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\TodoListRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: TodoListRepository::class)]
#[ApiResource(
    operations: [
        new Get(
            uriTemplate: '/todolist/{id}',
        ),
        new GetCollection(
            uriTemplate: '/todolist/list',
        ),
        new Put(
            uriTemplate: '/todolist/put/{id}',
        ),
        new Post(
            uriTemplate: '/todolist/post',
        ),
        new Patch(
            uriTemplate: '/todolist/patch/{id}',
        ),
        new Delete(
            uriTemplate: '/todolist/delete/{id}',
        )
    ]
)]
class TodoList
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
