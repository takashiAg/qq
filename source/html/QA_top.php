<?php /*Template Name: みんなで介護ー質問詳細*/ ?>

<!--QA_top-->
<!--人気が10件;;newestの方は20件-->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require(dirname(__FILE__) . "/templates/question_top.php") ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title id="title"><?php echo $title; ?></title>
    <link rel="stylesheet" href="/wp-content/themes/simplicity2-child/style/QA_category.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/wp-content/themes/simplicity2-child/js/get_args.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/category.js"></script>
    <!--    <script src="/wp-content/themes/simplicity2-child/js/question.js"></script>-->
    <!--    <script src="/wp-content/themes/simplicity2-child/js/footer.js"></script>-->
    <script src="/wp-content/themes/simplicity2-child/js/fix_wrapper_height.js"></script>
    <?php echo $noindex; ?>
    <meta name="description" content="<?php echo $meta; ?>"/>
</head>
<body>
<nav><a href="/"><img src=""><img src="/wp-content/uploads/2019/01/top.png" height="60" width="161"/></a></nav>
<div id="content_wrapper">
    <div id="sidebar_left">
        <div id="category">
            <div class="category" style="font-size: 20px;text-align: center"><span>カテゴリ一覧</span><img src="/wp-content/uploads/2019/01/next.png"/></div>
            <a v-for="category in categories" :href="category.href" style="color: #4F4F4F">
                <div class="category">
                    <span style="width: 8px" :style="category.color"></span>
                    <img :src="category.img_source">
                    <span class="category_name">{{category.category}}</span>
                </div>
            </a>
        </div>
    </div>

    <div id="sidebar_right">
        <aside style="width:100%;"><a href="https://app.adjust.com/je9ttl3"><img src="/wp-content/uploads/2019/01/QA_baner.png" style="width:100%;"/></a></aside>
    </div>
    <div id="main">
        <section id="questions">
            <div class="question">
                <div style="font-size: 30px">人気の質問</div>
                <div style="font-size: 14px">みんながみている人気の質問をみてみよう。</div>
            </div>

            <?php foreach ($questions->popularity() as $key => $val) { ?>
                <div class="question">
                    <div>
                        <a href="/mkquestion/<?php echo $val["id"]; ?>">
                            <span class="tag" style="color: #FFFFFF"><?php echo $val["category"]; ?></span>
                            <div class="message"><?php echo $val["message"]; ?></div>
                            <img src="/wp-content/uploads/2019/01/icon.png" class="icon">
                            <div class="info">
                                <div class="name"><?php echo $val["name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val["age"]; ?>才</div>
                                <div class="target"><?php echo $val["target"]; ?></div>
                            </div>
                            <span class="likeandcomment">
                            <img src="/wp-content/uploads/2019/01/like.png"><span class="like"><?php echo $val["like"]; ?></span>
                            <img src="/wp-content/uploads/2019/01/comment.png"><span class="comment"><?php echo $val["comment"]; ?></span>
                            </span>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </section>

        <section>
            <div class="question">
                <div style="font-size: 30px">最新の質問</div>
                <div style="font-size: 14px">みんながみている人気の質問をみてみよう。</div>
            </div>

            <?php foreach ($questions->newest() as $key => $val) { ?>
                <div class="question">
                    <div>
                        <a href="/mkquestion/<?php echo $val["id"]; ?>">
                            <span class="tag" style="color: #FFFFFF" href="/minnadekaigo/<?php echo $val["slug"]; ?>/"><?php echo $val["category"]; ?></span>
                            <div class="message"><?php echo $val["message"]; ?></div>
                            <img src="/wp-content/uploads/2019/01/icon.png" class="icon">
                            <div class="info">
                                <div class="name"><?php echo $val["name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $val["age"]; ?>才</div>
                                <div class="target"><?php echo $val["target"]; ?></div>
                            </div>
                            <span class="likeandcomment"><img src="/wp-content/uploads/2019/01/like.png"><span class="like"><?php echo $val["like"]; ?></span><img
                                        src="/wp-content/uploads/2019/01/comment.png"><span class="comment"><?php echo $val["comment"]; ?></span></span>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <div>
                <img src="/wp-content/uploads/2019/01/next_red.png" style="float: right;margin-right: 10px">
                <span style="float: right;color: #FF6969;margin-right: 15px;font-size: 16px"><a href="/mk-question-list/" style="float: right;color: #FF6969;margin-right: 15px;font-size: 16px">新着の質問とアドバイスをもっと見る</a></span>
            </div>
        </section>
    </div>
    <div id="sidebar_right_for_SP">
        <aside><a href="https://app.adjust.com/je9ttl3"><img src="/wp-content/uploads/2019/01/SP_baner.png" height="300" width="300"/></a></aside>
    </div>
</div>
<?php require(dirname(__FILE__) . "/templates/footer.php") ?>
</body>
</html>