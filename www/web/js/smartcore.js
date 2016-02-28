SmartCore = {
    init: function() {
        $("a.video-likes").on('click', function() {
            SmartCore.likes.addlike();
            return false;
        });
        $("a.video-dislikes").on('click', function() {
            SmartCore.likes.adddislike();
            return false;
        });
    },
    likes: {
        addlike: function() {
            SmartCore.likes.ajax("/ajax/add-like");
        },
        adddislike: function() {
            SmartCore.likes.ajax("/ajax/add-dislike");
        },
        ajax: function(url) {
            $.ajax({
                url: url,
                type: "POST",
                data: {'video': $("input[name=video_id]").val()},
                success: function(res) {
                    res = JSON.parse(res);
                    $("span#likes").html(res["likes"]);
                    $("span#dislikes").html(res["dislikes"]);
                }
            });
        }
    }
};

SmartCore.init();