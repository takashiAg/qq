<!-- QA_Question.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("templates/question_description.php"); ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title id="title"><?php echo $contents->title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/wp-content/themes/simplicity2-child/js/get_args.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/category.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/question_descript.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/fix_wrapper_height.js"></script>
    <link rel="stylesheet" href="/wp-content/themes/simplicity2-child/style/QA_Question.css">
    <script>
        question_id = "<?php echo((get_post_custom($post->ID))["questionid"][0]);?>";
        reload_time = 1000 * 100
    </script>
    <?php echo $contents->noindex; ?>
    <meta name="description" content="<?php echo $contents->meta; ?>"/>
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
        <section id="question">
            <div class="tag"><?php echo $contents->question["tag"]; ?></div>
            <div style="width: 100%;height: 30px;opacity:0"></div>
            <div class="question">
                <div class="question_wrapper_2">
                    <div class="question_wrapper">
                        <div class="padding">
                            <div class="title"><?php echo $contents->question["title"]; ?></div>
                            <div style="margin-top: 10px">
                                <div style="float: left;text-align: left">
                                    <div><span style="color: #ACE698;"><?php echo $contents->question["user"]; ?></span>&nbsp&nbsp<?php echo $contents->question["age"]; ?>才</div>
                                    <div class="target"><?php echo $contents->question["target"]; ?></div>
                                </div>
                                <div style="float: right;margin-right: 20px">
                                    <img src="/wp-content/uploads/2019/01/like.png"><span class="like"><?php echo $contents->question["like"]; ?></span>
                                    <img src="/wp-content/uploads/2019/01/comment.png"><span class="comment"><?php echo count($contents->question["comments"]); ?></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <hr color="#DEDEDE">

                            <div style="width: 100%;margin-top: 10px">
                                <pre class="message"><?php echo $contents->question["message"]; ?></pre>
                            </div>
                        </div>
                    </div>
                    <img src="/wp-content/uploads/2019/01/icon.png" class="icon">
                    <div class="clear"></div>
                    <div style="float: left">コメント</div>
                    <div class="clear"></div>
                    <div class="comment" v-for="{user,like,comment,thumbnail} in comments">
                        <div style="width: 400px;background-color: #FFFFFF;border-radius: 5px;float: left;margin-left: 40px">
                            <div style="color:#ACE698">{{user}}</div>
                            <div>{{comment}}</div>
                            <div style="float: right;color:#ACE698;border-radius: 7px;border: #ACE698;border-style: solid;border-width: 1px;text-align: center;width: 80px;font-size: 16px;">
                                共感&nbsp{{like}}
                                <img src="/wp-content/uploads/2019/01/goodjob.png" height="16" width="16"/>
                            </div>
                        </div>
                        <img :src="thumbnail" height="40" width="40" style="float: left;margin: 30px 0px 0px 40px"/>
                    </div>
                </div>
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