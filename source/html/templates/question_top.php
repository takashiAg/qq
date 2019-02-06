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

    function get_question_list($count)
    {
        $pickup = array(
            'post_type' => 'mkquestion',
            'tax_query' => array(
                array(
                    'post_type' => 'mkquestion',
                ),
            ),
        );
        $pickup_query = new WP_Query($pickup);
        $data = array();
        $index = 0;
        while ($pickup_query->have_posts() && $index++ < $count) : $pickup_query->the_post();
            $tile = get_the_title();
            $content = get_the_content();
            $id = get_the_id();
            $question = get_post_custom($id);
            $category = array(
                "slug" => get_the_category()[0]->slug,
                "name" => get_the_category()[0]->name
            );
            array_push($data, array($tile, $content, $id, $question, $category));
        endwhile; // end of the loop.
        $return_data = array();
        foreach ($data as $key => $value) {
            array_push($return_data, array(
                "id" => $value[2],
                "category" => $value[4]["name"],
                "slug" => $value[4]["slug"],
                "like" => 15,
                "comment" => 8,
                "name" => $value[3]["username"][0],
                "age" => $value[3]["age"][0],
                "target" => "(" . str_replace("null/", "", str_replace("IND", "自立・非介護", $value[3]["thecare"][0])) . ")",
                "message" => $value[1]
            ));
        }
        $id = array();
        // foreachで1つずつ値を取り出す
        foreach ($return_data as $key => $value) {
            $id[$key] = $value['id'];
        }

        // array_multisortで'id'の列を昇順に並び替える
        array_multisort($id, SORT_ASC, $return_data);
        return $return_data;
    }

    function popularity()
    {
        return $this->get_question_list(10);
    }

    function newest()
    {
        return $this->get_question_list(20);
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

//var_dump($questions->get_question_list(1)[0])

?>
