/**
 * Created by LIBCASTING on 11/12/2017.
 */

$.ajax({
    type: "POST",
    url: "../convert_to_json/controller/controller.php",
    data: {action:"get-data"},
    success: function (data) {
        var data_success = JSON.parse(data);
        console.log(data_success);
        $("#results").html(data_success["MSG"][0] + " " + data_success["DATA"][0]);
    }
});
