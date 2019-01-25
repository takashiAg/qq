<?php
/**
 * Created by PhpStorm.
 * User=> ryo
 * Date=> 2019-01-18
 * Time=> 13=>14
 */

$category = $_GET["category"];
$page = isset($_GET["page"]) ? $_GET["page"] : 0;
$question_per_page = 10;
$questions = array(
    "categories" => array(
        "認知症" => "認知症に関する質問をまとめました。認知症は老化による物忘れやぼけと勘違いされやすいですが、実際の症状は人によって全く異なります。「食事やお風呂を拒否するのだけどどうすればいい？」「よく徘徊してしまうのですが対応策はある？」など認知症の方への接し方についての悩みや、認知症の診断、認知症の方でも利用できる介護保険サービスなどについてまとめましたので、ぜひ参考にしてください。",
        "介護保険" => "介護保険に関する質問をまとめました。介護について準備したり実際に介護を進めていく中で、よくわからない言葉や知識が増えていっていると感じられている方も多くいらっしゃると思います。「在宅介護と施設介護ってそれぞれどういったサービスがあるの？」「生活援助サービスってどんなサービス？」「介護保険サービスを利用する条件ってなにがあるの？」など介護保険サービスや、介護保険の利用までの流れなどについての質問を紹介していきます。",
        "要介護認定" => "要介護認定に関する質問をまとめました。国の介護保険を利用するために最初に必要になるのが要介護認定です。要介護認定によって、どの程度介護の手間がかかるかを示す要介護度が認定されます。「要介護認定で要介護3に認定されたのだけどどんなサービスを利用するべき？」「要介護度はどういった基準で決まるの？」といった要介護度についての疑問や、「要介護認定ってどうしたら認定されるの？」「要介護度が下がってしまったのだけどどうすればいい？」といった要介護認定の申請や更新についての悩みまで、要介護認定についてまとめましたのでぜひ参考にしてください。",
        "お金" => "介護のお金に関する質問をまとめました。介護を進めていく上で、介護費用の話は避けて通れません介護サービスの利用料だけでなく、自己負担の費用も発生します。また、介護サービスの費用負担が大きく軽減したいと思っている方向けに、国の介護保険の給付金以外にも様々な支援制度があります。「サービス利用料ってどうやって考えればいい？」「在宅介護と施設介護って費用はどれぐらい違うの？」といった介護にかかる費用についての疑問や、高額介護サービス費など介護費用負担を軽減する制度など、介護にかかるお金についての質問をまとめました。",
        "介護施設" => "介護施設に関する質問をまとめました。在宅での介護が難しい場合に利用するのが施設介護サービスです。介護施設の種類によって受けられるサービスや料金が異なります。「介護施設は種類が多いけどどの介護施設を使うのが良い？」「特養ってどういった特長があるの？」といった介護施設の選び方についての質問や、「介護施設のスタッフの方とどう話せばいい？」「介護施設って面会できるの？」など介護施設に入所してからの疑問について紹介していきます。",
        "ケアプラン" => "ケアプランに関する質問をまとめました。国の介護保険の利用に必要なケアプランとは、介護サービスの利用計画書です。介護の専門家の意見を基に、利用者ご本人やご家族の意見も踏まえてケアプランの内容を考えていきます。「ケアプランってなにを決めるの？」「利用するサービスの決め方って？」といったケアプランの内容についての疑問や、アセスメントなどといったケアプランの作成方法についての質問をまとめて紹介しました。",
        "ケアマネージャー" => "ケアマネージャーに関する質問をまとめました。介護保険の利用をサポートしてくれる介護保険の専門家です。最初から担当についてくれて介護保険を利用するための手続きや介護サービス事業者とのやりとりを二人三脚で一緒にすすめてくれます。「ケアマネージャーってなにをしてくれるの？」「ケアマネージャーには何が相談できる？」といったケアマネージャーの役割についての疑問や、ケアマネージャーとの接し方についての質問をまとめたのでぜひ参考にしてください。",
        "リハビリ" => "リハビリに関する質問をまとめました。リハビリは、自分で身体を動かすことが難しくなった方にとって自立した生活を再び送れるようになるために重要です。自分で身体を動かせるようになることで、必要な介護の程度が重くなることを防ぐことができます。「介護保険ではどのようなリハビリが使えるの？」「リハビリのサービスを受ける条件って？」といった介護保険におけるリハビリについての質問や、在宅でリハビリをする上での注意点についてまとめて紹介します。",
        "リフォーム" => "リフォームに関する質問をまとめました。介護リフォームとは、手すりやスロープの設置など、自宅での介護のために自宅をリフォームすることです。リフォームと聞くと費用が大きくかかりそうなイメージがありますが、実は介護保険によって費用を軽減することができます。「車椅子を使っているのだけどトイレはどうリフォームすればいい？」「転びやすいのだけどどんなリフォームが必要？」といったリフォームの内容についての質問や、介護保険でリフォーム費用を軽減できる住宅改修費制度の条件などについての疑問をまとめました。",
        "介護器具" => "介護器具に関する質問をまとめました。自宅での介護を行う際に必要になるのが福祉用具や介護用品です。実は、介護ベッドや車椅子などの福祉用具は、国の介護保険を使って安くレンタルすることができます。「どんな介護用具をレンタルすることができるの？」「介護ベッドのレンタルの費用ってどれぐらい？」といった介護保険における福祉用具レンタルの制度についてや、杖や車椅子といった福祉用具の選び方についての疑問をまとめましたのでぜひ参考にしてください。",
        "介護疲れ・ストレス" => "介護疲れ・ストレスに関する質問をまとめました。護が必要な方を支えることだけを考えているうちに、ご家族の方の多くが、負担が集中したり理解しあえないことによって疲れやストレスが溜まってしまいます。介護をするご家族の方が倒れてしまうと、介護を必要としている方も共倒れになってしまいます。「育児と介護のダブルケアが大変だけどどうすればいい？」「仕事と介護の両立が難しいのですが介護離職はしないべき？」といった介護負担に関する疑問や、介護うつなど介護疲れ・ストレスについての質問についてまとめました。",
        "入浴・排泄ケア" => "入浴・排泄ケアに関する質問をまとめました。入浴などで清潔を保つことは、感染症などの病気の予防になるだけでなく、生活の質の向上にもつながります。介護を受けている方は、自分で入浴などを通じて身体を清潔に保つことが難しい方も多く、サポートが必要になります。「入浴を拒否するのだけどどうやって清潔を保てばいい？」「身体を拭く際はなにに気をつけるべき？」といった入浴に関する疑問や、「自分でトイレできなくなったけどどう介助すればいい？」「初めておむつをつけるけど選び方を教えてください」など排泄ケアに関する疑問をまとめました。",
        "家族" => "家族に関する質問をまとめました。介護はご本人にとってもご家族にとって初めてのことだからこそ、介護を進める中でうまくいかなかったり、関係が悪くなってしまうこともあります。しかし、介護が必要になるまで事前に家族同士でしっかり話し合うご家族は少ないかと思います。「兄弟が介護を手伝ってくれないのだけどどうやったら協力してもらえる？」「義母と介護の方針があわないのだけどどう話し合えばいい？」といったご家族の方との介護分担についての疑問などをまとめましたのでぜひ参考にしてください。",
        "食事" => "食事に関する質問をまとめました。介護を受けている方にとっても健康に生きるためにとても重要です。しかし、飲み込みや噛む力が弱まっていることが多く、特別な食事を準備したり、食事の介助を必要とします。「誤嚥を防ぐためにはどのような食事がいいですか？」「きざみ食やとろみ食の作り方って？」といった介護食の作り方や、食事中の介助の方法など、食事についての質問を紹介します。",
        "病気" => "病気に関する質問をまとめました。介護を受けている方は、何かしらの病気や怪我をしている方が少なくありません。罹っている病気や怪我によって、さらに重い介護が必要にならないように介護やケアの内容を変える必要があります。「糖尿病にかかっているけど介護で何に気をつければいい？」「骨折してしまったけどこのまま寝たきりになってしまう？」などそれぞれの病状における介護についての質問をまとめましたのでぜひ参考にしてください。",
        "元気報告" => "介護を受けている方の元気報告です。介護は大変なことも多いですが、少しでも元気になってくれたり、できることが増えたりなど嬉しいこともたくさんあります。日々の介護生活でちょっとした嬉しいことや幸せなことをみんなにシェアしたい時はつぶやいてみましょう！",
        "雑談" => "雑談・つぶやきのカテゴリです。介護をしている中で大きな悩みや相談事ではないけど誰かに聞いてもらいたいことありますよね。日頃の悩みや不満をつぶやいてみましょう。",
        "その他" => "その他の質問に関するカテゴリです。介護生活でのちょっとした疑問など、どこのカテゴリにも当てはまらない場合はこのカテゴリで質問してください。また、介護に関する悩みでどのカテゴリで質問すればいいかわからない時にもまずはこのカテゴリで聞いてみましょう。",
    ),
    "questions" => array(
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "1ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "2ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "3ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "4ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "5ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "6ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "7ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "8ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "9ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "10ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "11ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "12ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "13ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "14ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "15ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "16ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "17ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "18ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "19ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "20ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "21ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "22ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "23ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "24ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "25ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "26ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "27ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "28ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "29ページ目"
        ),
        array(
            "category" => "認知症", "like" => 15, "comment" => 8, "name" => "tomotomo", "age" => 50, "target" => "(要介護1/90才/男性)",
            "message" => "30ページ目"
        ),
    )
);

