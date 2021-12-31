
$(document).ready(function() {
    $('#district').change(function() {
        var mqh =document.getElementById('district').value
       
        $.ajax({
            url: "data_phuong.php",
            dataType: "json",
            success: function(data){
                for(i=0;i<data.length;i++){
                    var xa = data[i]
                    if(xa['maqh'] == mqh){
                        var str = "<option value='" + xa['xaid']+"'>"+xa['name']+"</option>"
                        $('#ward').append(str)
                    }
                }
                
            }
        })
    })
})