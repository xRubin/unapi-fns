<?php

namespace unapi\fns\uwsfind;

interface DeclarationInterface
{
    /**
     * @param mixed $data
     * @return DeclarationInterface
     */
    public static function toDto($data): self;
}