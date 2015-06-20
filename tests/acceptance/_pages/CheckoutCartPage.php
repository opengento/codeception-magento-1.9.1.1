<?php

class CheckoutCartPage
{
    const CSS_LINK          = '.nav-1-1 a';
    const CSS_BODY_CURRENT  = '.checkout-cart-index';

    public static function amOn(AcceptanceTester $I) {
        $I->seeElement(self::CSS_BODY_CURRENT);
    }
}