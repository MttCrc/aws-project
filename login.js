$(document).ready(()=> {
    $("#login").submit((event)=> {
     $.ajax({
      type: "POST",
      url: "getlog.php",
      data: { nickname: $("#nickname").val(), password: $("#password").val() },
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