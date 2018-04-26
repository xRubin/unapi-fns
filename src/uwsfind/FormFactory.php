<?php

namespace unapi\fns\uwsfind;

use unapi\fns\uwsfind\requests;

class FormFactory
{
    /**
     * @param requests\RequestInterface $request
     * @return array|null
     */
    public static function getForm(requests\RequestInterface $request): ?array
    {
        if ($request instanceof requests\ByLegalRequestInterface)
            return static::getFormByLegal($request);
    }

    /**
     * @param requests\ByLegalRequestInterface $request
     * @return array
     */
    protected static function getFormByLegal(requests\ByLegalRequestInterface $request): array
    {
        return [
            'nptype' => 'ul',
            'ogrnUl' => $request->getOgrn(),
            'nameUl' => $request->getLegalName(),
            'frmUl' => $request->getDeclarationForm(),
            'ifns' => $request->getIfnsNumber(),
            'dtFrom' => $request->getDateFrom() ? $request->getDateFrom()->format('d.m.Y') : null,
            'dtTo' => $request->getDateTo() ? $request->getDateTo()->format('d.m.Y') : null,
        ];
    }
}