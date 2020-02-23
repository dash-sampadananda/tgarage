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
                }
                $("#vehicleid").html(html);
                $("#vehicleid").attr("customer-id-attr", item.value);
            }
        });
    });
    $("#addcustomer").click(function (e) {
        e.preventDefault();
    });
    $("#addvehicle").click(function (e) {
        e.preventDefault();
    });

    $(".save-customer").click(function (event) {
        var name = $(".new-cust-name").val();
        var phone = $(".new-cust-phone").val();
        $.ajax({
            url: baseUrl + "/customer/addAjax",
            type: 'post',
            data: {name: name, phone: phone},
            success: function (data) {
                console.log(data);

            }
        });
    });

    $(".save-vehicle").click(function (event) {
        var make = $(".new-vehic-make").val();
        var model = $(".new-vehic-model").val();
        var number = $(".new-vehic-number").val();
        var custId = $("#vehicleid").attr("customer-id-attr");
        $.ajax({
            url: baseUrl + "/vehicle/addAjax",
            type: 'post',
            data: {make: make, model: model, number: number, customerid: custId},
            success: function (data) {
                console.log(data);
                if (data.length > 0) {
                    var html = '<option value="" >Select a Vehicle</option>';
                    data.forEach(function (vehicle) {
                        html = html + '<option value="' + vehicle.id + '">' + vehicle.make + " | " + vehicle.model + " | " + vehicle.number + '</option>'
                    });
                }
                $("#vehicleid").html(html);
                $("#vehicleid").attr("customer-id-attr", custId);
            }
        });
    });

    $(".add-jobeline").on('click', function () {
        $(".add-jobeline-row").append('<div class="row"><div class="col-md-3 col-md-offset-3"><div class="form-group"><input type="text" name="work_name" value="" class="form-control workname"></div></div> <div class="col-md-3"><div class="form-group"><input type="text" name="desscription" value="" class="form-control description"></div></div><div class="col-md-3"><div class="form-group"><button type="Delete" class="btn btn-danger remove-jobeline-row">Delete</button></div></div></div>');
    });

    $(document).on('click', '.remove-jobeline-row', function () {
        $(this).parent().parent().parent(".row").remove();
    });

    $(".save-jobeline").click(function (e) {
        e.preventDefault();
        var jobLineItemsWorkName = [];
        $(".workname").each(function () {
            jobLineItemsWorkName.push($(this).val());
        });

        var jobLineItemsDescription = [];
        $(".description").each(function () {
            jobLineItemsDescription.push($(this).val());
        });
        var url = $(location).attr('href');
        var parts = url.split("/");
        var jobcardid = parts[parts.length-1]
        $.ajax({
            url: baseUrl + "/jcline/addAjax",
            type: 'post',
            data: {jobLineItemsWorkName: jobLineItemsWorkName, jobLineItemsDescription: jobLineItemsDescription, jobcardid: jobcardid},
            success: function (data) {
                console.log(data);
                window.location.reload();
            }
        });
    });

});