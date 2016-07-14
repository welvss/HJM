var email = $('#email').val();
function checkemail(val,loc) {
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/"+loc+"/checkemail",
  data:'email='+val,
  dataType: 'json',
  cache: true,
  success: function(data){
    if(data.success==true && email==val)
    {
      $('#error').html(" ");
      document.getElementById('submit').disabled = false;
    }
    else
    if(data.success==true && email!=val)
    {
      $('#error').html(data.error);
      document.getElementById('submit').disabled = true;
    }
    else
    {
      $('#error').html(data.error);
      document.getElementById('submit').disabled = false;
    }
  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}
