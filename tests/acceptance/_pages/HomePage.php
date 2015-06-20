<?php

class HomePage
{
    const LAST_ELEMENT = '.copyright';

    public static function moveTo(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->waitForElement(self::LAST_ELEMENT);
    }
}