$(document).ready(function () {
   $("#login_form").submit(function () {
      $.post('models/requests/login.php', {phone: $("#phone").val()}, function (data){
         if(data.error) {
            alert(data.message);
         }
         else {
            location.href = 'home';
         }
      }, 'json');
   });
});