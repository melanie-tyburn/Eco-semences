$("body").click(function(){
    var value_ttc = parseInt($("#ht").val()) + parseInt($("#tva-cinq").val()) + parseInt($("#tva-dix").val()) + parseInt($("#tva-vingt").val());
    $("#ttc").val(value_ttc);
});
