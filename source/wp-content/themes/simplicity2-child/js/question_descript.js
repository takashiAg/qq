var question_vue = null
let question_data = null
window.addEventListener("DOMContentLoaded", function () {
    question_data = {
        comments: [],
    }
    question_vue = new Vue({
        el: '#question',
        data: question_data
    })
})
let HttpClient = function () {
    this.get = function (URL) {
        return new Promise((resolve, reject) => {
            var anHttpRequest = new XMLHttpRequest();
            anHttpRequest.onreadystatechange = function () {
                if (anHttpRequest.readyState == 4) {
                    if (anHttpRequest.status == 200)
                        resolve(anHttpRequest.responseText);
                    else
                        reject(anHttpRequest.status)
                }
            }
            anHttpRequest.open("GET", URL, true);
            anHttpRequest.send(null);
        })
    }
}

setInterval(setdata, reload_time)
setdata()

async function setdata() {
    question_id = 930// this is dummy ID. so if you need to deploy, comment out this line.
    if (question_id === undefined) {
        console.error("no id");
        return
    }
    let data = await get_question_answer(question_id);
    serialized_data = []
    for (let d of data.results) {
        serialized_data.push(
            {
                user: d.user.display_name,
                comment: d.content,
                like: d.liked_num,
                thumbnail: d.user.thumbnail == null ? "/wp-content/uploads/2019/01/icon.png" : d.user.thumbnail
            }
        )
    }
    question_data.comments = serialized_data
    console.log(data)

}

async function get_question_answer(id) {
    var client = new HttpClient();
    return JSON.parse(await client.get('https://api.minnadekaigo.com/api/hk/questions/' + id + '/answers/'));
}
