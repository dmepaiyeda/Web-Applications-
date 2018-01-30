

$(document).ready(function ()
{
        $("div.content").hide();
        $("#CSC").click(function() {
                $("div.content").hide();
                $("#campbells").show();
            }

        );
        $("#SN").click(function() {
            $("div.content").hide();
            $("#starry").show();
        });
        $("#BV").click(function() {
            $("div.content").hide();
            $("#venus").show();
        });
        $("#LS").click(function() {
            $("div.content").hide();
            $("#supper").show();
        });
        $("#WW").click(function() {
            $("div.content").hide();
            $("#weeping").show();
        });

});
