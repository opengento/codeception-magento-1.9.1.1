<?php

class CatalogCategoryPage
{
    const CSS_LINK          = '.nav-1-1 a';
    const CSS_BODY_CURRENT  = '.catalog-category-view';

    public static function moveTo(AcceptanceTester $I)
    {
        $I->moveMouseOver('.nav-1');
        $I->click(self::CSS_LINK);
        self::amOn($I);
        $I->waitForElement(HomePage::LAST_ELEMENT);
    }


    public static function amOn(AcceptanceTester $I) {
        $I->seeElement(self::CSS_BODY_CURRENT);
    }


}