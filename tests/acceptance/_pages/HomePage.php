<?php

class HomePage
{
    const LAST_ELEMENT      = '.copyright';
    const CSS_BODY_CURRENT  = '.cms-index-index';

    public static function moveTo(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->waitForElement(self::LAST_ELEMENT);
    }

    public static function amOn(AcceptanceTester $I)
    {
        $I->waitForElement(self::CSS_BODY_CURRENT);
    }
}