<?php

class CustomerLoginPage
{
    const CSS_BODY_CURRENT = '.customer-account-login';

    public static function moveTo(AcceptanceTester $I)
    {
        $I->click('.skip-account');
        $I->click('#header-account li:first-child a');
        self::amOn($I);
        $I->waitForElement(HomePage::LAST_ELEMENT);
    }

    public static function amOn(AcceptanceTester $I)
    {
        $I->waitForElement(self::CSS_BODY_CURRENT);
    }
    
    public function goToCreatePage(AcceptanceTester $I){
        $I->click('.new-users a');
    }
}
