[![Build Status](https://travis-ci.org/xRubin/unapi-fssp.svg?branch=master)](https://travis-ci.org/xRubin/unapi-fssp)
# Unapi FNS
Модуль для работы с сервисами [Федеральной налоговой службы](https://www.nalog.ru)

Являтся частью библиотеки [Unapi](https://github.com/xRubin/unapi)

Для прохождения капчи нужен любой модуль, реализующий **unapi\anticaptcha\common\AnticaptchaInterface**, например [Unapi Antigate](https://github.com/xRubin/unapi-anticaptcha-antigate)

### Подключение к сервису поиска документов для государственной регистрации
```php
use unapi\fns\common\Anticaptcha;
use unapi\fns\uwsfind\Service;

$service = new Service([
  'anticaptcha' => new Anticaptcha(new AntigateService([...]),
]);
```

### Поиск Документов по юридическому лицу

```php
use unapi\fns\uwsfind\Declaration;
use unapi\fns\uwsfind\requests;

/** @var Declaration[] $declarations */
$declarations = $service->findDeclarations(
  new requests\ByLegalRequest('1027700070518')
)->wait();
```
