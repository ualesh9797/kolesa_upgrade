<?php

namespace Page\Acceptance;



class CabinetPage
{
    public static $URL = '';

    public static $linkToMyWishListSelector = 'a[href*="mywishlist"]';
    public static $wishListQtyTdSelector = 'table>tbody>tr:nth-child(1)>td:nth-child(2)';
    public static $wishListDeleteTdSelector = 'table>tbody>tr:nth-child(1)>td:nth-child(6) a';

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
}
