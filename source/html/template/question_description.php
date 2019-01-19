<?php

class Contents
{
    private $title_length = 35;
    public $noindex = "";
    public $meta = "";
    public $title = "";

    public $tag = "";

    public $question = array(
        "tag" => "認知症",
        "user" => "tomotomo",
        "age" => 50,
        "target" => "(要介護1/90才/男性)",
        "message" => "施設入所している母ですが、部屋が個室になっていて、食事など１日のうち何度か、ホールみたいなとこに連れて行ってもらって、他の方と過ごしているようです。\n\nその時に他の方に興味があるらしく、ケアしてくれてる方にあんなことしてるわよ。。とか色々いうみたいなのです。ケアの方たちは、教えてくれて助かってますよ好意的に言ってくれてはいるのですが、そう母に注意したらいいのかな？と思っています。",
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

    function __construct()
    {
        if (strlen($this->question["message"]) > $this->title_length) {
            $this->question["title"] = mb_substr($this->question["message"], 0, $this->title_length - 1) . "...";
        } else {
            $this->question["title"] = $this->question["message"];
        }

        if (count($this->question["comments"]) < 5) {
            $this->noindex = "<meta name=”robots” content=”noindex” />";
        } else {
            $this->noindex = "";
        }

        $this->meta = "質問：" . $this->question["title"] . count($this->question["comments"]) . "件の回答";

        $this->title = "質問：" . $this->question["title"] . count($this->question["comments"]) . "件の回答" . " | みんなで介護";
    }
}

$contents = new Contents();
//echo count($contents->question["comments"]);

//var_dump($contents)
?>


<div class="tag"><?php echo $contents->question["tag"]; ?></div>
<div class="question">
    <div class="question_wrapper">
        <div class="padding">
            <div class="title"><?php echo $contents->question["title"]; ?></div>
            <div style="margin-top: 10px">
                <div style="float: left;text-align: left">
                    <div><span style="color: #ACE698;"><?php echo $contents->question["user"]; ?></span>&nbsp&nbsp<?php echo $contents->question["age"]; ?>才</div>
                    <div class="target"><?php echo $contents->question["target"]; ?></div>
                </div>
                <div style="float: right;margin-right: 20px">
                    <img src="/img/like.png"><span class="like"><?php echo $contents->question["like"]; ?></span>
                    <img src="/img/comment.png"><span class="comment"><?php echo count($contents->question["comments"]); ?></span>
                </div>
            </div>
            <div class="clear"></div>
            <hr color="#DEDEDE">

            <div style="width: 100%;margin-top: 10px">
                <pre class="message"><?php echo $contents->question["message"]; ?></pre>
            </div>
        </div>
    </div>
    <img src="/img/icon.png" class="icon">
    <div class="clear"></div>
    <div style="float: left">コメント</div>
    <div class="clear"></div>
    <?php foreach ($contents->question["comments"] as $key => $commnet) { ?>
        <div class="comment">
            <div style="width: 400px;background-color: #FFFFFF;border-radius: 5px;float: left;margin-left: 40px">
                <div style="color:#ACE698"><?php echo $commnet["tag"]; ?></div>
                <div><?php echo $commnet["comment"]; ?></div>
                <div style="float: right;color:#ACE698;border-radius: 7px;border: #ACE698;border-style: solid;border-width: 1px;text-align: center;width: 80px;font-size: 16px;">
                    共感&nbsp<?php echo $commnet["like"]; ?><img
                            src="/img/goodjob.png" height="16" width="16"/></div>
            </div>
            <img src="/img/icon.png" height="40" width="40" style="float: left;margin: 30px 0px 0px 40px"/>
        </div>
    <?php } ?>
</div>

