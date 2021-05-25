<?php

namespace MinichatProjet\Entity;

class user {

    private ?int $id;
    private ?string $name;
    private ?string $firstname;
    private ?string $pseudo;
    private ?string $email;
    private ?string $password;
    private ?int $role_fk;

    public function __construct(int $id, string $firstname, string $name, string $pseudo, string $email,
                                string $password, int $role_fk) {
        $this->id = $id;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->role_fk = $role_fk;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     */
    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return int|null
     */
    public function getRoleFk(): ?int
    {
        return $this->role_fk;
    }

    /**
     * @param int|null $role_fk
     */
    public function setRoleFk(?int $role_fk): void
    {
        $this->role_fk = $role_fk;
    }

    /**
     * @return int|null
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getPseudo(): string {
        return $this->pseudo;
    }

    /**
     * @param string|null $pseudo
     */
    public function setPseudo(?string $pseudo): void {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string|null
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void {
        $this->password = $password;
    }
}
