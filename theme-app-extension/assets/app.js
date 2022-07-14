
$(document).ready(function () {


    // Attach Button click event listener
   $("#myBtn").click(function(){

        // show Modal
        $('#myModal').modal('show');
        var productTitle =document.getElementById('callback_title').textContent;
        $('#callback_title').val(productTitle);
        var link = window.location.href;
        $('#callback_url').val(link);


   });
});


$('#contactForm').on('submit',function(e){
     e.preventDefault();

     var name = $("input[name=name]").val();
     console.log(name);
     var contact = $("input[name=contact]").val();
     console.log(contact);
     var query = $("input[name=query]").val();
     console.log(query);
     var product_title =  $('#callback_title').val();
     console.log(product_title);
     var url =  $('#callback_url').val();
     console.log(url);



     $.ajax({
        type:'POST',
        dataType: 'json',
        "crossDomain": true,
        "headers": {
            "accept": "application/json",
            "Access-Control-Allow-Origin":"*",
        },
        url:'https://7126-2400-adc1-145-5f00-2011-e4d7-ebf9-e9fd.ngrok.io/api/ajaxRequest',
        data:{
            name:name,
            query:query,
            contact:contact,
            product_title:product_title,
            product_url:url,

        },
        success:function(data){
           alert(data.success);
           if (data) {
                  $('#success-message').text(data.success);
                  $("#contactForm")[0].reset();
                }
        }
     });



     // let name = $('#name').val();
     // console.log(name);
     // let query = $('#query').val();
     // $.ajax({
     //   url: "/contact-form",
     //   type:"POST",
     //   data:{
     // //     "_token": "{{ csrf_token() }}",
     //     name:name,
     //     query:query
     //   },
     //   success:function(response){
     //     console.log(response);
     //     if (response) {
     //       $('#success-message').text(response.success);
     //       $("#contactForm")[0].reset();
     //     }
     //   }
     //   error: function(response) {
     //     $('#name-error').text(response.responseJSON.errors.name);
     //     $('#email-error').text(response.responseJSON.errors.email);
     //     $('#mobile-number-error').text(response.responseJSON.errors.mobile_number);
     //     $('#subject-error').text(response.responseJSON.errors.subject);
     //     $('#message-error').text(response.responseJSON.errors.message);
     //    }
     //  });
     });
