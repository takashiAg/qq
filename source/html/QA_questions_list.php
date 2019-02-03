<?php /*Template Name: みんなで介護ー質問リスト*/ ?>

<!-- QA_questionlist.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require(dirname(__FILE__) . "/templates/question_list.php") ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title id="title"><?php echo $title; ?></title>
    <link rel="stylesheet" href="/wp-content/themes/simplicity2-child/style/QA_questions_list.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="/wp-content/themes/simplicity2-child/style/QA_questions_list.css">
    <script src="/wp-content/themes/simplicity2-child/js/get_args.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/category.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/question.js"></script>
    <!--    <script src="/wp-content/themes/simplicity2-child/js/footer.js"></script>-->
    <script src="/wp-content/themes/simplicity2-child/js/attention.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/category2.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/fix_wrapper_height.js"></script>

    <script>
        let questions =<?php echo json_encode($questions["questions"])?>;

    </script>
    <?php echo $noindex; ?>
    <meta name="description" content="<?php echo $meta; ?>"/>
</head>
<body>
<nav><img src=""><img src="/wp-content/uploads/2019/01/top.png" height="60" width="161"/></nav>
<div id="content_wrapper">
    <div id="sidebar_left">
        <div id="category">
            <div class="category for_PC" style="font-size: 20px;text-align: center" id="category_list"><span>カテゴリ一覧</span><img src="/wp-content/uploads/2019/01/next.png"/></div>
            <a v-for="category in categories" :href="category.href" style="color: #4F4F4F;width: 180px" class="category_wrapper for_PC">
                <div class="category">
                    <span style="width: 8px" :style="category.color"></span>
                    <img :src="category.img_source">
                    <span class="category_name">{{category.category}}</span>
                </div>
            </a>
            <a v-for="category in categories" :href="category.href" class="for_SM">
                <span>{{category.category}}</span>
                <hr color="#ACE698" v-if=" category.active">
                <hr color="#FFFFFF" v-else>
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
            <div class="category" style="font-size: 20px;text-align: center"><span>要介護度別</span><img src="/wp-content/uploads/2019/01/next.png"/></div>
            <div class="category" v-for="category in categories">
                <span style="width: 8px" :style="category.color"></span>
                <div style="width: 41px;height: 41px"></div>
                <span class="category_name">{{category.category}}</span>
            </div>
        </div>
    </div>

    <div id="sidebar_right">
        <aside style="width:100%;"><a href="https://app.adjust.com/je9ttl3"><img src="/wp-content/uploads/2019/01/QA_baner.png" style="width:100%;"/></a></aside>
    </div>
    <div id="main">
        <section id="questions">
            <div class="question">
                <div style="font-size: 30px">質問一覧</div>
                <div style="font-size: 14px">みんなで介護には、たくさんの質問が寄せられています。あなたと同じ悩みを持っている人がいるかも？気になる質問を探してみましょう!<br>ご自分で質問されたい方はアプリをダウンロードしてください！</div>
            </div>


            <div class="question" v-for="{category,message,age,name,target,like,comment} in questions">
                <div>
                    <a href="#">
                        <div class="tag">{{category}}</div>
                        <div class="message">{{message}}</div>
                        <img src="/wp-content/uploads/2019/01/icon.png" class="icon">
                        <div class="info">
                            <div class="name" v-if='age=="None"'>{{name}}</div>
                            <div class="name" v-else>{{name}}&nbsp;&nbsp;&nbsp;&nbsp;{{age}}才</div>
                            <div class="target">{{target}}</div>
                        </div>
                        <span class="likeandcomment"><img src="/wp-content/uploads/2019/01/like.png"><span class="like">{{like}}</span><img
                                    src="/wp-content/uploads/2019/01/comment.png"><span class="comment">{{comment}}</span></span>
                    </a>
                </div>
            </div>
            <div class="page center">
                <img class="number" src="/img/prev.png" height="16" width="15" v-on:click="prev()"/>
                <span class="number" v-for="index in indexes" v-on:click="change(index)">
                    {{index}}
                </span>
                <img class="number" src="/img/next.png" height="16" width="15" v-on:click="next()"/>
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