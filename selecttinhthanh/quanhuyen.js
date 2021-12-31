
$(document).ready(function() {
    $('#tinhthanh form-control').change(function() {
        var mtp =document.getElementById('tinhthanh form-control').value
        $.ajax({
            url: "data_tinh.php",
            dataType: "json",
            success: function(data){
                for(i=0;i<data.length;i++){
                    var huyen = data[i]
                    if(huyen['matp'] == mtp){
                        var str = "<option value='" + huyen['maqh']+"'>"+huyen['name_quanhuyen']+"</option>"
                        $('#quanhuyen form-control').append(str)
                    }
                }
                
            }
        })
    })
})