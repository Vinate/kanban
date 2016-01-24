<!--styles -->
<link rel="stylesheet" type="text/css" href="gantt/lib/jquery-ui-1.8.4.css" >
<link rel="stylesheet" type="text/css" href="gantt/reset.css" >
<link rel="stylesheet" type="text/css" href="gantt/jquery.ganttView.css" >

<!--scripts-->
<script type="text/javascript" src="gantt/lib/jquery-1.4.2.js"></script>
<script type="text/javascript" src="gantt/lib/date.js"></script>
<script type="text/javascript" src="gantt/lib/jquery-ui-1.8.4.js"></script>
<script type="text/javascript" src="gantt/jquery.ganttView.js"></script>
<script type="text/javascript" src="gantt/data.js"></script>
<script type="text/javascript">
    $(function () {
        $("#ganttChart").ganttView({
            data: ganttData,
            slideWidth: 900,
            behavior: {
                onClick: function (data) {
                    var msg = "You clicked on an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                },
                onResize: function (data) {
                    var msg = "You resized an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                },
                onDrag: function (data) {
                    var msg = "You dragged an event: { start: " + data.start.toString("M/d/yyyy") + ", end: " + data.end.toString("M/d/yyyy") + " }";
                    $("#eventMessage").text(msg);
                }
            }
        });

    });
</script>

