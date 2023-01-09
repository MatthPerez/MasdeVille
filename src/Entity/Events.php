<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventsRepository::class)]
class Events
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'date')]
    private $meeting_date = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $link = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeetingDate(): ?\DateTimeInterface
    {
        return $this->meeting_date;
    }

    public function setMeetingDate(\DateTimeInterface $meeting_date): self
    {
        $this->meeting_date = $meeting_date;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    
}
