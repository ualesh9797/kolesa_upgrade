<?php

/**
 * Класс для работы с пользователем
 */
class UsersCest
{

    const OWNER = "UaleshKarina";
    const NAME = "Karina";
    const EMAIL = "UKarina@kolesa.kz";

    private $userData = ["email" => self::EMAIL, "owner" => self::OWNER, "name" => self::NAME];
    private $userId;

    /**
     * Тест для проверки создания пользователя
     */
    public function checkUserCreate(\FunctionalTester $I)
    {
        $I->sendPost("human", $this->userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(["status" => "ok"]);
        $I->sendGet("people", $this->userData);
        $this->userId = json_decode($I->grabResponse(), true)[0]["_id"];
    }


    /**
     * Тест для проверки редактирования пользователя
     */
    public function checkUserUpdate(\FunctionalTester $I)
    {
        $this->userData["name"] = "Newname";
        $I->sendPut(sprintf("human?_id=%s", $this->userId), $this->userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(["nModified" => "1"]);
        $I->sendGet("people", $this->userData);
        $I->seeResponseContainsJson($this->userData);
    }

    /**
     * Тест для проверки удаления пользователя
     */
    public function checkUserDelete(\FunctionalTester $I)
    {
        $I->sendDelete(sprintf("human?_id=%s", $this->userId));
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(["deletedCount" => "1"]);
    }
}
