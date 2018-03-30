$(document).ready(function ()
{
  var quantity1 = 0;
$('#plus1').click(function(e){
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity1 = parseInt($('#quantity1').val());
    // If is not undefined
        $('#quantity1').val(quantity1 + 1);  // Increment
});

 $('#minus1').click(function(e){
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity1 = parseInt($('#quantity1').val());
    // If is not undefined
        // Increment
        if(quantity1>0){
        $('#quantity1').val(quantity1 - 1);
        }
      });

    var quantity2 = 0;
    $('#plus2').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity2 = parseInt($('#quantity2').val());
        // If is not undefined
        $('#quantity2').val(quantity2 + 1);  // Increment
    });

    $('#minus2').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity2 = parseInt($('#quantity2').val());
        // If is not undefined
        // Increment
        if(quantity2>0){
            $('#quantity2').val(quantity2 - 1);
        }
    });
    var quantity3 = 0;
    $('#plus3').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity3 = parseInt($('#quantity3').val());
        // If is not undefined
        $('#quantity3').val(quantity3 + 1);  // Increment
    });

    $('#minus3').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity3 = parseInt($('#quantity3').val());
        // If is not undefined
        // Increment
        if(quantity3>0){
            $('#quantity3').val(quantity3 - 1);
        }
    });
    var quantity4 = 0;
    $('#plus4').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity4 = parseInt($('#quantity4').val());
        // If is not undefined
        $('#quantity4').val(quantity4 + 1);  // Increment
    });

    $('#minus4').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity4 = parseInt($('#quantity4').val());
        // If is not undefined
        // Increment
        if(quantity4>0){
            $('#quantity4').val(quantity4 - 1);
        }
    });
    var quantity5 = 0;
    $('#plus5').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity5 = parseInt($('#quantity5').val());
        // If is not undefined
        $('#quantity5').val(quantity5 + 1);  // Increment
    });

    $('#minus5').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity5 = parseInt($('#quantity5').val());
        // If is not undefined
        // Increment
        if(quantity5>0){
            $('#quantity5').val(quantity5 - 1);
        }
    });

    $('#addto').click(function (e) {
        e.preventDefault();
        var subtotal, taxes, shipping, total, shippingPrice,check;
        check = document.getElementById("express").checked;
        if (check == true) {
            shippingPrice = 0.20;
        }
        else{
            shippingPrice = 0.10;
        }
        subtotal = parseInt($('#quantity1').val())*200 + parseInt($('#quantity2').val())*140 + parseInt($('#quantity3').val())*120 + parseInt($('#quantity4').val())*300 + parseInt($('#quantity5').val())*250 ;
        taxes = subtotal*0.15;
        shipping = subtotal*shippingPrice;
        total = subtotal + taxes + shipping;

        document.getElementById("sub").innerHTML = "Subtotal: $"+ subtotal;
        document.getElementById("tax").innerHTML = "Tax(HST): $"+ taxes;
        document.getElementById("shipping").innerHTML = "Shipping: $"+ shipping;
        document.getElementById("total").innerHTML = "Total: $"+ total;
    })
});
