$(document).ready(function ()
{
    // hides all extra content on load of page
        $("div.content").hide();
        // hides information that is being shown and shows the required content
        $("#CSC").click(function() {
                $("div.content").hide();
                $("#campbells").show();
        });
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
        $("#CM").click(function(){
            $("div.content").hide();
            $("#claude").show();
        });
        $("#VV").click(function(){
            $("div.content").hide();
            $("#vincent").show();
        });
        $("#LV").click(function(){
            $("div.content").hide();
            $("#leonardo").show();
        });
        $("#MM").click(function(){
            $("div.content").hide();
            $("#michel").show();
        });
        $("#AW").click(function(){
            $("div.content").hide();
            $("#andy").show();
        });

        $("#AU").click(function() {
            $("div.content").hide();
            $("#home").show();
        });
        $("#AG").click(function(){
            $("div.content").hide();
        })
        $("#H").click(function(){
            $("div.content").hide();
        });

        var quantity = 0;
       $('.quantity-plus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            // If is not undefined
                $('#quantity').val(quantity + 1);  // Increment
        });

         $('.quantity-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            // If is not undefined
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });

});
