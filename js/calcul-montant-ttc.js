$("body").click(function(){
    var value_ttc = parseFloat($("#ht").val()) + parseFloat($("#tva-cinq").val()) + parseFloat($("#tva-dix").val()) + parseFloat($("#tva-vingt").val());
    $("#ttc").val(value_ttc);
});
