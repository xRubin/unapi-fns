<?php

namespace unapi\fns\uwsfind;

use DateTimeInterface;
use DateTimeImmutable;

class Declaration implements DeclarationInterface
{
    /** @var null|DateTimeInterface */
    private $declarationDate;
    /** @var null|DateTimeInterface */
    private $readyDate;
    /** @var null|string */
    private $declarationForm;
    /** @var null|string */
    private $action;
    /** @var null|string */
    private $legalName;
    /** @var null|string */
    private $declarationNumber;
    /** @var null|string */
    private $ogrn;
    /** @var null|string */
    private $declarationTransport;
    /** @var null|string */
    private $ifns;
    /** @var null|string */
    private $declarationDecision;

    /**
     * @param null|DateTimeInterface $declarationDate
     * @param null|DateTimeInterface $readyDate
     * @param null|string $declarationForm
     * @param null|string $action
     * @param null|string $legalName
     * @param null|string $declarationNumber
     * @param null|string $ogrn
     * @param null|string $declarationTransport
     * @param null|string $ifns
     * @param null|string $declarationDecision
     */
    public function __construct(
        DateTimeInterface $declarationDate = null,
        DateTimeInterface $readyDate = null,
        string $declarationForm = null,
        string $action = null,
        string $legalName = null,
        string $declarationNumber = null,
        string $ogrn = null,
        string $declarationTransport = null,
        string $ifns = null,
        string $declarationDecision = null)
    {
        $this->declarationDate = $declarationDate;
        $this->readyDate = $readyDate;
        $this->declarationForm = $declarationForm;
        $this->action = $action;
        $this->legalName = $legalName;
        $this->declarationNumber = $declarationNumber;
        $this->ogrn = $ogrn;
        $this->declarationTransport = $declarationTransport;
        $this->ifns = $ifns;
        $this->declarationDecision = $declarationDecision;
    }

    /**
     * @return null|DateTimeInterface
     */
    public function getDeclarationDate(): ?DateTimeInterface
    {
        return $this->declarationDate;
    }

    /**
     * @return null|DateTimeInterface
     */
    public function getReadyDate(): ?DateTimeInterface
    {
        return $this->readyDate;
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
    public function getAction(): ?string
    {
        return $this->action;
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
    public function getDeclarationNumber(): ?string
    {
        return $this->declarationNumber;
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
    public function getDeclarationTransport(): ?string
    {
        return $this->declarationTransport;
    }

    /**
     * @return null|string
     */
    public function getIfns(): ?string
    {
        return $this->ifns;
    }

    /**
     * @return null|string
     */
    public function getDeclarationDecision(): ?string
    {
        return $this->declarationDecision;
    }

    /**
     * @param mixed $data
     * @return DeclarationInterface
     */
    public static function toDto($data): DeclarationInterface
    {
        return new self(
            DateTimeImmutable::createFromFormat('d.m.Y', @$data->DT),
            DateTimeImmutable::createFromFormat('d.m.Y', @$data->DTGOTOV),
            @$data->FR,
            @$data->IZM,
            @$data->NM,
            @$data->NUM,
            @$data->OG,
            @$data->PREDST,
            @$data->REG,
            @$data->VR
        );
    }
}