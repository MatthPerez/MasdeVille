<?php

namespace App\Entity;

use App\Repository\VcmRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VcmRepository::class)]
class Vcm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $portion = null;

    #[ORM\Column(length: 100)]
    private ?string $president = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $advisor = null;

    #[ORM\Column]
    private ?int $song1 = null;

    #[ORM\Column]
    private ?int $song2 = null;

    #[ORM\Column]
    private ?int $song3 = null;

    #[ORM\Column(length: 255)]
    private ?string $prayer1 = null;

    #[ORM\Column(length: 255)]
    private ?string $prayer2 = null;

    #[ORM\Column(length: 255)]
    private ?string $jewels_title = null;

    #[ORM\Column(length: 255)]
    private ?string $jewels_speaker = null;

    #[ORM\Column(length: 255)]
    private ?string $pearls = null;

    #[ORM\Column(length: 255)]
    private ?string $reader1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reader2 = null;

    #[ORM\Column(length: 255)]
    private ?string $appl11 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl12 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl13 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl14 = null;

    #[ORM\Column(length: 255)]
    private ?string $appl21 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl22 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl23 = null;

    #[ORM\Column(length: 255)]
    private ?string $appl24 = null;

    #[ORM\Column(length: 255)]
    private ?string $appl31 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl32 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl33 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl34 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl41 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl42 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl43 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $appl44 = null;

    #[ORM\Column(length: 255)]
    private ?string $cl1 = null;

    #[ORM\Column(length: 255)]
    private ?string $cl1_speaker = null;

    #[ORM\Column(length: 255)]
    private ?string $cl2 = null;

    #[ORM\Column(length: 255)]
    private ?string $cl2_speaker = null;

    #[ORM\Column(length: 255)]
    private ?string $cl3 = null;

    #[ORM\Column(length: 255)]
    private ?string $cl3_speaker = null;

    #[ORM\Column(length: 255)]
    private ?string $study_speaker = null;

    #[ORM\Column(length: 255)]
    private ?string $study_reader = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPortion(): ?string
    {
        return $this->portion;
    }

    public function setPortion(string $portion): self
    {
        $this->portion = $portion;

        return $this;
    }

    public function getPresident(): ?string
    {
        return $this->president;
    }

    public function setPresident(string $president): self
    {
        $this->president = $president;

        return $this;
    }

    public function getAdvisor(): ?string
    {
        return $this->advisor;
    }

    public function setAdvisor(?string $advisor): self
    {
        $this->advisor = $advisor;

        return $this;
    }

    public function getSong1(): ?int
    {
        return $this->song1;
    }

    public function setSong1(int $song1): self
    {
        $this->song1 = $song1;

        return $this;
    }

    public function getSong2(): ?int
    {
        return $this->song2;
    }

    public function setSong2(int $song2): self
    {
        $this->song2 = $song2;

        return $this;
    }

    public function getSong3(): ?int
    {
        return $this->song3;
    }

    public function setSong3(int $song3): self
    {
        $this->song3 = $song3;

        return $this;
    }

    public function getPrayer1(): ?string
    {
        return $this->prayer1;
    }

    public function setPrayer1(string $prayer1): self
    {
        $this->prayer1 = $prayer1;

        return $this;
    }

    public function getPrayer2(): ?string
    {
        return $this->prayer2;
    }

    public function setPrayer2(string $prayer2): self
    {
        $this->prayer2 = $prayer2;

        return $this;
    }

    public function getJewelsTitle(): ?string
    {
        return $this->jewels_title;
    }

    public function setJewelsTitle(string $jewels_title): self
    {
        $this->jewels_title = $jewels_title;

        return $this;
    }

    public function getJewelsSpeaker(): ?string
    {
        return $this->jewels_speaker;
    }

    public function setJewelsSpeaker(string $jewels_speaker): self
    {
        $this->jewels_speaker = $jewels_speaker;

        return $this;
    }

    public function getPearls(): ?string
    {
        return $this->pearls;
    }

    public function setPearls(string $pearls): self
    {
        $this->pearls = $pearls;

        return $this;
    }

    public function getReader1(): ?string
    {
        return $this->reader1;
    }

    public function setReader1(string $reader1): self
    {
        $this->reader1 = $reader1;

        return $this;
    }

    public function getReader2(): ?string
    {
        return $this->reader2;
    }

    public function setReader2(?string $reader2): self
    {
        $this->reader2 = $reader2;

        return $this;
    }

    public function getAppl11(): ?string
    {
        return $this->appl11;
    }

    public function setAppl11(string $appl11): self
    {
        $this->appl11 = $appl11;

        return $this;
    }

    public function getAppl12(): ?string
    {
        return $this->appl12;
    }

    public function setAppl12(?string $appl12): self
    {
        $this->appl12 = $appl12;

        return $this;
    }

    public function getAppl13(): ?string
    {
        return $this->appl13;
    }

    public function setAppl13(?string $appl13): self
    {
        $this->appl13 = $appl13;

        return $this;
    }

    public function getAppl14(): ?string
    {
        return $this->appl14;
    }

    public function setAppl14(?string $appl14): self
    {
        $this->appl14 = $appl14;

        return $this;
    }

    public function getAppl21(): ?string
    {
        return $this->appl21;
    }

    public function setAppl21(string $appl21): self
    {
        $this->appl21 = $appl21;

        return $this;
    }

    public function getAppl22(): ?string
    {
        return $this->appl22;
    }

    public function setAppl22(?string $appl22): self
    {
        $this->appl22 = $appl22;

        return $this;
    }

    public function getAppl23(): ?string
    {
        return $this->appl23;
    }

    public function setAppl23(?string $appl23): self
    {
        $this->appl23 = $appl23;

        return $this;
    }

    public function getAppl24(): ?string
    {
        return $this->appl24;
    }

    public function setAppl24(string $appl24): self
    {
        $this->appl24 = $appl24;

        return $this;
    }

    public function getAppl31(): ?string
    {
        return $this->appl31;
    }

    public function setAppl31(string $appl31): self
    {
        $this->appl31 = $appl31;

        return $this;
    }

    public function getAppl32(): ?string
    {
        return $this->appl32;
    }

    public function setAppl32(?string $appl32): self
    {
        $this->appl32 = $appl32;

        return $this;
    }

    public function getAppl33(): ?string
    {
        return $this->appl33;
    }

    public function setAppl33(?string $appl33): self
    {
        $this->appl33 = $appl33;

        return $this;
    }

    public function getAppl34(): ?string
    {
        return $this->appl34;
    }

    public function setAppl34(?string $appl34): self
    {
        $this->appl34 = $appl34;

        return $this;
    }

    public function getAppl41(): ?string
    {
        return $this->appl41;
    }

    public function setAppl41(?string $appl41): self
    {
        $this->appl41 = $appl41;

        return $this;
    }

    public function getAppl42(): ?string
    {
        return $this->appl42;
    }

    public function setAppl42(?string $appl42): self
    {
        $this->appl42 = $appl42;

        return $this;
    }

    public function getAppl43(): ?string
    {
        return $this->appl43;
    }

    public function setAppl43(?string $appl43): self
    {
        $this->appl43 = $appl43;

        return $this;
    }

    public function getAppl44(): ?string
    {
        return $this->appl44;
    }

    public function setAppl44(?string $appl44): self
    {
        $this->appl44 = $appl44;

        return $this;
    }

    public function getCl1(): ?string
    {
        return $this->cl1;
    }

    public function setCl1(string $cl1): self
    {
        $this->cl1 = $cl1;

        return $this;
    }

    public function getCl1Speaker(): ?string
    {
        return $this->cl1_speaker;
    }

    public function setCl1Speaker(string $cl1_speaker): self
    {
        $this->cl1_speaker = $cl1_speaker;

        return $this;
    }

    public function getCl2(): ?string
    {
        return $this->cl2;
    }

    public function setCl2(string $cl2): self
    {
        $this->cl2 = $cl2;

        return $this;
    }

    public function getCl2Speaker(): ?string
    {
        return $this->cl2_speaker;
    }

    public function setCl2Speaker(string $cl2_speaker): self
    {
        $this->cl2_speaker = $cl2_speaker;

        return $this;
    }

    public function getCl3(): ?string
    {
        return $this->cl3;
    }

    public function setCl3(string $cl3): self
    {
        $this->cl3 = $cl3;

        return $this;
    }

    public function getCl3Speaker(): ?string
    {
        return $this->cl3_speaker;
    }

    public function setCl3Speaker(string $cl3_speaker): self
    {
        $this->cl3_speaker = $cl3_speaker;

        return $this;
    }

    public function getStudySpeaker(): ?string
    {
        return $this->study_speaker;
    }

    public function setStudySpeaker(string $study_speaker): self
    {
        $this->study_speaker = $study_speaker;

        return $this;
    }

    public function getStudyReader(): ?string
    {
        return $this->study_reader;
    }

    public function setStudyReader(string $study_reader): self
    {
        $this->study_reader = $study_reader;

        return $this;
    }
}