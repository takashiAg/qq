<?php

/**
 * Created by PhpStorm.
 * User=> ryo
 * Date=> 2019-01-18
 * Time=> 13=>14
 */
class question
{
    function __construct()
    {

    }

    function popularity()
    {
        return $this->popularity;
    }

    function newest()
    {
        return $this->newest;
    }

    private $popularity = array(
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        )
    );
    private $newest = array(
        array(
            "category" => "tag1", "like" => 1, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "新着の質問１"
        ),
        array(
            "category" => "tag2", "like" => 2, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "新着の質問２"
        ),
        array(
            "category" => "tag3", "like" => 3, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "新着の質問3"
        ),
    );
}

$questions = new question();

?>







