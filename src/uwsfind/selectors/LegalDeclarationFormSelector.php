<?php

namespace unapi\fssp\ip\selectors;

class LegalDeclarationFormSelector
{
    public function getList(): array
    {
        return [
            'Р11001' => 'Р11001 - Заявление о создании ЮЛ',
            'Р12001' => 'Р12001 - Заявление о создании ЮЛ при реорганизации',
            'Р12002' => 'Р12002 - Заявление о гос. регистрации АО, создаваемого путем реорганизации в форме разделения или выделения',
            'Р12003' => 'Р12003 - Заявление-уведомление о начале процедуры реорганизации',
            'Р13001' => 'Р13001 - Заявление об изменениях, вносимых в учред.документы',
            'Р13002' => 'Р13002 - Уведомление о внесении изменений в учред.документы',
            'Р14001' => 'Р14001 - Заявление об изменении сведений, не связанных с изменением учред. документов',
            'Р14002' => 'Р14002 - Заявление о нахождении АО в процессе уменьшения УК и/или о стоимости чистых активов АО',
            'Р15001' => 'Р15001 - Уведомление о принятии решения о ликвидации ЮЛ',
            'Р15002' => 'Р15002 - Уведомление о формировании ликвидационной комиссии, назначении ликвидатора',
            'Р15003' => 'Р15003 - Уведомление о составлении промежуточного ликвидационного баланса',
            'Р16001' => 'Р16001 - Заявление о ликвидации',
            'Р16002' => 'Р16002 - Заявление о прекращении унитарного предприятия',
            'Р16003' => 'Р16003 - Заявление о прекращении деятельности при присоединении',
            'Р17001' => 'Р17001 - Сообщение о ЮЛ, созданном до 01.07.2002г',
            'Р18001' => 'Р18001 - Перерегистрация компаний Крыма и Севастополя',
        ];
    }
}