<?php

use PHPUnit\Framework\TestCase;

use unapi\fns\uwsfind\Service;
use unapi\fns\uwsfind\requests;
use unapi\fns\common\Client;
use unapi\anticaptcha\common\AnticaptchaInterface;
use GuzzleHttp\Promise\FulfilledPromise;
use unapi\anticaptcha\common\dto\CaptchaSolvedDto;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use unapi\fns\uwsfind\Declaration;

class UwsfindServiceTest extends TestCase
{
    protected function getAnticaptcha(): AnticaptchaInterface
    {
        /** @var AnticaptchaInterface|\PHPUnit\Framework\MockObject\MockObject $anticaptcha */
        $anticaptcha = $this->createMock(AnticaptchaInterface::class);
        $anticaptcha
            ->method('getAnticaptchaPromise')
            ->willReturn(
                new FulfilledPromise(
                    new CaptchaSolvedDto('00000')
                )
            );

        return $anticaptcha;
    }

    protected function getService(HandlerStack $handler)
    {
        return new Service([
            'client' => new Client(['handler' => $handler]),
            'anticaptcha' => $this->getAnticaptcha(),
        ]);
    }

    public function testFindDeclarationsByLegal()
    {
        $service = $this->getService(
            HandlerStack::create(
                new MockHandler([
                    new Response(200, [], file_get_contents(__DIR__ . '/responses/uwsfind/service-initial')), // as initial page
                    new Response(200, [], file_get_contents(__DIR__ . '/responses/uwsfind/service-legal-data')),
                ])
            )
        );

        /** @var Declaration[] $declarations */
        $declarations = $service->findDeclarations(
            new requests\ByLegalRequest('1027700070518', null, null, null, new DateTime('11.09.2017'), new DateTime('11.09.2017'))
        )->wait();

        $this->assertInternalType('array', $declarations);
        $this->assertCount(1, $declarations);
        $this->assertEquals(Declaration::toDto((object)[
            'DT' => '11.09.2017',
            'DTGOTOV' => '19.09.2017',
            'DTR' => '18.09.2017"',
            'FR' => 'Р14001',
            'GRN' => '6177748870403',
            'IZM' => 'Изменение сведений, не связанных с учредительными документами (Р14001)',
            'NM' => 'ПУБЛИЧНОЕ АКЦИОНЕРНОЕ ОБЩЕСТВО "ГАЗПРОМ"',
            'NUM' => '424967А',
            'OG' => '1027700070518',
            'PREDST' => 'Лично',
            'REG' => 'Межрайонная ИФНС России № 46 по г.Москве',
            'VR' => 'Решение о государственной регистрации. ГРН внесенной записи 6177748870403'
        ]), $declarations[0]);
    }

    public function testFindDeclinedDeclarationsByLegal()
    {
        $service = $this->getService(
            HandlerStack::create(
                new MockHandler([
                    new Response(200, [], file_get_contents(__DIR__ . '/responses/uwsfind/service-initial')), // as initial page
                    new Response(200, [], file_get_contents(__DIR__ . '/responses/uwsfind/service-legal-data-2')),
                ])
            )
        );

        /** @var Declaration[] $declarations */
        $declarations = $service->findDeclarations(
            new requests\ByLegalRequest('1137746266460', null, null, null, new DateTime('16.04.2018'), new DateTime('16.04.2018'))
        )->wait();

        $this->assertInternalType('array', $declarations);
        $this->assertCount(1, $declarations);
        $this->assertEquals(Declaration::toDto((object)[
            'CD' => '101;',
            'DT' => '16.04.2018',
            'DTGOTOV' => '24.04.2018',
            'DTR' => '23.04.2018',
            'FR' => 'Р14001',
            'IZM' => 'Вносимые в сведения реестра (форма № Р14001), в том числе в части: наименования юридического лица',
            'NM' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ЛИЗИНГОВАЯ КОМПАНИЯ "ЛИНК"',
            'NUM' => '211845А',
            'OG' => '1137746266460',
            'PREDST' => 'В электронном виде',
            'REG' => 'Межрайонная ИФНС России № 46 по г.Москве',
            'VR' => 'Решение об отказе в государственной регистрации'
        ]), $declarations[0]);
    }
}