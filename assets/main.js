$(document).ready(function () {
    $(".custAutoComplete").autoComplete({
        minLength: 1
    });
    $("#customerid").change(function () {
        $.ajax({
            url: baseUrl+"/vehicle/get_vehicles_by_customer",
            type: 'post',
            data: {"customerName":$(this).val()},
            success: function (data) {
                if(data.length > 0){
                    data.forEach(function (customer) {
                        html = html+
                    });
                }
            }
        });
    });
});