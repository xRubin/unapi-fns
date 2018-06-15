<?php

namespace unapi\fns\uwsfind\requests;

use DateTimeInterface;
use unapi\helper\fullname\FullName;

class BySoleProprietorRequest implements BySoleProprietorRequestInterface
{
    /** @var null|string */
    private $ogrnip;
    /** @var null|FullName */
    private $name;
    /** @var null|string */
    private $declarationForm;
    /** @var null|string */
    private $ifnsNumber;
    /** @var null|DateTimeInterface */
    private $dateFrom;
    /** @var null|DateTimeInterface */
    private $dateTo;

    /**
     * @param null|string $ogrnip
     * @param null|FullName $name
     * @param null|string $declarationForm
     * @param null|string $ifnsNumber
     * @param DateTimeInterface|null $dateFrom
     * @param DateTimeInterface|null $dateTo
     */
    public function __construct(string $ogrnip = null, FullName $name = null, string $declarationForm = null, string $ifnsNumber = null, DateTimeInterface $dateFrom = null, DateTimeInterface $dateTo = null)
    {
        $this->ogrnip = $ogrnip;
        $this->name = $name;
        $this->declarationForm = $declarationForm;
        $this->ifnsNumber = $ifnsNumber;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
    }

    /**
     * @return null|string
     */
    public function getOgrnip(): ?string
    {
        return $this->ogrnip;
    }

    /**
     * @return null|FullName
     */
    public function getName(): ?FullName
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDeclarationForm(): ?string
    {
        return $this->declarationForm;
    }

    /**
     * @return null|string
     */
    public function getIfnsNumber(): ?string
    {
        return $this->ifnsNumber;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getDateFrom(): ?DateTimeInterface
    {
        return $this->dateFrom;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getDateTo(): ?DateTimeInterface
    {
        return $this->dateTo;
    }
}