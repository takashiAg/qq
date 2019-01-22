var args = new Object;
location.search.substring(1).split('&').forEach(function (v) {
    var ob = v.split("=")
    args[ob[0]] = ob[1];
})
args["path"] = []
location.pathname.split("/").forEach(function (v) {
    args["path"].push(v);
})
console.log("args = ", args);