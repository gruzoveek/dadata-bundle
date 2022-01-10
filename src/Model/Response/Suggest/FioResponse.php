<?php

namespace Velhron\DadataBundle\Model\Response\Suggest;

class FioResponse extends SuggestResponse
{
    /** Фамилия */
    public string $surname;

    /** Имя */
    public string $name;

    /** Отчество */
    public string $patronymic;

    /** Пол
     *
     * MALE    — мужской
     * FEMALE  — женский
     * UNKNOWN — не удалось однозначно определить */
    public string $gender;

    /** Код проверки
     *
     * 0 — все части ФИО известны
     * 1 — в ФИО есть неизвестная часть */
    public string $qc;
}
