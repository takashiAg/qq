<?php

class Contents
{
    private $title_length = 35;
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
            "target" => $data["thecare"][0],
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
                    "user" => "かかk",
                    "like" => 1,
                    "comment" => "test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/test message/"
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

        $this->meta = "質問：" . $this->question["title"] . count($this->question["comments"]) . "件の回答";

        $this->title = "質問：" . $this->question["title"] . count($this->question["comments"]) . "件の回答" . " | みんなで介護";
    }
}

//var_dump($post);

$contents = new Contents($post);
?>


