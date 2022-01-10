<?php

namespace Velhron\DadataBundle\Traits;

trait Email
{
    /** email одной строкой как в ЕГРЮЛ */
    public string $source;

    /** Локальная часть адреса (то, что до «собачки») */
    public string $local;

    /** Домен (то, что после «собачки») */
    public string $domain;
}
