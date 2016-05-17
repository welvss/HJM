$(document).foundation();
$(window)
        .load(function() {
            SetOffCanvasHeight();
        })
        .resize(function() {
            SetOffCanvasHeight();
        });

        function SetOffCanvasHeight() {
            var height = $(window).height();
            var contentHeight = $(".off-canvas-content").height();
            if (contentHeight > height) { height = contentHeight; }

            $(".off-canvas-wrapper").height(height);
            $(".off-canvas-wrapper-inner").height(height);
            $(".off-canvas").height(height);
        } 

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
$('#j-table').DataTable( {
	responsive: true,
	scrollY: '50vh',
	scrollCollapse: true,
	paging: false,
	select: true,
	  dom: 'Bfrtip',
        buttons: [
            'print'
        ],
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
	
});
//
  var dataTable = $('#j-table').dataTable();
    $("#custom-searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });    





