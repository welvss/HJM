$( document ).ready(function() {

  $('.ui.dropdown').dropdown();

    if($('#Tray').val()==1)
      document.getElementById("Tray1").checked=true;
    else
      document.getElementById("Tray1").checked=false;

    $('#Tray1').change(function(){
      if (this.checked) {
       $('#Tray').val(1);
       
      }
      else{
        $('#Tray').val(0);
      }
    });


    if($('#SG').val()==1)
      document.getElementById("SG1").checked=true;
    else
      document.getElementById("SG1").checked=false;

    $('#SG1').change(function(){
      if (this.checked) {
       $('#SG').val(1);
       
      }
      else{
        $('#SG').val(0);
      }
    });




    if($('#BW').val()==1)
      document.getElementById("BW1").checked=true;
    else
      document.getElementById("BW1").checked=false;

    $('#BW1').change(function(){
      if (this.checked) {
       $('#BW').val(1);
       
      }
      else{
        $('#BW').val(0);
      }
    });




    if($('#MC').val()==1)
      document.getElementById("MC1").checked=true;
    else
      document.getElementById("MC1").checked=false;

    $('#MC1').change(function(){
      if (this.checked) {
       $('#MC').val(1);
       
      }
      else{
        $('#MC').val(0);
      }
    });


    if($('#OC').val()==1)
      document.getElementById("OC1").checked=true;
    else
      document.getElementById("OC1").checked=false;

    $('#OC1').change(function(){
      if (this.checked) {
       $('#OC').val(1);
       
      }
      else{
        $('#OC').val(0);
      }
    });



    if($('#Photos').val()==1)
      document.getElementById("Photos1").checked=true;
    else
      document.getElementById("Photos1").checked=false;

    $('#Photos1').change(function(){
      if (this.checked) {
       $('#Photos').val(1);
       
      }
      else{
        $('#Photos').val(0);
      }
    });


    if($('#Articulator').val()==1)
      document.getElementById("Articulator1").checked=true;
    else
      document.getElementById("Articulator1").checked=false;

    $('#Articulator1').change(function(){
      if (this.checked) {
       $('#Articulator').val(1);
       
      }
      else{
        $('#Articulator').val(0);
      }
    });



    if($('#OD').val()==1)
      document.getElementById("OD1").checked=true;
    else
      document.getElementById("OD1").checked=false;

    $('#OD1').change(function(){
      if (this.checked) {
       $('#OD').val(1);
       
      }
      else{
        $('#OD').val(0);
      }
  	});


});


function getID(val){
    $.get("http://"+window.location.hostname+"/HJM/Order/getCount", function(data){
        if(val!='')
        $("#CaseID").html('<label>'+val+'-'+data+'</label>');
    });
}

function getCaseType(val) {
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Order/getCaseType",
  data:'Type='+val,
  success: function(data){
    $('#CaseTypeID').html(data);
  
    $('#items').dropdown('clear');
    $('#CaseID').html('');
    $('#Case').html('');
    $('#CaseTypeID').val();
   
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}