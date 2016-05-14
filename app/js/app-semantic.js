$( document ).ready(function() {
  
  $(".mode").click(function(){
  	$('.ui.modal').modal('show');
  });
  $('.menu .item')
  .tab()
;
$('#same-as').change(function(){
    if (this.checked) {
        document.getElementById("ship-street").disabled = true;
		document.getElementById("ship-city").disabled = true;
		document.getElementById("ship-baranggay").disabled = true;
    }
	else{
		 document.getElementById("ship-street").disabled = false;
		document.getElementById("ship-city").disabled = false;
		document.getElementById("ship-baranggay").disabled = false;
	}


});
// Initialize sidebar
$('.sidebar')
    .sidebar({
      dimPage: true,
      closable: true
    });
 $('.right.menu.open').on("click",function(e){
    e.preventDefault();
    $('.ui.vertical.menu').toggle();
  });
    
  $('.ui.dropdown').dropdown();

$('.button')
  .popup({
    inline: true
  })
;
$(".sidebar-button").click(function(){
    $('.sidebar')
  .sidebar('toggle')
;
  });

});