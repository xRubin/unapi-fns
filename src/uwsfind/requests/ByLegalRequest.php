<?php

namespace unapi\fns\uwsfind\requests;

use DateTimeInterface;

class ByLegalRequest implements ByLegalRequestInterface
{
    /** @var null|string */
    private $ogrn;
    /** @var null|string */
    private $legalName;
    /** @var null|string */
    private $declarationForm;
    /** @var null|string */
    private $ifnsNumber;
    /** @var null|DateTimeInterface */
    private $dateFrom;
    /** @var null|DateTimeInterface */
    private $dateTo;

    /**
     * @param null|string $ogrn
     * @param null|string $legalName
     * @param null|string $declarationForm
     * @param null|string $ifnsNumber
     * @param DateTimeInterface|null $dateFrom
     * @param DateTimeInterface|null $dateTo
     */
    public function __construct(string $ogrn = null, string $legalName = null, string $declarationForm = null, string $ifnsNumber = null, DateTimeInterface $dateFrom = null, DateTimeInterface $dateTo = null)
    {
        $this->ogrn = $ogrn;
        $this->legalName = $legalName;
        $this->declarationForm = $declarationForm;
        $this->ifnsNumber = $ifnsNumber;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
    }

    /**
     * @return null|string
     */
    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    /**
     * @return null|string
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
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