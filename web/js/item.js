/**
 * Created by root on 10/4/14.
 */
$("#item-category_id").change(function(){
    $.getJSON('?r=type/ajax', {get:'tbc', category_id:$(this).val()},
        function(data){
            var html = '';

            for(var i = 0; i < data.types.length; i++){
                html += '<option value="' + data.types[i].id + '">' + data.types[i].name + '</option>';
            }

            $("#item-type_id").html(html);
        }
    );
});

$(':file').change(function(){
    var id = $(this).attr('id');

    if(this.files && this.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
            var image = $('<img style="width: 90px; height: 90px;">').attr('src', e.target.result);

            $('#preview_' + id).html(image);
        };

        reader.readAsDataURL(this.files[0]);
    }
});