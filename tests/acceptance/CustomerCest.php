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
    }


}