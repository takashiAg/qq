window.addEventListener("load", function () {
    var title_length = 35
    var question = {
        tag: "認知症",
        user: "tomotomo",
        age: 50,
        target: "(要介護1/90才/男性)",
        message: "施設入所している母ですが、部屋が個室になっていて、食事など１日のうち何度か、ホールみたいなとこに連れて行ってもらって、他の方と過ごしているようです。\n\nその時に他の方に興味があるらしく、ケアしてくれてる方にあんなことしてるわよ。。とか色々いうみたいなのです。ケアの方たちは、教えてくれて助かってますよ好意的に言ってくれてはいるのですが、そう母に注意したらいいのかな？と思っています。",
        like: 15,
        comments: [
            {
                user: "ぷら",
                like: 1,
                comment: "お疲れ様です。注意はしなくてもいいのではないでしょうか？職員としては正直うるさいと思う時もあると思いますが、本当に助かっている時もあると思います。お母様は、お世話好きなのでしょうか？お母様が楽しく過ごされているなら気にされなくていいと思います。"
            }, {
                user: "ぷら",
                like: 1,
                comment: "お疲れ様です。注意はしなくてもいいのではないでしょうか？職員としては正直うるさいと思う時もあると思いますが、本当に助かっている時もあると思います。お母様は、お世話好きなのでしょうか？お母様が楽しく過ごされているなら気にされなくていいと思います。"
            }, {
                user: "ぷら",
                like: 1,
                comment: "お疲れ様です。注意はしなくてもいいのではないでしょうか？職員としては正直うるさいと思う時もあると思いますが、本当に助かっている時もあると思います。お母様は、お世話好きなのでしょうか？お母様が楽しく過ごされているなら気にされなくていいと思います。"
            }
        ],
    }
    if (question.message.length > title_length)
        question.title = question.message.slice(0, title_length) + "..."
    else
        question.title = question.message


    question = new Vue({
        el: '#question',
        data: question
    })

    var meta = "質問：" + question.message.slice(0, title_length) + "..." + question.comments.length + "件の回答";
    // if (questions.length == 0)
    //     meta +=
    // else if (questions.length == 1)
    //     meta += message.slice(0, 30) + ".../" + questions[0].message.slice(0, 30)
    // else if (questions.length == 2)
    //     meta += message.slice(0, 30) + ".../" + questions[0].message.slice(0, 30) + "/" + questions[1].message.slice(0, 30)
    // else
    //     meta += message.slice(0, 30) + ".../" + questions[0].message.slice(0, 30) + "/" + questions[1].message.slice(0, 30) + "/" + questions[2].message.slice(0, 30)
    document.querySelector("meta[name=description]").content = meta;

    var title = "質問：" + (question.message.length > title_length ? question.message.slice(0, 60) + "..." : question.message) + " | みんなで介護";
    if (document.getElementById("title"))
        document.getElementById("title").innerText = title;

    if (question.comments.length < 5) {
        var noindex = document.createElement("meta");
        noindex.name = "robots"
        noindex.content = "noindex"

        // var noindex = '<meta name="robots" content="noindex">'
        document.getElementsByTagName("head").item(0).appendChild(noindex)
    }

})