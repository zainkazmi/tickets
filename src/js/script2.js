/**
 * Created by Zain Kazmi on 12/1/2014.
 */
//When the document is ready
$(document).ready(
                   function(){

                       //when the list group item is clicked
                       $('.list-group-item').click(



                                 //another function within click
                                  function(){

                                      $('#info').remove();

                                      id = $(this).attr('id');
                                      link = $(this).attr('data');

                                      //$.ajax({type: "GET", url: link, dataType: "json", async: false}).done(function(json){

                                              $.getJSON(link, function(json){



                                         var ticketDetail =    "<div id='info'>"
                                                               +"<div class='list-group-item'><div class='row'><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Ticket#: </strong>"
                                                               +json.ticketNumber
                                                               +"</p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Status: </strong>"
                                                               +json.status
                                                               +"</p> </div> <div class='col-xs-3' style='font-size: 13px; color:darkgray'> <p class='list-group-item-text'><strong>Date Created: </strong>"
                                                               +json.dateCreated
                                                               +"</p> </div> <div class='col-xs-3' style='font-size: 13px; color:darkgray'> <p class='list-group-item-text'><strong>Type: </strong>"
                                                               +json.ticketType
                                                               +"</p></div></div></div><div class='list-group-item'><div class='row'><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Assigned to: </strong>"
                                                               +json.assignedTo
                                                               +"</p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Phone: </strong>"
                                                               +json.lawyerPhone
                                                               +"</p></div><div class='col-xs-3'style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Email: </strong><a href='/'>"
                                                               +json.lawyerEmail
                                                               +"</a></p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Price paid: </strong>"
                                                               +json.pricePaid
                                                               +"</span></p></div></div></div><div class='list-group-item'><div class='row'><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Date of Issue: </strong>"
                                                               +json.dateOfIssue
                                                               +"</p></div><div class ='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>City of Issue: </strong>"
                                                               +json.cityOfIssue
                                                               +"</p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Offence #: </strong>"
                                                               +json.offenceNumber
                                                               +"</p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Offence amount: </strong>"
                                                               +json.offenceAmount
                                                               +"</p></div></div></div><div class='list-group-item'><div class='row'><div class='col-xs-7' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Offence Details: </strong>"
                                                               +json.offenceDetails
                                                               +"</p></div></div></div><div class='list-group-item'><div class='row'><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Driver's Name: </strong>"
                                                               +json.driversName
                                                               +"</p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>License #: </strong>"
                                                               +json.licenseNumber
                                                               +"</p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>DOB: </strong>"
                                                               +json.dob
                                                               +"</p></div><div class='col-xs-3' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Phone: </strong>"
                                                               +json.phone
                                                               +"</p></div></div></div><div class='list-group-item' style='font-size: 13px; color:darkgray'><p class='list-group-item-text'><strong>Email: </strong>"
                                                               +json.email
                                                               +"</p><p class='list-group-item-text'><strong>Notes: </strong>"
                                                               +json.notes
                                                               +"</p></div><div class='list-group-item' id='comment' style='font-size: 13px; color:darkgray; '>"
                                                               +"<p class='list-group-item-text'><strong>Comments by the lawyer: </strong></p>"
                                                               +"</div><div class='list-group-item' id='more' style='font-size: 13px; color:darkgray; '>"
                                                               +"<a class='list-group-item-text' href='ticket.html'><strong>More Details >>> </strong></a>"
                                                               +"</div></div>";

                                         $("#" + id).after(ticketDetail);


                                          if (json.comments.length ==0 ){

                                                  var commentSec =   "<h5 class='list-group-item-text' >Lawyer has not posted anything yet: <em>" + "\"No Updates available at this time\"" + "</em></h5>";

                                                  $('#comment').append(commentSec);
                                              }

                                          else{


                                                  for( var i in json.comments){

                                                      var commentObject = json.comments[i];


                                                      var domEl =   "<h5 class='list-group-item-text'>Posted on <strong>" + commentObject.time + "</strong>: <em> \"" + commentObject.comment + "\"</em></h5>";


                                                      $('#comment').append(domEl);

                                                  }



                                          }





                                      });

                                 }




                       )


                   }
                 )