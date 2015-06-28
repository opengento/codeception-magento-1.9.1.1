<?php

class CustomerAccountIndexPage
{
    const CSS_BODY_CURRENT = '.customer-account-index';

    public static function amOn(AcceptanceTester $I)
    {
        $I->seeElement(self::CSS_BODY_CURRENT);
    }
    
    public static function logout(AcceptanceTester $I) {
        $I->click('.skip-account');
        $I->click('#header-account li:last-child a');
    }
}
