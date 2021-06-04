<?php
namespace MinichatProjet\Entity;

class Pic {

    private string $img;
    private ?int $id;

    /**
     * piv constructor.
     * @param string $img
     * @param int|null $id
     */
    public function __construct(string $img, int $id = null) {
        $this->id = $id;
        $this->img = $img;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }


}
