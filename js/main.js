 $(document).ready(function() {

     $("#add_contact").click(
         function() {
             var contact = [$("#new_first_name").val(), $("#new_last_name").val(), $("#new_email").val()];
             $.ajax({
                 type: 'POST',
                 url: '/contact/addContact',
                 data: 'contact=' + contact,
                 dataType: 'text',
                 success: function(data) {
                     if (data == false) {
                         alert('Check your information')
                     }
                 }
             });
         });

     $('.btn-del').click(
         function() {
             id = $(this).attr('data-file');
             $.ajax({
                 type: 'POST',
                 url: '/contact/deleteContact/' + id
             });
         });


     $('.btn-edt').click(
         function() {
             id = $(this).attr('data-file');
             var contact = [$("#first_name" + id).val(), $("#last_name" + id).val(), $("#email" + id).val()];
             $.ajax({
                 type: 'POST',
                 url: '/contact/updateContact/' + id,
                 data: 'contact=' + contact,
                 dataType: 'text',
                 success: function(data) {
                     if (data == false) {
                         alert('Check your information')
                     }
                 }

             });
         });

     $(document).ajaxStop(function() {
         window.location.reload();
     });



 });