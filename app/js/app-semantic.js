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

$(".sidebar-button").click(function(){
    $('.sidebar')
  .sidebar('toggle')
;
  });
 $('#customer-table').DataTable( {
        "scrollY":        '40vh',
        "scrollCollapse": true,
        "paging":         false,
        'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1, -2, -3] /* 1st one, start by the right */
    }]
    } );

  var dataTable = $('#customer-table').dataTable();
    $("#search-customer").keyup(function() {
        dataTable.fnFilter(this.value);
    });    

    $('.popup')
  .popup()
;
$('.ui.form')
  .form({
    fields: {
      firstName: {
        identifier: 'firstName',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      lastName: {
        identifier: 'lastName',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      customerStreet: {
        identifier: 'customerStreet',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      customerCity: {
        identifier: 'customerCity',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      customerBaranggay: {
        identifier: 'customerBaranggay',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      sFname: {
        identifier: 'sFname',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      sLname: {
        identifier: 'sLname',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      sEmail: {
        identifier: 'sEmail',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      sStreet: {
        identifier: 'sStreet',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      sCity: {
        identifier: 'sCity',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      sBaranggay: {
        identifier: 'sBaranggay',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      }
    }
  })
;
 //end
});