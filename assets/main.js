var baseUrl = "http://tgarage.com/index.php";
$(document).ready(function () {
    $(".custAutoComplete").autoComplete({
        minLength: 1
    });
    $(".custAutoComplete").on('autocomplete.select', function (evt, item) {
        console.log("autocomplete item"+JSON.stringify(item));
        $.ajax({
            url: baseUrl+"/vehicle/get_vehicles_by_customer/"+item.value,
            type: 'get',
            success: function (data) {
                console.log(data);
                if(data.length > 0){
                    var html = '<option value="" >Select a Vehicle</option>';
                    data.forEach(function(vehicle) {
                        html = html+'<option value="'+vehicle.id+'">'+vehicle.make+" | "+vehicle.model+" | "+vehicle.number+'</option>'
                    });
                    $("#vehicleid").html(html);
                }
            }
        });
    });
});