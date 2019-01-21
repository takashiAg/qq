<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title id="title"><?php echo $title; ?></title>
    <link rel="stylesheet" href="/style/QA_questions_list.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="/style/QA_questions_list.css">
    <script src="/js/get_args.js"></script>
    <script src="/js/category.js"></script>
<!--    <script src="/js/question.js"></script>-->
<!--    <script src="/js/footer.js"></script>-->
    <script src="/js/attention.js"></script>
    <script src="/js/category2.js"></script>
    <script src="/js/fix_wrapper_height.js"></script>
    <?php echo $noindex; ?>
    <meta name="description" content="<?php echo $meta; ?>"/>
</head>
<body>
<nav><img src=""><img src="/img/top.png" height="60" width="161"/></nav>
<div id="content_wrapper">
    <div id="sidebar_left">
        <div id="category">
            <div class="category" style="font-size: 20px;text-align: center"><span>カテゴリ一覧</span><img src="/img/next.png"/></div>
            <a v-for="category in categories" :href="category.href" style="color: #4F4F4F">
                <div class="category">
                    <span style="width: 8px" :style="category.color"></span>
                    <img :src="category.img_source">
                    <span class="category_name">{{category.category}}</span>
                </div>
            </a>
        </div>
        <div id="attention">
            <div style="font-size:18px">注目のワード</div>
            <div>
                <a class="attention-words" v-for="{name,href} in words" :href="href">
                    {{name}}
                </a>
            </div>
        </div>

        <div id="category2">
            <div class="category" style="font-size: 20px;text-align: center"><span>要介護度別</span><img src="/img/next.png"/></div>
            <div class="category" v-for="category in categories">
                <span style="width: 8px" :style="category.color"></span>
                <img :src="category.img_source">
                <span class="category_name">{{category.category}}</span>
            </div>
        </div>
    </div>

    <div id="sidebar_right">
        <aside style="width:100%;"><img src="/img/QA_baner.png" style="width:100%;"/></aside>
    </div>
    <div id="main">
        <section id="questions">
            <div class="question">
                <div style="font-size: 30px">質問一覧</div>
                <div>みんなで介護には、たくさんの質問が寄せられています。あなたと同じ悩みを持っている人がいるかも？気になる質問を探してみましょう!<br>ご自分で質問されたい方はアプリをダウンロードしてください！</div>
            </div>
            <?php require("./template/question_list.php") ?>
        </section>
    </div>
    <div id="sidebar_right_for_SP">
        <aside><img src="/img/SP_baner.png" height="300" width="300"/></aside>
    </div>
</div>
<?php require("./template/footer.php") ?>
</body>
</html>