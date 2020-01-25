<?php declare(strict_types=1);

namespace CnbApi\Translator;

use CnbApi\Entity\ExchangeRate;

interface ITranslator
{
    public function setContent(string $content): ITranslator;

    public function getEntity(): ExchangeRate;
}
