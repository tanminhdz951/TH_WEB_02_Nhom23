function layhuyen(){
    var matp = $('#province').val();
    $.ajax({
        url: "http://localhost/thwnc/Lab12/data_huyen.php?matp=" + matp,
        dataType: "json",
        success: function(data){
            $("#district").html("");
            for(i=0;i<data.length;i++){
                var huyen = data[i]
                if(huyen['matp'] == matp){
                    var str = "<option value='" + huyen['maqh']+"'>"+huyen['name_quanhuyen']+"</option>"
                    $('#district').append(str)
                }
            }
            $( "#district").on("change", function(e) { layxa();});
        }
    })
}