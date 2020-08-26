<!-- Action : page to go  -->
<form id="mail-form" name="myemailform" action="javascript:void(0);">  
   <!-- action on the page php -->
  <input type="hidden" name="action" value="sendmail">

  Enter Subject:	<input type="text" name="subject"><br>
  
  Enter Email Address:	<input type="text" name="email"><br>
  
  Enter Message:<br>	<textarea name="message"></textarea><br>
  
  <button id="btn-mail">Envoi</button>
</form>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
</script>

<!-- Script Ajax -->
<script>
  $('document').ready(() => {
    document.getElementById("btn-mail").addEventListener("click", () => {
      var form = document.getElementById("mail-form");
      var formData = new FormData(form);  
      $.ajax({
        url: "sendMail.php",
        method: "POST",
        data: { 
          action : "sendMail",  
          data: {subject: formData.get("subject"), email: formData.get("email"), message: formData.get("message")} 
        },
      }).done(function(msg){
        alert(msg);
      }).fail(function(error){
        alert(error);
      });
    });
  });
</script>