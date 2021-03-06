<?php
use \AcceptanceTester;

class GeneralCest
{

    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function testNoDeadPages(AcceptanceTester $I) {
        $I->seeElement(HomePage::LAST_ELEMENT);
    }

    public function iAddAProductToCart(AcceptanceTester $I){
        CatalogProductConfigurablePage::moveTo($I);
        CatalogProductConfigurablePage::addToCart($I);
        CheckoutCartPage::amOn($I);
    }


}