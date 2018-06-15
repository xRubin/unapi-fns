<?php

namespace unapi\fns\uwsfind\requests;

use DateTimeInterface;
use unapi\helper\fullname\FullName;

interface BySoleProprietorRequestInterface extends RequestInterface
{
    /**
     * @return null|string
     */
    public function getOgrnip(): ?string;

    /**
     * @return null|FullName
     */
    public function getName(): ?FullName;

    /**
     * @return null|string
     */
    public function getDeclarationForm(): ?string;

    /**
     * @return null|string
     */
    public function getIfnsNumber(): ?string;

    /**
     * @return null|DateTimeInterface
     */
    public function getDateFrom(): ?DateTimeInterface;

    /**
     * @return null|DateTimeInterface
     */
    public function getDateTo(): ?DateTimeInterface;
}