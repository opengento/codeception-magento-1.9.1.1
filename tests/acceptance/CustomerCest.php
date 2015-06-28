<?php
use \AcceptanceTester;

class CustomerCest
{

    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function createAccountAndLogout(AcceptanceTester $I){

        CustomerLoginPage::moveTo($I);
        CustomerLoginPage::goToCreatePage($I);

        CustomerCreatePage::amOn($I);
        CustomerCreatePage::fillRegisterForm($I);

        CustomerAccountIndexPage::amOn($I);
        CustomerAccountIndexPage::logout($I);

        HomePage::amOn($I);
    }


}