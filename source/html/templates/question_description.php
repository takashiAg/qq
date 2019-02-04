<?php

class Contents
{
    private $title_length = 15;
    public $noindex = "";
    public $meta = "";
    public $title = "";

    public $tag = "";
    public $question = null;
//    public $question = array(
//        "tag" => "認知症",
//        "user" => "tomotomo",
//        "age" => 50,
//        "target" => "(要介護1/90才/男性)",
//        "message" => "施設入所している母ですが、部屋が個室になっていて、食事など１日のうち何度か、ホールみたいなとこに連れて行ってもらって、他の方と過ごしているようです。\n\nその時に他の方に興味があるらしく、ケアしてくれてる方にあんなことしてるわよ。。とか色々いうみたいなのです。ケアの方たちは、教えてくれて助かってますよ好意的に言ってくれてはいるのですが、そう母に注意したらいいのかな？と思っています。",
//        "like" => 15,
//        "comments" => array(
//            array(
//                "user" => "ぷら",
//                "like" => 34,
//                "comment" => "お疲れ様です。注意はしなくてもいいのではないでしょうか？職員としては正直うるさいと思う時もあると思いますが、本当に助かっている時もあると思います。お母様は、お世話好きなのでしょうか？お母様が楽しく過ごされているなら気にされなくていいと思います。"
//            ),
//            array(
//                "user" => "かかk",
//                "like" => 1,
//                "comment" => "test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/"
//            ),
//            array(
//                "user" => "ぷら",
//                "like" => 1,
//                "comment" => "お疲れ様です。注意はしなくてもいいのではないでしょうか？職員としては正直うるさいと思う時もあると思いますが、本当に助かっている時もあると思います。お母様は、お世話好きなのでしょうか？お母様が楽しく過ごされているなら気にされなくていいと思います。"
//            ),
//        ),
//    );

    function __construct($p)
    {
        $data = get_post_custom($p->ID);
        $this->question = array(
            "tag" => "認知症",
            "user" => $data["username"][0],
            "age" => $data["age"][0],
            "target" => str_replace("null/", "", str_replace("IND", "自立・非介護", $data["thecare"][0])),
            "sex" => $data["sex"][0],
            "message" => $p->post_content,
            "like" => 15,
            "comments" => array(
                array(
                    "user" => "ぷら",
                    "like" => 34,
                    "comment" => "お疲れ様です。注意はしなくてもいいのではないでしょうか？職員としては正直うるさいと思う時もあると思いますが、本当に助かっている時もあると思います。お母様は、お世話好きなのでしょうか？お母様が楽しく過ごされているなら気にされなくていいと思います。"
                ),
                array(
                    "user" => "ぷら",
                    "like" => 1,
                    "comment" => "お疲れ様です。注意はしなくてもいいのではないでしょうか？職員としては正直うるさいと思う時もあると思いますが、本当に助かっている時もあると思います。お母様は、お世話好きなのでしょうか？お母様が楽しく過ごされているなら気にされなくていいと思います。"
                ),
            ),
        );
        if (mb_strlen($this->question["message"]) > $this->title_length) {
            $this->question["title"] = mb_substr($this->question["message"], 0, $this->title_length - 1) . "...";
        } else {
            $this->question["title"] = $this->question["message"];
        }

        if (mb_strlen($this->question["message"]) < 100) {
            $this->noindex = "<meta name=\"robots\" content=\"noindex\" />";
        } else {
            $this->noindex = "";
        }


        //↓↓↓↓ like that ↓↓↓↓
        //<title id="title">認知症の相談「要介護認定されてから車椅子やベ...」byたかゆこ | みんなで介護</title>
        $user = $this->question["user"] . "";
        $target = $this->question["target"] . "";
        $tag = $this->question["tag"] . "";
        $title = mb_substr($this->question["message"], 0, 15) . "";
        $short_message = mb_substr($this->question["message"], 0, 43) . "";
        $count = count($this->question["comments"]) . "";
        $this->title = $tag . "の相談「" . $title . "...」by" . $user . " | みんなで介護";
        $this->meta = "家族介護の相談アプリ「みんなで介護」に投稿された" . $tag . "の相談です。「" . $short_message . "...」" . $count . "件の回答 by" . $user ."(". $target . ") | みんなで介護";
    }
}

//var_dump($post);

$contents = new Contents($post);
?>


