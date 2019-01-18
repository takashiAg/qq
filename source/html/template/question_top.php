<?php
/**
 * Created by PhpStorm.
 * User=> ryo
 * Date=> 2019-01-18
 * Time=> 13=>14
 */

$questions = array(
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

?>


<?php foreach ($questions as $key => $val) { ?>
    <div class="question">
        <div>
            <span class="tag"><?php echo $val["category"]; ?></span>
            <div class="message"><?php echo $val["message"]; ?></div>
            <img src="/img/icon.png" class="icon">
            <div class="info">
                <div class="name"><?php echo $val["name"]; ?><?php echo $val["age"]; ?>才</div>
                <div class="target"><?php echo $val["target"]; ?></div>
            </div>
            <span class="likeandcomment">
                    <img src="/img/like.png"><span class="like"><?php echo $val["like"]; ?></span>
                    <img src="/img/comment.png"><span class="comment"><?php echo $val["comment"]; ?></span>
                </span>
        </div>
    </div>
<?php } ?>




