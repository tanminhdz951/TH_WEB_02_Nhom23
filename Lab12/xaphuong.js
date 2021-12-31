function layxa(){
    var maqh = $('#district').val();
    $.ajax({
        url: "http://localhost/thwnc/Lab12/data_phuong.php?maqh=" +maqh,
        dataType: "json",
        success: function(data){
            $("#ward").html("");
            for(i=0;i<data.length;i++){
                var xa = data[i]
                if(xa['maqh'] == maqh){
                    var str = "<option value='" + xa['xaid']+"'>"+xa['name']+"</option>"
                    $('#ward').append(str)
                }
            }
        }
    })
}