
$(document).ready(function () {

    $('#action').click(function (event) {
        event.preventDefault();
        var path = $("#ph_div").attr("data-path");
        console.log(path);
        alert("hweh");

        $.ajax({
            type: 'GET',
            url: path,
            data: path,
            success: function (data) {

                $(data).appendTo(".modal-dialog");

//                $('#myModal').modal('open');
                $('form').submit(function (event) {

                    event.preventDefault();
                    var datak = {request: $('#phone_number').val()};
                    var path = $("#phone_div").attr("data-path");

                    console.log(datak, path);

                    $.ajax({
                        type: 'POST',
                        url: path,
                        data: datak,
                        success: function (data) {

                            $('ul').append(datak.request);
                            console.log(datak);
                            $('#myModal').modal('hide');

                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown)
                        {

                            alert('Error : ' + errorThrown);

                        }
                    });
                });


            },
            error: function (XMLHttpRequest, textStatus, errorThrown)
            {

                alert('Error : ' + errorThrown);

            }
        });
    });



});
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


