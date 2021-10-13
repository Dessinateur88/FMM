<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Para el Calendario-->

<link rel="stylesheet"  href='calendar/fullcalendar.min.css' rel='stylesheet' />
<link rel="stylesheet" href='calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='calendar/moment.min.js'></script>
<script src='calendar/jquery.min.js'></script>
<script src='calendar/fullcalendar.min.js'></script>
<script src='calendar/es.js'></script>

</head>

<script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      timeFormat: 'h(:mm)t', // uppercase H for 24-hour clock
      header: { 
          left:'today,prev,next',
          center: 'title',
          right: 'month,basicWeek, basicDay, agendaWeek, agendaDay'
          },
          dayClick: function(date, jsEvent, view) {
          $('#txtFecha').val(date.format());
          $("#ModalEditar").modal("show");
          },

      /*defaultDate: '2020-05-12',*/
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: 'calendar/eventos.php',
        /*{
          title: 'All Day Event',
          description: 'Holiiii',
          start: '2021-10-10'
        },
        {
          title: 'Long Event',
          description: 'hola',
          start: '2021-10-07',
          end: '2021-10-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2021-10-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2021-10-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2021-10-11',
          end: '2021-10-13'
        },
        {
          title: 'Meeting',
          start: '2021-10-12T10:30:00',
          end: '2021-10-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2021-10-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2021-10-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2021-10-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2021-10-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2021-10-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2021-10-28'
        }
      ],
      eventColor: '#378006',
      eventTextColor: 'red',*/


      eventClick: function(calEvent, jsEvent, view) {
      $('#ID_FMM').html(calEvent.title);
      $('#Paciente').html(calEvent.Paciente);
      $('#Hospital').html(calEvent.Hospital);
      $('#Tratamiento').html(calEvent.Tratamiento);
      $('#Observaciones_Cita').html(calEvent.Observaciones_Cita);
      $('#Status_Cita').html(calEvent.Status_Cita);
      $("#ModalEventos").modal("show");
      }


    });
  });

</script>

<!-- Modal -->
<div class="modal fade" id="ModalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Paciente"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id='title'></div>
        <div id='Paciente'></div>
        <div id='Hospital'></div>
        <div id='Tratamiento'></div>
        <div id='Observaciones_Cita'></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-success">Modificar</button>
        <button type="button" class="btn btn-danger">Borrar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal AGREGAR MODIFICAR ELIMINAR -->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Paciente"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Fecha: <input type="text" id="txtFecha" name="txtFecha" /><br/>
        Titulo: <input type="text" id="txtTitulo"><br/>
        Hora: <input type="text" id="txtHora"><br/>
        Observaciones_Cita: <textarea type="text" id="txtObservaciones_Cita" rows="3"></textarea>><br/>
        Tratamiento: <input type="text" id="txtTratamiento"><br/>
        <div id='Observaciones_Cita'></div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-success">Modificar</button>
        <button type="button" class="btn btn-danger">Borrar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<body>
    <div> 
    <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<div id='calendar'></div>
						</div>
					</div>
				</div>
    </div>



</body>

<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</html>


