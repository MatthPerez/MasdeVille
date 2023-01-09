<?php

namespace App\Entity;

use App\Repository\MembersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;

#[ORM\Entity(repositoryClass: MembersRepository::class)]
class Members
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $firstname = null;

    #[ORM\Column(length: 100)]
    #[OrderBy(["name" => "ASC"])]
    private ?string $lastname = null;

    #[ORM\Column(length: 9)]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    private ?string $mail = null;

    #[ORM\Column]
    private ?int $phone = null;

    #[ORM\Column(length: 10)]
    private ?string $birth = null;

    #[ORM\Column(length: 10)]
    private ?string $bapt = null;

    #[ORM\Column(length: 150)]
    private ?string $status = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $function = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $group_function = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $group_name = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $access = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getBirth(): ?string
    {
        return $this->birth;
    }

    public function setBirth(string $birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    public function getBapt(): ?string
    {
        return $this->bapt;
    }

    public function setBapt(string $bapt): self
    {
        $this->bapt = $bapt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFunction(): ?string
    {
        return $this->function;
    }

    public function setFunction(?string $function): self
    {
        $this->function = $function;

        return $this;
    }

    public function getGroupFunction(): ?string
    {
        return $this->group_function;
    }

    public function setGroupFunction(?string $group_function): self
    {
        $this->group_function = $group_function;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->group_name;
    }

    public function setGroupName(?string $group_name): self
    {
        $this->group_name = $group_name;

        return $this;
    }

    public function getAccess(): ?string
    {
        return $this->access;
    }

    public function setAccess(?string $access): self
    {
        $this->access = $access;

        return $this;
    }
}
