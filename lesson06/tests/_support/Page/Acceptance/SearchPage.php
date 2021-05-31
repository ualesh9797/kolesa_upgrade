<?php

namespace Page\Acceptance;

class SearchPage
{
    // include url of current page
    public static $URL = 'index.php?id_category=11&controller=category';

    public static $categoryNameLabel = ".category-name";
    public static $productListRowGrid = ".product_list.row.grid";
    public static $productListRowList = ".product_list.row.list";
    public static $switchToListButton = "#list";

    public static $SUMMER_DRESSES = "Summer Dresses";


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public function switchToList()
    {
        $this->acceptanceTester->click(self::$switchToListButton);
    }
}
