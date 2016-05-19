var socket  = require( 'socket.io' );
var express = require('express');
var app     = express();
var server  = require('http').createServer(app);
var io      = socket.listen( server );
var port    = process.env.PORT || 3000;

server.listen(port, function () {
  console.log('Server listening at port %d', port);
});


io.on('connection', function (socket) {

  socket.on( 'new_count_order', function( data ) {
    io.sockets.emit( 'new_count_order', { 
    	new_count_order: data.new_count_order

    });
  });

  socket.on( 'update_count_message', function( data ) {
    io.sockets.emit( 'update_count_message', {
    	update_count_message: data.update_count_message 
    });
  });

  socket.on( 'new_order', function( data ) {
    io.sockets.emit( 'new_order', {
    	CaseID :data.CaseID,
      patient : data.patient,
      fullname: data.fullname,
      company: data.company,
      orderdatetime: data.orderdatetime,
      DentistID : data.DentistID,
      duedate : data.duedate ,
      duetime : data.duetime ,
      age : data.age,
      gender : data.gender,
      notes : data.notes,
      status: data.status
    });
  });

  
});
