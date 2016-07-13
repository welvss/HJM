
$( document ).ready(function() {
  
  $(".mode").click(function(){
    $('.ui.modal').modal('show');
  });
  $('.menu .item')
  .tab()
;
$('#same-as').change(function(){
    if (this.checked) {
      var customerStreet= $('#customerStreet').val(),
          customerCity=$('#customerCity').val(),
          customerBaranggay=$('#customerBaranggay').val();
      document.getElementById("ship-street").disabled = true;
      $('#ship-street').text(customerStreet);
      document.getElementById("ship-city").disabled = true;
      $('#ship-city').val(customerCity);
      document.getElementById("ship-baranggay").disabled = true;
      $('#ship-baranggay').val(customerBaranggay);
    }
    else{
      document.getElementById("ship-street").disabled = false;
      $('#ship-street').text('');
      document.getElementById("ship-city").disabled = false;
      $('#ship-city').val('');
      document.getElementById("ship-baranggay").disabled = false;
      $('#ship-baranggay').val('');
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
            prompt : 'Please enter your First name'
          }
        ]
      },
      lastName: {
        identifier: 'lastName',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your Last name'
          }
        ]
      },
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your Email Address'
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
      company: {
        identifier: 'company',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      title: {
        identifier: 'title',
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

