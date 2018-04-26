<?php

namespace unapi\fns\uwsfind\requests;

use DateTimeInterface;

interface ByLegalRequestInterface extends RequestInterface
{
    /**
     * @return null|string
     */
    public function getOgrn(): ?string;

    /**
     * @return null|string
     */
    public function getLegalName(): ?string;

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