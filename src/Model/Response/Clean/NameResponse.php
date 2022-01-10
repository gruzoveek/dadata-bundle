<?php

namespace Velhron\DadataBundle\Model\Response\Clean;

class NameResponse extends CleanResponse
{
    /** ФИО в родительном падеже (кого?) */
    public string $resultGenitive;

    /** ФИО в дательном падеже (кому?) */
    public string $resultDative;

    /** ФИО в творительном падеже (кем?) */
    public string $resultAblative;

    /** Фамилия */
    public string $surname;

    /** Имя */
    public string $name;

    /** Отчество */
    public string $patronymic;

    /** Пол
     *
     * Возможные значения:
     * М - мужской
     * Ж - женский
     * НД - не удалось однозначно определить */
    public string $gender;
}
