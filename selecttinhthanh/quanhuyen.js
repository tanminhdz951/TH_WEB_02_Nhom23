
$(document).ready(function() {
    $('#province').change(function() {
        var mtp =document.getElementById('province').value
        $.ajax({
            url: "data_tinh.php",
            dataType: "json",
            success: function(data){
                for(i=0;i<data.length;i++){
                    var huyen = data[i]
                    if(huyen['matp'] == mtp){
                        var str = "<option value='" + huyen['maqh']+"'>"+huyen['name_quanhuyen']+"</option>"
                        $('#district').append(str)
                    }
                }
                
            }
        })
    })
})