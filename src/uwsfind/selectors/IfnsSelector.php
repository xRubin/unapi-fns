<?php

namespace unapi\fssp\ip\selectors;

class IfnsSelector
{
    public function getList(): array
    {
        return [
            '01015' => '0105 - Межрайонная ИФНС России №1 по Республике Адыгея',
            '02123' => '0280 - Межрайонная ИФНС России № 39 по Республике Башкортостан',
            '03045' => '0300 - УФНС России по Республике Бурятия',
            '03048' => '0327 - Межрайонная ИФНС России № 9 по Республике Бурятия',
            '04018' => '0400 - Управление ФНС России по Республике Алтай',
            '05073' => '0506 - Межрайонная ИФНС России № 12 по РД',
            '05061' => '0507 - Межрайонная ИФНС России № 7 по РД',
            '05063' => '0521 - Межрайонная ИФНС России № 9 по РД',
            '05077' => '0523 - Межрайонная ИФНС России № 1 по РД',
            '05056' => '0529 - Межрайонная ИФНС России № 2 по РД',
            '05424' => '0531 - Межрайонная ИФНС России № 16 по РД',
            '05069' => '0533 - Межрайонная ИФНС России № 10 по РД',
            '05067' => '0536 - Межрайонная ИФНС России № 13 по РД',
            '05083' => '0542 - Межрайонная ИФНС России № 3 по РД',
            '05430' => '0544 - Межрайонная ИФНС России № 17 по РД',
            '05062' => '0546 - Межрайонная ИФНС России № 8 по РД',
            '05087' => '0547 - Межрайонная ИФНС России № 15 по РД',
            '05060' => '0548 - Межрайонная ИФНС России № 6 по РД',
            '05425' => '0550 - Межрайонная ИФНС России № 4 по РД',
            '05427' => '0571 - ИФНС России по Ленинскому району г.Махачкалы',
            '06007' => '0600 - УФНС России по Республике Ингушетия',
            '06009' => '0608 - Межрайонная ИФНС России №1 по Республике Ингушетия',
            '07013' => '0700 - Управление ФНС России по Кабардино-Балкарской Республике',
            '07016' => '0716 - МР ИФНС России №4 по КБР',
            '07017' => '0718 - МРИ ФНС России №2 по КБР',
            '07019' => '0720 - МРИ ФНС России №5 по КБР',
            '07029' => '0724 - МР ИФНС России №6 по КБР',
            '07030' => '0725 - ИФНС России № 1 по г.Нальчику КБР',
            '07031' => '0726 - ИФНС России № 2 по г.Нальчику КБР',
            '08010' => '0800 - УФНС России по Республике Калмыкия',
            '08033' => '0816 - ИФНС России по г.Элисте',
            '09020' => '0900 - УФНС по КЧР',
            '09100' => '0917 - Межрайонная ИФНС России № 3 по КЧР',
            '10020' => '1001 - ИФНС России по г.Петрозаводску',
            '11024' => '1101 - ИФНС России по г. Сыктывкару',
            '12004' => '1215 - ИФНС России по г. Йошкар-Оле',
            '13035' => '1326 - ИФНС России по Ленинскому району г. Саранска',
            '14106' => '1400 - Управление ФНС России по Республике Саха (Якутия)',
            '14105' => '1447 - Межрайонная ИФНС России № 5 по Республике Саха (Якутия)',
            '15028' => '1513 - Межрайонная ИФНС России по г. Владикавказу',
            '16153' => '1690 - Межрайонная ИФНС России №18 по Республике Татарстан',
            '17039' => '1700 - УФНС России по Республике Тыва',
            '17021' => '1719 - Межрайонная ИФНС России № 1 по Республике Тыва',
            '18051' => '1832 - Межрайонная ИФНС России № 11 по Удмуртской Республике',
            '19025' => '1900 - УФНС России по Республике Хакасия',
            '19024' => '1901 - Межрайонная ИФНС России №1 по Республике Хакасия',
            '19019' => '1902 - Межрайонная ИФНС России №2 по Республике Хакасия',
            '19020' => '1903 - Межрайонная ИФНС России №3 по Республике Хакасия',
            '20033' => '2036 - Межрайонная ИФНС России №6 по Чеченской Республике',
            '21183' => '2130 - ИФНС России по г. Чебоксары',
            '22093' => '2225 - Межрайонная ИФНС России № 15 по Алтайскому краю',
            '23108' => '2300 - УФНС России по Краснодарскому краю',
            '23055' => '2304 - ИФНС России по городу-курорту Геленджику Краснодарского края',
            '23338' => '2375 - Межрайонная ИФНС России № 16 по Краснодарскому краю',
            '24106' => '2400 - УФНС России по Красноярскому краю',
            '24270' => '2468 - Межрайонная ИФНС России № 23 по Красноярскому краю',
            '25060' => '2500 - УФНС России по Приморскому краю',
            '25038' => '2501 - Межрайонная ИФНС России №4 по Приморскому краю',
            '25039' => '2502 - Межрайонная ИФНС России № 10 по Приморскому краю',
            '25040' => '2503 - Межрайонная ИФНС России № 1 по Приморскому краю',
            '25041' => '2505 - Межрайонная ИФНС России № 6 по Приморскому краю',
            '25042' => '2506 - Межрайонная ИФНС России № 2 по Приморскому краю',
            '25043' => '2507 - Межрайонная ИФНС России № 7 по Приморскому краю',
            '25044' => '2508 - ИФНС России по г.Находке Приморского края',
            '25045' => '2509 - Межрайонная ИФНС России №8 по Приморскому краю',
            '25046' => '2510 - Межрайонная ИФНС России № 3 по Приморскому краю',
            '25047' => '2511 - Межрайонная ИФНС России №9 по Приморскому краю',
            '25048' => '2515 - Межрайонная ИФНС России № 5 по Приморскому краю',
            '25054' => '2533 - Межрайонная ИФНС России №11 по Приморскому краю',
            '25055' => '2536 - ИФНС России по Ленинскому району г. Владивостока',
            '26176' => '2651 - Межрайонная ИФНС России № 11 по Ставропольскому краю',
            '27035' => '2700 - УФНС России по Хабаровскому краю',
            '27040' => '2724 - ИФНС России по Железнодорожному району г.Хабаровска',
            '28045' => '2800 - УФНС России по Амурской области',
            '28037' => '2801 - МИ ФНС России № 1 по Амурской области',
            '29031' => '2901 - ИФНС России по г. Архангельску',
            '30108' => '3025 - Межрайонная ИФНС России № 6 по Астраханской области',
            '31047' => '3100 - УФНС России по Белгородской области',
            '31032' => '3123 - ИФНС России по г. Белгороду',
            '32045' => '3241 - Межрайонная ИФНС России № 1 по Брянской области',
            '32084' => '3252 - Межрайонная ИФНС России № 7 по Брянской области',
            '32085' => '3253 - Межрайонная ИФНС России № 8 по Брянской области',
            '32109' => '3256 - Межрайонная ИФНС России № 10 по Брянской области',
            '33047' => '3300 - УФНС России по Владимирской области',
            '33039' => '3328 - ИФНС России по Октябрьскому району г. Владимира',
            '34057' => '3400 - УФНС России по Волгоградской области',
            '34042' => '3435 - ИФНС России по г.Волжскому Волгоградской области',
            '34045' => '3443 - ИФНС России по Дзержинскому району г. Волгограда',
            '34050' => '3453 - Межрайонная ИФНС России № 3 по Волгоградской области',
            '34051' => '3454 - Межрайонная ИФНС России № 4 по Волгоградской области',
            '34052' => '3455 - Межрайонная ИФНС России № 5 по Волгоградской области',
            '34053' => '3456 - Межрайонная ИФНС России № 6 по Волгоградской области',
            '34054' => '3457 - Межрайонная ИФНС России № 7 по Волгоградской области',
            '34055' => '3458 - Межрайонная ИФНС России № 8 по Волгоградской области',
            '35044' => '3500 - УФНС России по Вологодской области',
            '35032' => '3525 - Межрайонная ИФНС России № 11 по Вологодской области',
            '35033' => '3528 - Межрайонная ИФНС России № 12 по Вологодской области',
            '35034' => '3529 - Межрайонная ИФНС России № 1 по Вологодской области',
            '35037' => '3532 - Межрайонная ИФНС России № 4 по Вологодской области',
            '35038' => '3533 - Межрайонная ИФНС России № 5 по Вологодской области',
            '35040' => '3535 - Межрайонная ИФНС России № 7 по Вологодской области',
            '35041' => '3536 - Межрайонная ИФНС России № 8 по Вологодской области',
            '35042' => '3537 - Межрайонная ИФНС России № 9 по Вологодской области',
            '35043' => '3538 - Межрайонная ИФНС России № 10 по Вологодской области',
            '36057' => '3600 - УФНС России по Воронежской области',
            '36059' => '3668 - Межрайонная ИФНС России № 12 по Воронежской области',
            '37030' => '3700 - УФНС России по Ивановской области',
            '37032' => '3702 - ИФНС России по г. Иваново',
            '38076' => '3800 - УФНС России по Иркутской области',
            '38146' => '3850 - Межрайонная ИФНС России № 17 по Иркутской области',
            '39048' => '3926 - Межрайонная ИФНС России № 1 по Калининградской области',
            '40046' => '4027 - ИФНС России по Ленинскому округу г. Калуги',
            '41019' => '4101 - ИФНС России по г.Петропавловску-Камчатскому',
            '42071' => '4200 - УФНС России по Кемеровской области',
            '42046' => '4202 - Межрайонная ИФНС России № 3 по Кемеровской области',
            '42049' => '4205 - ИФНС России по г. Кемерово',
            '42051' => '4212 - Межрайонная ИФНС России № 2 по Кемеровской области',
            '42052' => '4213 - Межрайонная ИФНС России № 1 по Кемеровской области',
            '42053' => '4214 - Межрайонная ИФНС России № 8 по Кемеровской области',
            '42055' => '4217 - ИФНС России по Центральному району г. Новокузнецка Кемеровской области',
            '42059' => '4222 - Межрайонная ИФНС России № 5 по Кемеровской области',
            '42060' => '4223 - Межрайонная ИФНС России № 11 по Кемеровской области',
            '42063' => '4230 - Межрайонная ИФНС России № 7 по Кемеровской области',
            '42069' => '4246 - Межрайонная ИФНС России № 9 по Кемеровской области',
            '42073' => '4250 - Межрайонная ИФНС России № 12 по Кемеровской области',
            '42104' => '4252 - Межрайонная ИФНС России №13 по Кемеровской области',
            '42105' => '4253 - Межрайонная ИФНС России №4 по Кемеровской области',
            '43066' => '4300 - УФНС России по Кировской области',
            '43082' => '4350 - Межрайонная ИФНС России № 14 по Кировской области',
            '44033' => '4400 - УФНС России по Костромской области',
            '44034' => '4401 - ИФНС по г. Костроме',
            '45029' => '4501 - Инспекция ФНС России по г.Кургану',
            '46065' => '4600 - УФНС России по Курской области',
            '46062' => '4632 - ИФНС России по г.Курску',
            '47045' => '4700 - УФНС России по Ленинградской области',
            '47028' => '4704 - ИФНС России по Выборгскому району Ленинградской области',
            '48069' => '4827 - Межрайонная ИФНС России № 6 по Липецкой области',
            '49015' => '4900 - УФНС России по Магаданской области',
            '49012' => '4910 - Межрайонная ИФНС России № 1 по Магаданской области',
            '49013' => '4911 - Межрайонная ИФНС России № 2 по Магаданской области',
            '49014' => '4912 - Межрайонная ИФНС России № 3 по Магаданской области',
            '50130' => '5000 - УФНС России по Московской области',
            '50066' => '5001 - ИФНС России по г.Балашихе Московской области',
            '50067' => '5003 - Межрайонная ИФНС России №14 по Московской области',
            '50068' => '5004 - Межрайонная ИФНС России №19 по Московской области',
            '50069' => '5005 - ИФНС России по г.Воскресенску Московской области',
            '50071' => '5007 - ИФНС России по г.Дмитрову Московской области',
            '50073' => '5009 - ИФНС России по г.Домодедово Московской области',
            '50074' => '5010 - Межрайонная ИФНС России №12 по Московской области',
            '50076' => '5011 - ИФНС России по г.Егорьевску Московской области',
            '50129' => '5012 - Межрайонная ИФНС России №20 по Московской области',
            '50081' => '5017 - ИФНС России по г.Истре Московской области',
            '50082' => '5018 - Межрайонная ИФНС России №2 по Московской области',
            '50083' => '5019 - Межрайонная ИФНС России №18 по Московской области',
            '50084' => '5020 - ИФНС России по г.Клину Московской области',
            '50201' => '5022 - Межрайонная ИФНС России №7 по Московской области',
            '50088' => '5024 - ИФНС России по г.Красногорску Московской области',
            '50091' => '5027 - Межрайонная ИФНС России №17 по Московской области',
            '50093' => '5029 - ИФНС России по г.Мытищи Московской области',
            '50094' => '5030 - ИФНС России по г.Наро-Фоминску Московской области',
            '50096' => '5031 - ИФНС России по г.Ногинску Московской области',
            '50097' => '5032 - Межрайонная ИФНС России №22 по Московской области',
            '50099' => '5034 - Межрайонная ИФНС России №10 по Московской области',
            '50100' => '5035 - ИФНС России по г.Павловскому Посаду Московской области',
            '50103' => '5038 - Межрайонная ИФНС России №3 по Московской области',
            '50104' => '5040 - Межрайонная ИФНС России №1 по Московской области',
            '50106' => '5042 - ИФНС России по г.Сергиеву Посаду Московской области',
            '50107' => '5043 - Межрайонная ИФНС России №11 по Московской области',
            '50108' => '5044 - ИФНС России по г.Солнечногорску Московской области',
            '50109' => '5045 - ИФНС России по г.Ступино Московской области',
            '50111' => '5047 - Межрайонная ИФНС России №13 по Московской области',
            '50112' => '5048 - ИФНС России по г.Чехову Московской области',
            '50113' => '5049 - Межрайонная ИФНС России №4 по Московской области',
            '50115' => '5050 - Межрайонная ИФНС России №16 по Московской области',
            '50117' => '5053 - ИФНС России по г.Электростали Московской области',
            '50121' => '5072 - Межрайонная ИФНС России №8 по Московской области',
            '50123' => '5074 - Межрайонная ИФНС России №5 по Московской области',
            '50124' => '5075 - Межрайонная ИФНС России №21 по Московской области',
            '51005' => '5102 - Межрайонная ИФНС России № 1 по Мурманской области',
            '51010' => '5105 - Межрайонная ИФНС России № 7 по Мурманской области',
            '51016' => '5107 - ИФНС России по г. Мончегорску Мурманской области',
            '51019' => '5108 - Межрайонная ИФНС России № 5 по Мурманской обл.',
            '51024' => '5110 - Межрайонная ИФНС России № 2 по Мурманской области',
            '51062' => '5118 - Межрайонная ИФНС России № 8 по Мурманской области',
            '51036' => '5190 - ИФНС России по г. Мурманску',
            '52198' => '5275 - МРИ ФНС России № 15 по Нижегородской области',
            '53028' => '5300 - УФНС России по Новгородской области',
            '53027' => '5321 - Межрайонная ИФНС России № 9 по Новгородской области',
            '53029' => '5331 - Межрайонная ИФНС России №1 по Новгородской области',
            '53030' => '5332 - Межрайонная ИФНС России № 2 по Новгородской области',
            '53034' => '5336 - Межрайонная ИФНС России №6 по Новгородской области',
            '54147' => '5400 - УФНС России по Новосибирской области',
            '54189' => '5476 - Межрайонная ИФНС России № 16 по Новосибирской области',
            '55041' => '5500 - Управление ФНС России по Омской области',
            '55222' => '5543 - Межрайонная ИФНС России № 12 по Омской области',
            '56175' => '5658 - Межрайонная ИФНС России № 10 по Оренбургской области',
            '57106' => '5749 - Межрайонная ИФНС России №9 по Орловской области',
            '58106' => '5800 - УФНС России по Пензенской области',
            '58102' => '5835 - ИФНС России по Октябрьскому району г.Пензы',
            '59155' => '5958 - Межрайонная ИФНС России № 17 по Пермскому краю',
            '60033' => '6000 - УФНС России по Псковской области',
            '60032' => '6027 - Межрайонная ИФНС России № 1 по Псковской области',
            '61113' => '6100 - УФНС по Ростовской обл.',
            '61137' => '6196 - Межрайонная ИФНС России № 26 по Ростовской области',
            '62066' => '6200 - УФНС России по Рязанской области',
            '62036' => '6214 - Межрайонная ИФНС России №7 по Рязанской области',
            '62039' => '6219 - Межрайонная ИФНС России №5 по Рязанской области',
            '62042' => '6225 - Межрайонная ИФНС России №10 по Рязанской области',
            '62043' => '6226 - Межрайонная ИФНС России №9 по Рязанской области',
            '62045' => '6232 - Межрайонная ИФНС России №4 по Рязанской области',
            '62067' => '6234 - Межрайонная ИФНС России №2 по Рязанской области',
            '63003' => '6313 - ИФНС России по Красноглинскому району г. Самары',
            '64027' => '6451 - Межрайонная ИФНС России №19 по Саратовской области',
            '65023' => '6500 - УФНС России по Сахалинской области',
            '65024' => '6501 - Межрайонная ИФНС России № 1 по Сахалинской области',
            '65026' => '6504 - Межрайонная ИФНС России № 5 по Сахалинской области',
            '65029' => '6507 - Межрайонная ИФНС России № 3 по Сахалинской области',
            '65031' => '6509 - Межрайонная ИФНС России № 2 по Сахалинской области',
            '65034' => '6517 - Межрайонная ИФНС России № 4 по Сахалинской области',
            '66080' => '6600 - Управление ФНС России по Свердловской области',
            '66121' => '6658 - ИФНС России по Верх-Исетскому району г.Екатеринбурга',
            '67044' => '6700 - УФНС России по Смоленской области',
            '67047' => '6733 - Межрайонная ИФНС России № 5 по Смоленской области',
            '68034' => '6800 - УФНС России по Тамбовской области',
            '68041' => '6820 - Межрайонная ИФНС России №4 по Тамбовской области',
            '69046' => '6906 - Межрайонная ИФНС России № 2 по Тверской области',
            '69047' => '6908 - Межрайонная ИФНС России № 3 по Тверской области',
            '69048' => '6910 - Межрайонная ИФНС России № 4 по Тверской области',
            '69050' => '6912 - Межрайонная ИФНС России № 5 по Тверской области',
            '69051' => '6913 - Межрайонная ИФНС России № 6 по Тверской области',
            '69052' => '6914 - Межрайонная ИФНС России № 7 по Тверской области',
            '69053' => '6915 - Межрайонная ИФНС России № 8 по Тверской области',
            '69345' => '6952 - Межрайонная ИФНС России № 12 по Тверской области',
            '70022' => '7000 - УФНС России по Томской области',
            '70118' => '7031 - Межрайонная ИФНС России №7 по Томской области',
            '71033' => '7100 - УФНС России по Тульской области',
            '71093' => '7154 - Межрайонная ИФНС России № 10 по Тульской области',
            '72234' => '7232 - Межрайонная ИФНС России № 14 по Тюменской области',
            '73043' => '7325 - ИФНС России по Ленинскому району г.Ульяновска',
            '74102' => '7400 - УФНС России по Челябинской области',
            '74194' => '7456 - Межрайонная ИФНС России № 17 по Челябинской области',
            '75061' => '7500 - УФНС России по Забайкальскому краю',
            '75038' => '7505 - Межрайонная ИФНС России № 5 по Забайкальскому краю',
            '75044' => '7513 - Межрайонная ИФНС России № 6 по Забайкальскому краю',
            '75054' => '7527 - Межрайонная ИФНС России № 7 по Забайкальскому краю',
            '75057' => '7530 - Межрайонная ИФНС России № 4 по Забайкальскому краю',
            '75070' => '7536 - Межрайонная ИФНС России № 2 по г. Чите',
            '75071' => '7538 - Межрайонная ИФНС России № 8 по Забайкальскому краю',
            '75060' => '7580 - Межрайонная ИФНС России № 1 по Забайкальскому краю',
            '76036' => '7627 - Межрайонная ИФНС России № 7 по Ярославской области',
            '77031' => '7700 - УФНС России по г.Москве',
            '77066' => '7746 - Межрайонная ИФНС России № 46 по г.Москве',
            '78021' => '7800 - УФНС России по Санкт-Петербургу',
            '78003' => '7801 - Межрайонная ИФНС России № 16 по Санкт-Петербургу',
            '78004' => '7802 - Межрайонная ИФНС России №17 по Санкт-Петербургу',
            '78005' => '7804 - Межрайонная ИФНС России №18 по Санкт-Петербургу',
            '78006' => '7805 - Межрайонная ИФНС России №19 по Санкт-Петербургу',
            '78007' => '7806 - Межрайонная ИФНС России №21 по Санкт-Петербургу',
            '78008' => '7807 - Межрайонная ИФНС России №22 по Санкт-Петербургу',
            '78009' => '7810 - Межрайонная ИФНС России №23 по Санкт-Петербургу',
            '78010' => '7811 - Межрайонная ИФНС России №24 по Санкт-Петербургу',
            '78011' => '7813 - Межрайонная ИФНС России №25 по Санкт-Петербургу',
            '78012' => '7814 - Межрайонная ИФНС России №26 по Санкт-Петербургу',
            '78013' => '7816 - Межрайонная ИФНС России №27 по Санкт-Петербургу',
            '78014' => '7817 - Межрайонная ИФНС России №20 по Санкт-Петербургу',
            '78016' => '7819 - Межрайонная ИФНС России №3 по Санкт-Петербургу',
            '78017' => '7820 - Межрайонная ИФНС России №2 по Санкт-Петербургу',
            '78079' => '7838 - Межрайонная ИФНС России №7 по Санкт-Петербургу',
            '78080' => '7839 - Межрайонная ИФНС России №8 по Санкт-Петербургу',
            '78081' => '7840 - Межрайонная ИФНС России №9 по Санкт-Петербургу',
            '78082' => '7841 - Межрайонная ИФНС России №10 по Санкт-Петербургу',
            '78083' => '7842 - Межрайонная ИФНС России №11 по Санкт-Петербургу',
            '78084' => '7843 - Межрайонная ИФНС России №12 по Санкт-Петербургу',
            '78086' => '7847 - Межрайонная ИФНС России №15 по Санкт-Петербургу',
            '78087' => '7848 - Межрайонная ИФНС России №28 по Санкт-Петербургу',
            '79004' => '7901 - ИФНС России по г.Биробиджану Еврейской автономной области',
            '86042' => '8600 - УФНС России по Ханты-Мансийскому автономному округу-Югре',
            '86038' => '8617 - ИФНС России по Сургутскому району Ханты-Мансийского автономного округа - Югры',
            '87014' => '8700 - УФНС России по Чукотскому АО',
            '87013' => '8709 - Межрайонная ИФНС России №1 по Чукотскому автономному округу',
            '89017' => '8901 - Межрайонная ИФНС России № 1 по Ямало-Ненецкому автономному округу',
            '91002' => '9102 - ИФНС России по г.Симферополю',
            '91104' => '9103 - Межрайонная ИФНС России № 8 по Республике Крым',
            '91105' => '9105 - Межрайонная ИФНС России № 1 по Республике Крым',
            '91106' => '9108 - Межрайонная ИФНС России № 4 по Республике Крым',
            '91107' => '9110 - Межрайонная ИФНС России № 6 по Республике Крым',
            '91108' => '9111 - Межрайонная ИФНС России № 7 по Республике Крым',
            '92002' => '9204 - ИФНС России по Ленинскому району г.Севастополя',
            '99003' => '9901 - ИФНС России по городу и космодрому Байконуру',
        ];
    }
}