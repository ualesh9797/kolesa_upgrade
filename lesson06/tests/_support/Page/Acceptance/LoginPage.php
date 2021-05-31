<?php

namespace Page\Acceptance;

class LoginPage
{
    // include url of current page
    public static $URL = '';

    public static $loginInput = "#user-name";
    public static $passwordInput = "#password";
    public static $loginButton = "#login-button";
    public static $errorBlock = ".error-message-container.error";
    public static $errorBlockCloseButton = ".error-message-container.error .error-button";

    public static $username = "locked_out_user";
    public static $password = "secret_sauce";


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public function closeErrorBlock()
    {
        $this->acceptanceTester->click(LoginPage::$errorBlockCloseButton);
    }
}
