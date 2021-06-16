<?php

namespace Page\Acceptance;

class FormPage
{
    // include url of current page
    public static $URL = '';

    public static $firstName = "#firstName";
    public static $lastName = "#lastName";
    public static $email = "*[type='email']";
    public static $phoneNumber = "#phoneNumber";
    public static $address = "#address";
    public static $city = "#city";
    public static $state = "#state";
    public static $postal = "#postal";

    public static $creditCardRadioInput = "#input_32_paymentType_credit";
    public static $firstNameCard = "#input_32_cc_firstName";
    public static $lastNameCard = "#input_32_cc_lastName";
    public static $crediCardNumber = "#input_32_cc_number";
    public static $securityCode = "#input_32_cc_ccv";
    public static $expirationMonth = "#input_32_cc_exp_month";
    public static $expirationMonthOption = "#input_32_cc_exp_month option:nth-child(%d)";
    public static $expirationYear = "#input_32_cc_exp_year";
    public static $expirationYearOption = "#input_32_cc_exp_year option:nth-child(%d)";
    public static $addressCard = "#input_32_addr_line1";
    public static $cityCard = "#input_32_city";
    public static $stateCard = "#state";
    public static $postalCard = "#postal";
    public static $country = "#input_32_country";
    public static $countryOption = "option[value='Kazakhstan']";


    public static $registerButton = "*[type='submit']";


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public function expandCreditCardForm()
    {
        $this->acceptanceTester->click(self::$creditCardRadioInput);
    }

    public function selectCreditCardExpirationMonth()
    {
        $this->acceptanceTester->click(self::$expirationMonth);
        $this->acceptanceTester->click(sprintf(self::$expirationMonthOption, random_int(2, 13)));
    }

    public function selectCreditCardExpirationYear()
    {
        $this->acceptanceTester->click(self::$expirationYear);
        $this->acceptanceTester->click(sprintf(self::$expirationYearOption, random_int(2, 11)));
    }

    public function selectCreditCardCountry()
    {
        $this->acceptanceTester->click(self::$country);
        $this->acceptanceTester->click(self::$countryOption);
    }
}
