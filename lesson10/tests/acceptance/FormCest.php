<?php

namespace Tests\Acceptance;

use Page\Acceptance\FormPage;
use Faker\Factory;
use Helper\CustomFakerProvider;

class FormCest
{
    /**
     * Тест для проверки заполнения формы с помощью фейкера
     */
    public function checkFillForm(\AcceptanceTester $I)
    {

        $formPage = new FormPage($I);

        $faker = Factory::create("kk_KZ");
        $faker->addProvider(new CustomFakerProvider($faker));

        $firstName = $faker->name;
        $lastName = $faker->lastName;
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->region;
        $postal = $faker->postcode;

        $I->amOnPage(FormPage::$URL);
        $I->fillField(FormPage::$firstName, $firstName);
        $I->fillField(FormPage::$lastName, $lastName);
        $I->fillField(FormPage::$email, $faker->email);
        $I->fillField(FormPage::$phoneNumber, $faker->phoneNumber);
        $I->fillField(FormPage::$address, $address);
        $I->fillField(FormPage::$city, $city);
        $I->fillField(FormPage::$state, $state);
        $I->fillField(FormPage::$postal, $postal);

        $formPage->expandCreditCardForm();
        $I->fillField(FormPage::$firstNameCard, $firstName);
        $I->fillField(FormPage::$lastNameCard, $lastName);
        $I->fillField(FormPage::$crediCardNumber, $faker->getRandomCreditCardNumber);
        $I->fillField(FormPage::$securityCode, random_int(100, 999));
        $formPage->selectCreditCardExpirationMonth();
        $formPage->selectCreditCardExpirationYear();
        $I->fillField(FormPage::$addressCard, $address);
        $I->fillField(FormPage::$cityCard, $city);
        $I->fillField(FormPage::$stateCard, $state);
        $I->fillField(FormPage::$postalCard, $postal);
        $formPage->selectCreditCardCountry();

        $I->click(FormPage::$registerButton);
        $I->waitForText("Good job");
    }
}
