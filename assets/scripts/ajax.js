var URL = "http://www.fflachet.com/";

//$().ready(
//        getSkills(),
//        alert("sdfgh")
//        );

function getSkills() {
    $.ajax({
        url: URL + "skill/getSkills",
        async: true,
        type: "GET",
        datatype: "json",
        success: function (data) {
            for (var i = 0, max = 10; i < data.length; i++) {
                alert(data[i].name);
            }
        },
        error: function () {
            alert("problème");
        }
    });
}
function getAbouts() {
    $.ajax({
        url: URL + "about/getAbouts",
        async: true,
        type: "GET",
        datatype: "json",
        success: function (data) {
            for (var i = 0, max = 10; i < data.length; i++) {
                alert(data[i].name);
            }
        },
        error: function () {
            alert("problème");
        }
    });
}
function getBackgrounds() {
    $.ajax({
        url: URL + "background/getBackgrounds",
        async: true,
        type: "GET",
        datatype: "json",
        success: function (data) {
            for (var i = 0, max = 10; i < data.length; i++) {
                alert(data[i].name);
            }
        },
        error: function () {
            alert("problème");
        }
    });
}
function getKnowledges() {
    $.ajax({
        url: URL + "knowledge/getKnowledges",
        async: true,
        type: "GET",
        datatype: "json",
        success: function (data) {
            for (var i = 0, max = 10; i < data.length; i++) {
                alert(data[i].name);
            }
        },
        error: function () {
            alert("problème");
        }
    });
}
function getProjects() {
    $.ajax({
        url: URL + "project/getProjects",
        async: true,
        type: "GET",
        datatype: "json",
        success: function (data) {
            for (var i = 0, max = 10; i < data.length; i++) {
                alert(data[i].name);
            }
        },
        error: function () {
            alert("problème");
        }
    });
}