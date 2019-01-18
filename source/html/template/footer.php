<?php
/**
 * Created by PhpStorm.
 * User=> ryo
 * Date=> 2019-01-18
 * Time=> 11=>55
 */

$footer = array(
    array(
        array("name" => "トップページ", "href" => "/top"),
        array("name" => "カテゴリ一覧", "href" => "/top"),
        array("name" => "サイトマップ", "href" => "/top"),
        array("name" => "運営者情報", "href" => "/top"),
        array("name" => "プライバシーポリシー", "href" => "/top"),
        array("name" => "利用規約", "href" => "/top"),
        array("name" => "お問い合わせ", "href" => "/top")
    ),
    array(
        array("name" => "介護が始まるまでの準備", "href" => "/top"),
        array("name" => "介護が必要になる原因", "href" => "/top"),
        array("name" => "ケアプラン", "href" => "/top"),
        array("name" => "ケアマネージャ", "href" => "/top"),
        array("name" => "介護保険のサービス・施設の種類", "href" => "/top"),
        array("name" => "国の保険を利用できる被保険者", "href" => "/top"),
        array("name" => "給付金・保険んりょう・介護費用", "href" => "/top"),
        array("name" => "要介護認定の申請・更新", "href" => "/top")
    ),
    array(
        array("name" => "リハビリ", "href" => "/top"),
        array("name" => "介護リフォーム", "href" => "/top"),
        array("name" => "介護疲れ・ストレス", "href" => "/top"),
        array("name" => "介護費用の軽減", "href" => "/top"),
        array("name" => "入浴・清潔ケア", "href" => "/top"),
        array("name" => "家族での進め方", "href" => "/top"),
        array("name" => "排泄・トイレ介助", "href" => "/top"),
        array("name" => "歩行・移乗の介護", "href" => "/top"),
        array("name" => "福祉用具・介護用品", "href" => "/top"),
        array("name" => "認知症", "href" => "/top"),
        array("name" => "食事サポート", "href" => "/top")
    )
);

?>
<footer id="footer">
    <div>
        <span>初めての介護について</span>
        <span>カテゴリ一覧</span>
    </div>
    <?php foreach ($footer as $k1 => $v1) { ?>
        <ul>
            <?php foreach ($v1 as $k2 => $v2) { ?>
                <li><a href="<?php echo $v2["href"]; ?>"><?php echo $v2["name"]; ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <div class="clear center">
        ©︎2018 はじめての介護
    </div>
</footer>