function serialized_question($questions, $question_per_page)
{
    $quesition_array = [];
    $index = 0;
    forEach ($questions["questions"] as $key => $val) {
        if (floor($key / $question_per_page) == $index) {
            $index++;
            array_push($quesition_array, [$val]);
        } else {
            array_push($quesition_array[$index - 1], $val);
        }
    }
    return $quesition_array;
}

$quesition_array = serialized_question($questions, $question_per_page);
if (count($quesition_array) - 1 < $page) {
    $page = count($quesition_array) - 1;
}
?>


<?php foreach ($quesition_array[$page] as $key => $val) { ?>
    <div class="question">
        <div>
            <a href="#">
                <object><a class="tag"><?php echo $val["category"]; ?></a></object>
                <div class="message"><?php echo $val["message"]; ?></div>
                <img src="/wp-content/uploads/2019/01/icon.png" class="icon">
                <div class="info">
                    <div class="name"><?php echo $val["name"]; ?><?php echo $val["age"]; ?>才</div>
                    <div class="target"><?php echo $val["target"]; ?></div>
                </div>
                <span class="likeandcomment"><img src="/wp-content/uploads/2019/01/like.png"><span class="like"><?php echo $val["like"]; ?></span><img
                            src="/wp-content/uploads/2019/01/comment.png"><span class="comment"><?php echo $val["comment"]; ?></span></span>
            </a>
        </div>
    </div>
<?php } ?>
<div class="page center">
    <!--    <img class="number" src="/wp-content/uploads/2019/01/prev.png" height="16" width="15"/>-->
    <a class="number" href="<?php echo basename($_SERVER['PHP_SELF']) . "?" . (isset($_GET[$category]) ? "category=" . $_GET[$category] . "&" : "") . "page=" . ($page <= 0 ? 0 : $page - 1); ?>"
       style="color: #4F4F4F">
        <img class="number" src="/wp-content/uploads/2019/01/prev.png" height="16" width="15"/></a>
    <?php foreach ($quesition_array as $key => $val) { ?>
        <a class="number" href="<?php echo basename($_SERVER['PHP_SELF']) . "?" . (isset($_GET[$category]) ? "category=" . $_GET[$category] . "&" : "") . "page=" . $key; ?>"
           style="color: #4F4F4F"><?php echo $key; ?></a>
    <?php } ?>
    <a class="number"
       href="<?php echo basename($_SERVER['PHP_SELF']) . "?" . (isset($_GET[$category]) ? "category=" . $_GET[$category] . "&" : "") . "page=" . ($page >= count($quesition_array) - 1 ? count($quesition_array) - 1 : $page); ?>"
       style="color: #4F4F4F"><img class="number" src="/wp-content/uploads/2019/01/next.png" height="16" width="15"/></a>

</div>



