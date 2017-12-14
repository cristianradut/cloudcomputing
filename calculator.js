jQuery = window.jQuery.noConflict(true);

jQuery(document).ready(function($) { 
    
    
    /* test */
    $( "#btn-sterge" ).click( function() {
        $( "#rez" ).val('');
            
    });
    
    var btnClassClick = function(e){
        currentBtn = e.currentTarget.id;
        currentValue = $( "#"+currentBtn ).html();
        //alert("Button clicked from class: "+currentValue);
        totalRez = $( "#rez" ).val();    
        $( "#rez" ).val(totalRez + currentValue);
    };

    $('.btn-calc').on('click', btnClassClick);
    
    
    $( "#btn-plus" ).click( function() {
        totalRez = $( "#rez" ).val(); 
        if (totalRez !== '' && $.isNumeric(totalRez.slice(-1)) ){
            $( "#rez" ).val(totalRez + '+');
        }
        
            
    });
    
    $( "#btn-minus" ).click( function() {
        totalRez = $( "#rez" ).val(); 
        if (totalRez !== '' && $.isNumeric(totalRez.slice(-1)) ){
            $( "#rez" ).val(totalRez + '-');
        }    
    });
    
    $( "#btn-multiply" ).click( function() {
        totalRez = $( "#rez" ).val();
        if (totalRez !== '' && $.isNumeric(totalRez.slice(-1)) ){
            $( "#rez" ).val(totalRez + '*');
        }    
    });
    
    $( "#btn-divide" ).click( function() {
        totalRez = $( "#rez" ).val();
        if (totalRez !== '' && $.isNumeric(totalRez.slice(-1)) ){
            $( "#rez" ).val(totalRez + '/');
        }    
    });
    
    $( "#btn-equal" ).click( function() {
        totalRez = $( "#rez" ).val();
        if (totalRez !== '' && $.isNumeric(totalRez.slice(-1)) ){
            rezultatFinal = calculeazaExpresie(totalRez);    
            $( "#rez" ).val(rezultatFinal);
        }    
    });
    
    
    function calculeazaExpresie (expr) {

        var chars = expr.split("");
        var n = [], op = [], index = 0, oplast = true;

        n[index] = "";

        // Parse the expression
        for (var c = 0; c < chars.length; c++) {

            if (isNaN(parseInt(chars[c])) && chars[c] !== "." && !oplast) {
                op[index] = chars[c];
                index++;
                n[index] = "";
                oplast = true;
            } else {
                n[index] += chars[c];
                oplast = false;
            }
        }

        // Calculate the expression
        expr = parseFloat(n[0]);
        for (var o = 0; o < op.length; o++) {
            var num = parseFloat(n[o + 1]);
            switch (op[o]) {
                case "+":
                    expr = expr + num;
                    break;
                case "-":
                    expr = expr - num;
                    break;
                case "*":
                    expr = expr * num;
                    break;
                case "/":
                    expr = expr / num;
                    break;
            }
        }

        return expr;
    }
    
});

