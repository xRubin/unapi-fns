<?php

namespace unapi\fns\common;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use unapi\anticaptcha\common\AnticaptchaInterface;
use unapi\anticaptcha\common\AnticaptchaServiceInterface;
use unapi\anticaptcha\common\task\ImageTask;

class Anticaptcha implements AnticaptchaInterface
{
    /** @var AnticaptchaServiceInterface */
    private $service;

    public function __construct(AnticaptchaServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @param ClientInterface $client
     * @param ResponseInterface $response
     * @return PromiseInterface
     */
    public function getAnticaptchaPromise(ClientInterface $client, ResponseInterface $response): PromiseInterface
    {
        preg_match("/<input type=\"hidden\" name=\"captchaToken\" value=\"([^\"]*)/ism", $response->getBody()->getContents(), $matches);

        if (!array_key_exists(1, $matches))
            throw new \RuntimeException('Captcha token not found');

        return $client->requestAsync('GET', 'https://service.nalog.ru/static/captcha.html?a=' . $matches[1] . '&version=1')
            ->then(function (ResponseInterface $response) {
                return $this->service->resolve(new ImageTask([
                    'body' => $response->getBody()->getContents(),
                    'numeric' => ImageTask::NUMERIC_DEFAULT,
                    'minLength' => 6,
                    'maxLength' => 6
                ]));
            });
    }
}