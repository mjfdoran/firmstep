$(document).ready(function() {


    $("#customerForm").submit(function( event ) {
        event.preventDefault();
        var url = "customer";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#customerForm").serialize(),
            success: function(data) {
                /*user has been successfully added to the DB - now display user in table*/
                console.log('success');
                var numberOfRows = $(".table-row").length;
                console.log(numberOfRows);
                numberOfRows++;
                var newFormattedDate = new Date(data.created_at);
                var htmlToAddToTable = '<tr class="table-row"><td>' + numberOfRows + '</td><td>' + data.type + '</td><td>' + data.title + ' ' + data.first_name + ' ' + data.last_name + '</td><td>' + data.services +'</td><td>' + newFormattedDate.getHours() + ' ' +  newFormattedDate.getMinutes() + '</td></tr>';
                $("#queue").append(htmlToAddToTable);
            },
            error: function(data){
                /*user has not been added to DB - display the error messages*/
                console.log('error');
                console.log(data.responseText);
                var errorsHtml = $.parseJSON(data.responseText);
                errorsHtmlText = '<div class="alert alert-danger"><ul>';
                $.each( errorsHtml, function( key, value ) {
                    errorsHtmlText += '<li>' + value[0] + '</li>';
                });
                errorsHtmlText += '</ul></di>';
                $("#error").html(errorsHtmlText);
            }
        });
    });


    $(".type-btn").click(function(){
        /*update hidden radio button*/
        var dataType = $(this).data('type');
        $(".type-btn").removeClass('btn-primary');
        var identifier = '#typeRadios' + dataType;
        $(this).addClass('btn-primary');
        $('.hidden-radio').prop('checked', false);
        $(identifier).prop('checked', true);
    })
});
