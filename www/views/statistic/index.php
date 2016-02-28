<?php
use app\models\Comments;
?>
<div class="row">
    <div class="col s12">
        <ul class="tabs row">
            <li class="tab col s3"><a href="#tab1" class="active">Comments</a></li>
            <li class="tab col s3"><a href="#tab2">Social Networks</a></li>
            <li class="tab col s3"><a href="#tab3">Gender</a></li>
            <li class="tab col s3"><a href="#tab4">Age</a></li>
        </ul>
    </div>
    <div id="tab1" class="col s12">
        <div class="comments_statistic">
            <?php echo $this->render( "//_partials/comments", [ "video" => false, "comments" => $comments ] ); ?>
        </div>
    </div>
    <div id="tab2" class="col s12">
        <div class="row">
            <div id="columnchart_values0" style="width: 700px; height: 300px;" class="col s9"></div>
            <div class="col t3">
                <i class="small material-icons">thumb_up</i> <span id="commentLikes">5</span><br>
                <i class="small material-icons">thumb_down</i> <span id="commentDislikes">3</span><br>
                <i class="small material-icons">call_made</i> <span id="commentShare">3</span>
            </div>
        </div>
        <div class="row">
            <div id="columnchart_values1" style="width: 700px; height: 300px;" class="col s9"></div>
            <div class="col t3">
                <i class="small material-icons">thumb_up</i> <span id="commentLikes">5</span><br>
                <i class="small material-icons">thumb_down</i> <span id="commentDislikes">3</span><br>
                <i class="small material-icons">call_made</i> <span id="commentShare">3</span>
            </div>
        </div>
    </div>
    <div id="tab3" class="col s12">
        <div class="row">
            <div id="columnchart_values2" style="width: 700px; height: 300px;" class="col s9"></div>
            <div class="col t3">
                <i class="small material-icons">thumb_up</i> <span id="commentLikes">5</span><br>
                <i class="small material-icons">thumb_down</i> <span id="commentDislikes">3</span><br>
                <i class="small material-icons">call_made</i> <span id="commentShare">3</span>
            </div>
        </div>
        <div class="row">
            <div id="columnchart_values3" style="width: 700px; height: 300px;" class="col s9"></div>
            <div class="col t3">
                <i class="small material-icons">thumb_up</i> <span id="commentLikes">5</span><br>
                <i class="small material-icons">thumb_down</i> <span id="commentDislikes">3</span><br>
                <i class="small material-icons">call_made</i> <span id="commentShare">3</span>
            </div>
        </div>
    </div>
    <div id="tab4" class="col s12">
        <div class="row">
            <div id="columnchart_values4" style="width: 700px; height: 300px;" class="col s9"></div>
            <div class="col t3">
                <i class="small material-icons">thumb_up</i> <span id="commentLikes">5</span><br>
                <i class="small material-icons">thumb_down</i> <span id="commentDislikes">3</span><br>
                <i class="small material-icons">call_made</i> <span id="commentShare">3</span>
            </div>
        </div>
        <div class="row">
            <div id="columnchart_values5" style="width: 700px; height: 300px;" class="col s9"></div>
            <div class="col t3">
                <i class="small material-icons">thumb_up</i> <span id="commentLikes">5</span><br>
                <i class="small material-icons">thumb_down</i> <span id="commentDislikes">3</span><br>
                <i class="small material-icons">call_made</i> <span id="commentShare">3</span>
            </div>
        </div>
        <div class="row">
            <div id="columnchart_values6" style="width: 700px; height: 300px;" class="col s9"></div>
            <div class="col t3">
                <i class="small material-icons">thumb_up</i> <span id="commentLikes">5</span><br>
                <i class="small material-icons">thumb_down</i> <span id="commentDislikes">3</span><br>
                <i class="small material-icons">call_made</i> <span id="commentShare">3</span>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data0 = google.visualization.arrayToDataTable([
            ["Comment", "Likes", {role: "style"}],
            ["Copper", 8, "#1976d2"],
            ["Silver", 10, "blue"],
            ["Gold", 19, "#1976d2"],
            ["Platinum", 21, "blue"]
        ]);
        var data1 = google.visualization.arrayToDataTable([
            ["Comment", "Likes", {role: "style"}],
            ["Copper", 1, "#1976d2"],
            ["Silver", 9, "blue"],
            ["Gold", 13, "#1976d2"],
            ["Platinum", 19, "blue"]
        ]);
        var data2 = google.visualization.arrayToDataTable([
            ["Category", "Likes", {role: "style"}],
            ["Category", 8, "#1976d2"],
            ["Category", 10, "blue"],
            ["Category", 19, "#1976d2"],
            ["Category", 21, "blue"]
        ]);
        var data3 = google.visualization.arrayToDataTable([
            ["Category", "Likes", {role: "style"}],
            ["Category", 1, "#1976d2"],
            ["Category", 9, "blue"],
            ["Category", 13, "#1976d2"],
            ["Category", 19, "blue"]
        ]);
        var data4 = google.visualization.arrayToDataTable([
            ["Category", "Likes", {role: "style"}],
            ["Category", 8, "#1976d2"],
            ["Category", 10, "blue"],
            ["Category", 19, "#1976d2"],
            ["Category", 21, "blue"]
        ]);
        var data5 = google.visualization.arrayToDataTable([
            ["Category", "Likes", {role: "style"}],
            ["Category", 1, "#1976d2"],
            ["Category", 9, "blue"],
            ["Category", 13, "#1976d2"],
            ["Category", 19, "blue"]
        ]);
        var data6 = google.visualization.arrayToDataTable([
            ["Category", "Likes", {role: "style"}],
            ["Category", 1, "#1976d2"],
            ["Category", 9, "blue"],
            ["Category", 13, "#1976d2"],
            ["Category", 19, "blue"]
        ]);

        var view0 = new google.visualization.DataView(data0);
        var view1 = new google.visualization.DataView(data1);
        var view2 = new google.visualization.DataView(data2);
        var view3 = new google.visualization.DataView(data3);
        var view4 = new google.visualization.DataView(data4);
        var view5 = new google.visualization.DataView(data5);
        var view6 = new google.visualization.DataView(data6);
        view0.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2]);

        view1.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2]);
        view2.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2]);
        view3.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2]);
        view4.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2]);
        view5.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2]);
        view6.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2]);
        var options0 = {
            title: "Facebook",
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var options1 = {
            title: "VK",
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var options2 = {
            title: "Male",
            width: 599,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var options3 = {
            title: "Female",
            width: 599,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var options4 = {
            title: "16-25",
            width: 599,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var options5 = {
            title: "26-40",
            width: 599,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var options6 = {
            title: "40+",
            width: 599,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var chart0 = new google.visualization.ColumnChart(document.getElementById("columnchart_values0"));
        var chart1 = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
        var chart2 = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
        var chart3 = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
        var chart4 = new google.visualization.ColumnChart(document.getElementById("columnchart_values4"));
        var chart5 = new google.visualization.ColumnChart(document.getElementById("columnchart_values5"));
        var chart6 = new google.visualization.ColumnChart(document.getElementById("columnchart_values6"));
        chart0.draw(view0, options0);
        chart1.draw(view1, options1);
        chart2.draw(view2, options2);
        chart3.draw(view3, options3);
        chart4.draw(view4, options4);
        chart5.draw(view5, options5);
        chart6.draw(view6, options6);
    }
</script>