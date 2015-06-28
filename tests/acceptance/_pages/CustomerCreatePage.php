<?php

class CustomerCreatePage
{
    const CSS_BODY_CURRENT = '.customer-account-create';

    public static function amOn(AcceptanceTester $I)
    {
        $I->waitForElement(self::CSS_BODY_CURRENT);
    }
    
    public static function fillRegisterForm(AcceptanceTester $I){

        $email    = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8) . '@yopmail.com';
        $password = 'Dummy Password';

        $I->submitForm('#form-validate', array(
            'firstname'     => 'Dummy Firstname',
            'lastname'      => 'Dummy Lastname',
            'email'         => $email,
            'password'      => $password,
            'confirmation'  => $password,
        ));
    }
}
