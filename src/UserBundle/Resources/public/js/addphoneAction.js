
        $(document).ready(function () {
            
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

        });
  