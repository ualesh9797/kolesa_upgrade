<?php

namespace Page\Acceptance;

class LoginPage
{
    // include url of current page
    public static $URL = '?controller=authentication&back=my-account';

    public static $emailSelector = "#email";
    public static $passwordSelector = "#passwd";
    public static $buttonSelector = "#SubmitLogin";

    public static $email = "karinajob21@mail.ru";
    public static $password = "111111";


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
