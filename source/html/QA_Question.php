<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title id="title"></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/get_args.js"></script>
    <script src="/js/category.js"></script>
    <script src="/js/footer.js"></script>
    <script src="/js/question_descript.js"></script>
    <script src="/js/fix_wrapper_height.js"></script>
    <link rel="stylesheet" href="/style/QA_Question.css">
    <meta name="description" content=""/>
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
    </div>

    <div id="sidebar_right">
        <aside style="width:100%;"><img src="/img/QA_baner.png" style="width:100%;"/></aside>
    </div>
    <div id="main">
        <section id="question">
            <div class="tag">{{tag}}</div>
            <div class="question">
                <div class="question_wrapper">
                    <div class="padding">
                        <div class="title">{{title}}</div>
                        <div style="margin-top: 10px">
                            <div style="float: left;text-align: left">
                                <div><span style="color: #ACE698;">{{user}}</span>&nbsp&nbsp{{age}}才</div>
                                <div class="target">{{target}}</div>
                            </div>
                            <div style="float: right;margin-right: 20px">
                                <img src="/img/like.png"><span class="like">{{like}}</span>
                                <img src="/img/comment.png"><span class="comment">{{comments.length}}</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <hr color="#DEDEDE">

                        <div style="width: 100%;margin-top: 10px">
                            <pre class="message">{{message}}</pre>
                        </div>
                    </div>
                </div>
                <img src="/img/icon.png" class="icon">
                <div class="clear"></div>
                <div style="float: left">コメント</div>
                <div class="clear"></div>
                <div v-for="{user,like,comment} in comments" class="comment">
                    <div style="width: 400px;background-color: #FFFFFF;border-radius: 5px;float: left;margin-left: 40px">
                        <div style="color:#ACE698">{{user}}</div>
                        <div>{{comment}}</div>
                        <div style="float: right;color:#ACE698;border-radius: 7px;border: #ACE698;border-style: solid;border-width: 1px;text-align: center;width: 80px;font-size: 16px;">共感&nbsp{{like}}<img
                                    src="/img/goodjob.png" height="16" width="16"/></div>
                    </div>
                    <img src="/img/icon.png" height="40" width="40" style="float: left;margin: 30px 0px 0px 40px"/>
                </div>
            </div>
            <!--<div class="question">-->
            <!--<span>認知症に関する質問</span>-->
            <!--<span>認知症は、老化による物忘れやぼけと勘違いされやすいですが、実際の症状は全く異なります。記憶障害だけでなく、徘徊や暴力など人によって症状は様々であり、認知症についてしっかりと理解しないとご家族の方の介護負担が大きくなってしまいます。多くの方がかかっている認知症とはなにか、認知症の方を介護する上で大切なことについて解説しています。</span>-->
            <!--</div>-->
            <!--<div class="question" v-for="{category,message,age,name,target,like,comment} in questions">-->
            <!--<span class="tag">{{category}}</span>-->
            <!--<span class="message">{{message}}</span>-->
            <!--<img src="/img/icon.png" class="icon">-->
            <!--<div class="info">-->
            <!--<div class="name">{{name}}{{age}}才</div>-->
            <!--<div class="target">{{target}}</div>-->
            <!--</div>-->
            <!--<span class="likeandcomment">-->
            <!--<img src="/img/like.png"><span class="like">{{like}}</span>-->
            <!--<img src="/img/comment.png"><span class="comment">{{comment}}</span>-->
            <!--</span>-->
            <!--</div>-->
        </section>
    </div>
    <div id="sidebar_right_for_SP">
        <aside><img src="/img/SP_baner.png" height="300" width="300"/></aside>
    </div>
</div>
<?php require("./template/footer.php") ?>
</body>
</html>