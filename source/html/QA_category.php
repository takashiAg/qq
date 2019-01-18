<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title id="title"></title>
    <link rel="stylesheet" href="/style/QA_category.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/get_args.js"></script>
    <script src="/js/category.js"></script>
    <script src="/js/question.js"></script>
    <script src="/js/footer.js"></script>
    <script src="/js/fix_wrapper_height.js"></script>
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
        <section id="questions">
            <div class="question">
                <div style="font-size: 30px">{{category}}に関する質問</div>
                <div>{{message}}</div>
            </div>
            <div class="question" v-for="{category,message,age,name,target,like,comment} in questions">
                <div>
                    <span class="tag">{{category}}</span>
                    <div class="message">{{message}}</div>
                    <img src="/img/icon.png" class="icon">
                    <div class="info">
                        <div class="name">{{name}}{{age}}才</div>
                        <div class="target">{{target}}</div>
                    </div>
                    <span class="likeandcomment">
                        <img src="/img/like.png"><span class="like">{{like}}</span>
                        <img src="/img/comment.png"><span class="comment">{{comment}}</span>
                    </span>
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
        <aside><img src="/img/SP_baner.png" height="300" width="300"/></aside>
    </div>
</div>
<?php require("./template/footer.php") ?>
</body>
</html>