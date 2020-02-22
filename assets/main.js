var baseUrl = "http://tgarage.com/index.php";
$(document).ready(function () {
    $(".custAutoComplete").autoComplete({
        minLength: 1
    });
    $(".custAutoComplete").on('autocomplete.select', function (evt, item) {
        console.log("autocomplete item" + JSON.stringify(item));
        $.ajax({
            url: baseUrl + "/vehicle/get_vehicles_by_customer/" + item.value,
            type: 'get',
            success: function (data) {
                console.log(data);
                if (data.length > 0) {
                    var html = '<option value="" >Select a Vehicle</option>';
                    data.forEach(function (vehicle) {
                        html = html + '<option value="' + vehicle.id + '">' + vehicle.make + " | " + vehicle.model + " | " + vehicle.number + '</option>'
                    });
                    $("#vehicleid").html(html);
                    $("#vehicleid").attr("customet-id-attr", item.value);
                }
            }
        });
    });
    $("#addcustomer").click(function (e) {
        e.preventDefault();
    });
    $("#addvehicle").click(function (e) {
        e.preventDefault();
    });

    $(".save-customer").click(function(event){
        var name = $(".new-cust-name").val();
        var phone = $(".new-cust-phone").val();
        $.ajax({
            url: baseUrl + "/customer/addAjax",
            type: 'post',
            data: {name : name, phone : phone},
            success: function (data) {
                console.log(data);
                
            }
        });
    });
    
    $(".save-vehicle").click(function(event){
        var make = $(".new-vehic-make").val();
        var model = $(".new-vehic-model").val();
        var number = $(".new-vehic-number").val();
        var custId = $("#vehicleid").attr("customet-id-attr");
        $.ajax({
            url: baseUrl + "/vehicle/addAjax",
            type: 'post',
            data: {make: make, model: model, number: number, customerid: custId},
            success: function (data) {
                console.log(data);
                
            }
        });
    });

});