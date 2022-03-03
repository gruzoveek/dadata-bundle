<?php

namespace Gruzoveek\DadataBundle\Model\Request\Find;

class PartyRequest extends FindRequest
{
    /** КПП для поиска по филиалам */
    protected string $kpp;

    /** Головная организация (MAIN) или филиал (BRANCH) */
    protected string $branch_type;

    /** Юр. лицо (LEGAL) или индивидуальный предприниматель (INDIVIDUAL) */
    protected string $type;
}
