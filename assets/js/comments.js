
var url_for_read_comments = document.getElementById("url_for_read_comments").value;
var url_for_post_comment = document.getElementById("url_for_post_comment").value;

$(document).ready(function () {
    setInterval(function(){loadComments()},1000);   // đặt thời gian tự load lại comment
    $("#comment-button").click(function(){
        postComments();
        loadComments();
    });
});

function loadComments() {
    $.ajax({
        type: "get",
        url: url_for_read_comments,
        success: function (response) {
            $("#list-comment").html(response);
        }
    });
}

function postComments() {
    var form = $('#form');
    for ( instance in CKEDITOR.instances )
        CKEDITOR.instances[instance].updateElement();
    $.ajax({
        type: "post",
        url: url_for_post_comment,
        data: form.serialize(),
        success: function(response) {
        }
    });
    
}