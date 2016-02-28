SmartCore = {
    init: function() {
        $("a.video-likes").on('click', function() {
            SmartCore.video.likes.addlike();
            return false;
        });
        $("a.video-dislikes").on('click', function() {
            SmartCore.video.likes.adddislike();
            return false;
        });
        $("a.comment-likes").on('click', function() {
            SmartCore.comments.likes.addlike($(this));
            return false;
        });
        $("a.comment-dislikes").on('click', function() {
            SmartCore.comments.likes.adddislike($(this));
            return false;
        });
    },
    video: {
        likes: {
            addlike: function() {
                SmartCore.video.likes.ajax("/ajax/add-like");
            },
            adddislike: function() {
                SmartCore.video.likes.ajax("/ajax/add-dislike");
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
    },
    comments: {
        likes: {
            addlike: function($this) {
                SmartCore.comments.likes.ajax("/ajax/add-like-comment", $this);
            },
            adddislike: function($this) {
                SmartCore.comments.likes.ajax("/ajax/add-dislike-comment", $this);
            },
            ajax: function(url, $this) {
                var data = {'comment': $this.parents(".actions").find("input[name=comment]").val()};
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data,
                    success: function(res) {
                        res = JSON.parse(res);
                        $this.parent().find("span#comment_likes").html(res["likes"]);
                        $this.parent().find("span#comment_dislikes").html(res["dislikes"]);
                    }
                });
            }
        }
    }
};

SmartCore.init();