<?php

class CatalogProductConfigurablePage
{
    const CSS_LINK = '.products-grid li:first-child .product-name a';
    const CSS_BODY_CURRENT = '.catalog-product-view';

    const ALREADY_ON_CATEGORY_PAGE = false;

    public static function moveTo(AcceptanceTester $I, $iComeFromHomePage = true)
    {

        if ($iComeFromHomePage) {
            CatalogCategoryPage::moveTo($I);
        }

        $I->click(self::CSS_LINK);
        self::amOn($I);
        $I->waitForElement(HomePage::LAST_ELEMENT);
    }

    public static function amOn(AcceptanceTester $I)
    {
        $I->seeElement(self::CSS_BODY_CURRENT);
    }

    public static function addToCart(AcceptanceTester $I)
    {
        // Configurable product Tori Tank sample data
        $I->click('#swatch26');
        $I->click('#swatch78');
        $I->moveMouseOver('.btn-cart');
        $I->click('.add-to-cart-buttons .btn-cart');
    }
}
