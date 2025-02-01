<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "secretosLMH")]
class TablaLMH
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column(type: "integer")]
private int $id;
#[ORM\Column(type: "string", length: 255)]
private string $fraseLMH;
public function getId(): int
{
return $this->id;
}
public function getfraseLMH(): string
{
return $this->fraseLMH;
}
public function setContent(string $fraseLMH): self
{
$this->fraseLMH = $fraseLMH;
return $this;
}
}