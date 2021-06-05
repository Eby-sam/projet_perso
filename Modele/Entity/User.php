<?php
namespace MinichatProjet\Entity;

class user {
    private string $name;
    private string $firstname;
    private string $pseudo;
    private string $email;
    private string $password;
    private string $role_fk;
    private bool $activate;
    private ?int $id;

    /**
     * user constructor.
     * @param string $name
     * @param string $firstname
     * @param string $pseudo
     * @param string $email
     * @param string $password
     * @param string $role_fk
     * @param bool $activate
     * @param int|null $id
     */
    public function __construct(string $name, string $firstname, string $pseudo, string $email, string $password, string $role_fk, bool $activate, int $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->firstname = $firstname;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->role_fk = $role_fk;
        $this->activate = $activate;
    }

    /**
     * @return bool
     */
    public function getActivate(): bool
    {
        return $this->activate;
    }

    /**
     * @param bool $activate
     */
    public function setActivate(bool $activate): void
    {
        $this->activate = $activate;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getRoleFk(): string
    {
        return $this->role_fk;
    }

    /**
     * @param int $role_fk
     */
    public function setRoleFk(int $role_fk): void
    {
        $this->role_fk = $role_fk;
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
