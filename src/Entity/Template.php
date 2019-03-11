<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemplateRepository")
 */
class Template
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="templates" )
     * @ORM\JoinColumn(nullable=true)
     */
    private $product;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $favicon;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $topBackground;

    /**
     * @return mixed
     */
    public function getTopBackground()
    {
        return $this->topBackground;
    }

    /**
     * @param mixed $topBackground
     */
    public function setTopBackground($topBackground): void
    {
        $this->topBackground = $topBackground;
    }

    /**
     * @return mixed
     */
    public function getBottomBackground()
    {
        return $this->bottomBackground;
    }

    /**
     * @param mixed $bottomBackground
     */
    public function setBottomBackground($bottomBackground): void
    {
        $this->bottomBackground = $bottomBackground;
    }

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $bottomBackground;

    /**
     * @ORM\Column(type="string", length=255 ,nullable=true)
     */
    private $topImg;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TemplatesComment", mappedBy="template" ,  cascade={"remove"})
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TemplatesDescription", mappedBy="template" ,cascade={"remove"})
     */
    private $descriptions;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bottomImg;

    /**
     * @ORM\Column(type="string", length=255 ,nullable=true)
     */
    private $middleBackground;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $motto;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Info", mappedBy="template" , cascade={"remove"})
     */
    private $infos;

    /**
     * @ORM\Column(type="integer" ,nullable=true)
     */
    private $percent;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->descriptions = new ArrayCollection();
        $this->infos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFavicon(): ?string
    {
        return $this->favicon;
    }

    public function setFavicon(string $favicon): self
    {
        $this->favicon = $favicon;

        return $this;
    }


    public function getTopImg(): ?string
    {
        return $this->topImg;
    }

    public function setTopImg(string $topImg): self
    {
        $this->topImg = $topImg;

        return $this;
    }

    /**
     * @return Collection|TemplatesComment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(TemplatesComment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setTemplate($this);
        }

        return $this;
    }

    public function removeComment(TemplatesComment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getTemplate() === $this) {
                $comment->setTemplate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TemplatesDescription[]
     */
    public function getDescriptions(): Collection
    {
        return $this->descriptions;
    }

    public function addDescription(TemplatesDescription $description): self
    {
        if (!$this->descriptions->contains($description)) {
            $this->descriptions[] = $description;
            $description->setTemplate($this);
        }

        return $this;
    }

    public function removeDescription(TemplatesDescription $description): self
    {
        if ($this->descriptions->contains($description)) {
            $this->descriptions->removeElement($description);
            // set the owning side to null (unless already changed)
            if ($description->getTemplate() === $this) {
                $description->setTemplate(null);
            }
        }

        return $this;
    }

    public function getBottomImg(): ?string
    {
        return $this->bottomImg;
    }

    public function setBottomImg(?string $bottomImg): self
    {
        $this->bottomImg = $bottomImg;

        return $this;
    }

    public function getMiddleBackground(): ?string
    {
        return $this->middleBackground;
    }

    public function setMiddleBackground(string $middleBackground): self
    {
        $this->middleBackground = $middleBackground;

        return $this;
    }

    public function getMotto(): ?string
    {
        return $this->motto;
    }

    public function setMotto(?string $motto): self
    {
        $this->motto = $motto;

        return $this;
    }

    /**
     * @return Collection|Info[]
     */
    public function getInfos(): Collection
    {
        return $this->infos;
    }

    public function addInfo(Info $info): self
    {
        if (!$this->infos->contains($info)) {
            $this->infos[] = $info;
            $info->setTemplate($this);
        }

        return $this;
    }

    public function removeInfo(Info $info): self
    {
        if ($this->infos->contains($info)) {
            $this->infos->removeElement($info);
            // set the owning side to null (unless already changed)
            if ($info->getTemplate() === $this) {
                $info->setTemplate(null);
            }
        }

        return $this;
    }

    public function getPercent(): ?int
    {
        return $this->percent;
    }

    public function setPercent(int $percent): self
    {
        $this->percent = $percent;

        return $this;
    }
}
