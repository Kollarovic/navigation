<?php

namespace Kollarovic\Navigation\Test;

use Nette\Localization\ITranslator;


class MockTranslator implements ITranslator
{

    function translate($message, $count = null)
    {
        return $message;
    }

}