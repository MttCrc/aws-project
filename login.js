$(document).ready(()=> {
    $("#login-form").submit((event)=> {
     $.ajax({
      type: "POST",
      url: "getlog.php",
      data: { nickname: $("#nickname-input").val(), password: $("#password-input").val() },
      dataType: "json",
      encode: true,
      success: (response)=>{
       $('#status-label-login').text(`Successo`)
       location.reload()
      },
      error: ()=>{ $('#status-label-login').text(`Errore`) }
     })
    event.preventDefault();
   });
   });