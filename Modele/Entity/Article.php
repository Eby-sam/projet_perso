<?php

namespace MinichatProjet\Entity;

class Article {

    private string $title;
    private string $content;
    private int $user_fk;
    private ?int $id;

    public function __construct(string $title, string $content, int $user_fk, int $id = null) {
        $this->title = $title;
        $this->content = $content;
        $this->user_fk = $user_fk;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getUser_fk(): int
    {
        return $this->user_fk;
    }

    /**
     * @param string $user_fk
     */
    public function setUser_fk(int $user_fk): void
    {
        $this->user_fk = $user_fk;
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
