window.addEventListener("load", function () {
    var question_per_page = 10
    var questions = [
        {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }, {
            category: "認知症", like: 15, comment: 8, name: "tomotomo", age: 50, target: "(要介護1/90才/男性)",
            message: "現在、要介護2の老親の事で質問です。週１日で身体看護と生活援助を合計で約一時間程お願いしています。内容は散歩補助、通院補助、部屋掃除です。このプランを変更してほしいと相談しましたら変更は無理と言われました。どうすればよい..."
        }
    ]
    quesition_array = []
    questions.forEach(function (value, index) {
        if (Math.floor(index / question_per_page) == (index / question_per_page))
            quesition_array.push([])
        quesition_array[Math.floor(index / question_per_page)].push(value)
    })
    if (quesition_array.length == 0)
        quesition_array == [[]]

    var index_question = []
    for (var index in quesition_array) {
        index_question.push(index)
    }

    question = new Vue({
        el: '#questions',
        data: {
            indexes: index_question,
            questions: quesition_array[0]
        },
        methods: {
            change: function (index) {
                console.log(index)
                question.questions = quesition_array[index - 0]
            }
        }
    })
})
var quesition_array;
var question;