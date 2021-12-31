$(document).ready(function(){    
    $.ajax({
        url: "data_tinh.php",       
        dataType:'json',         
        success: function(data){     
            $("#province").html("");
            for (i=0; i<data.length; i++){            
                var tinh = data[i]; //vd  {idTinh:'6', loai:'Tỉnh', tenTinh:'Bắc Kạn'}
                var str = 
                "<option value='" + tinh['matp']+"'>"+tinh['name_tinhthanh']+"</option>";
                $("#province").append(str);
            }
            $( "#province").on("change", function(e) { layhuyen();});
        }
    });
});