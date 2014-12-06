$(document).ready(function (){

    $('#messageCard').hide();
    $('#ticketCard').hide();


    $('.list-group-item').click(






        function(){
            //$(this).css('background', '#428bca');

            link = $(this).attr('data');
            $.ajax({
                type: "GET",
                url: link,
                dataType: "json",
                async: false
            })
                .done(function(json){
                    //console.log(json.ticketNumber)

                    //Ticket details update
                    $('#TN').text(json.ticketNumber)
                    $('#ST').text(json.status)
                    $('#DC').text(json.dateCreated)
                    $('#LM').text(json.lastModified)
                    $('#AT').text(json.assignedTo)
                    $('#LP').text(json.lawyerPhone)
                    $('#LE').text(json.lawyerEmail)
                    $('#PP').text(json.pricePaid)
                    $('#DOI').text(json.dateOfIssue)
                    $('#COI').text(json.cityOfIssue)
                    $('#TY').text(json.ticketType)
                    $('#ON').text(json.offenceNumber)
                    $('#OA').text(json.offenceAmount)
                    $('#OD').text(json.offenceDetails)
                    $('#DN').text(json.driversName)
                    $('#DOB').text(json.dob)
                    $('#PH').text(json.phone)
                    $('#EM').text(json.email)
                    $('#LI').text(json.licenseNumber)
                    $('#NO').text(json.notes)

                    //ticket details footer
                    $('#LU').text(json.lastModified)

                    $('#comments').empty();

                    $('#fillerCard').hide();
                    $('#ticketCard').show();
                    $('#messageCard').show();
                    


                    if (json.comments.length ==0 ){

                        var domEl =   "<div class='list-group-item'>" +  "<h5 class='list-group-item-text'><strong> Bart Law Associates</strong> has not posted anything yet.</h5>" +
                                      "<p class='list-group-item-text'><em>" + "No Updates available at this time" + "</em></p></div>";

                        $('#comments').html(domEl);
                    }

                    else{

                        for( var i in json.comments){

                            var commentObject = json.comments[i];


                            var domEl =   "<div class='list-group-item'>" +  "<h5 class='list-group-item-text'><strong> Bart Law Associates</strong> commented on <strong>" + commentObject.time + "</strong></h5>" +
                                "<p class='list-group-item-text'><em>" + commentObject.comment + "</em></p></div>";

                            $('#comments').append(domEl);

                        }
                    }









                    });
        }
    )



});

















