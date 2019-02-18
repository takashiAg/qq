<!DOCTYPE html>
<html lang="en">
<head>
    <?php require(dirname(__FILE__) . "/templates/question_category.php") ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
    <title id="title"><?php echo $title; ?></title>
    <link rel="stylesheet" href="/wp-content/themes/simplicity2-child/style/QA_category.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/wp-content/themes/simplicity2-child/js/get_args.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/category.js"></script>
    <script src="/wp-content/themes/simplicity2-child/js/fix_wrapper_height.js"></script>
    <?php echo $noindex; ?>
    <meta name="description" content="<?php echo $meta; ?>"/>
</head>
<body>
<nav><a href="/mk-question-top/"><img src=""><img src="/wp-content/uploads/2019/01/top.png" height="60" width="161"/></a></nav>
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
    </div>

    <div id="sidebar_right">
        <aside style="width:100%;"><a href="https://app.adjust.com/je9ttl3"><img src="/wp-content/uploads/2019/01/QA_baner.png" style="width:100%;"/></a></aside>
    </div>
    <div id="main">
        <section id="questions">

            <div class="question">
                <div style="font-size: 30px"><?php echo $category; ?>に関する質問</div>
                <div style="font-size: 14px"><?php echo $questions["categories"][$category]; ?></div>
            </div>

            <?php foreach ($quesition_array[$page] as $key => $val) { ?>
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
                            <span class="likeandcomment"><img src="/wp-content/uploads/2019/01/like.png"><span class="like"><?php echo $val["like"]; ?></span><img
                                        src="/wp-content/uploads/2019/01/comment.png"><span class="comment"><?php echo $val["comment"]; ?></span></span>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <div class="page center">
                <!--    <img class="number" src="/img/prev.png" height="16" width="15"/>-->
                <a class="number"
                   href="<?php echo basename($_SERVER['PHP_SELF']) . "?" . (isset($_GET[$category]) ? "category=" . $_GET[$category] . "&" : "") . "page=" . ($page <= 0 ? 0 : $page - 1); ?>"
                   style="color: #4F4F4F">
                    <img class="number" src="/wp-content/uploads/2019/01/prev.png" height="16" width="15"/></a>
                <?php foreach ($quesition_array as $key => $val) { ?>
                    <a class="number" href="<?php echo basename($_SERVER['PHP_SELF']) . "?" . (isset($_GET[$category]) ? "category=" . $_GET[$category] . "&" : "") . "page=" . $key; ?>"
                       style="color: #4F4F4F"><?php echo $key + 1; ?></a>
                <?php } ?>
                <a class="number"
                   href="<?php echo basename($_SERVER['PHP_SELF']) . "?" . (isset($_GET[$category]) ? "category=" . $_GET[$category] . "&" : "") . "page=" . ($page >= count($quesition_array) - 1 ? count($quesition_array) - 1 : $page + 1); ?>"
                   style="color: #4F4F4F"><img class="number" src="/wp-content/uploads/2019/01/next.png" height="16" width="15"/></a>

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