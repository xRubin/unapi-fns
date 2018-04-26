<?php

namespace unapi\fns\uwsfind;

use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;

use function GuzzleHttp\json_decode;

class Parser implements ParserInterface
{
    private $responseClass = Declaration::class;

    /**
     * @param array $config Service configuration settings.
     */
    public function __construct(array $config = [])
    {
        if (isset($config['responseClass'])) {
            if ($config['responseClass'] instanceof DeclarationInterface) {
                $this->responseClass = $config['responseClass'];
            } else {
                throw new \InvalidArgumentException('ResponseClass must implement DeclarationInterface');
            }
        }
    }

    /**
     * @param ResponseInterface $response
     * @return PromiseInterface
     */
    public function parseResponse(ResponseInterface $response): PromiseInterface
    {
        $result = [];
        $responseClass = $this->responseClass;

        foreach (json_decode($response->getBody()->getContents())->rows as $row) {
            $result[] = $responseClass::toDto($row);
        }

        return new FulfilledPromise($result);
    }
}