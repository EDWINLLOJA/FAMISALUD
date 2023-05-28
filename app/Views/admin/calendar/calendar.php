<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>FullCalendar Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<div class="container-fluid py-4">
<div class="row">
            <div class="col-12">
                <div class="card mb-4">
  <div id="calendar"></div>
  </div>
  </div>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek'
        },
        defaultView: 'month',
        selectable: true,
        select: function(start, end) {
          var eventData = {
            title: 'Evento',
            start: start,
            end: end
          };

          var $dialogContent = $('<div>').append(
            $('<label>').text('Doctor:'),
            $('<input>').attr('type', 'text').attr('id', 'doctor'),
            $('<br>'),
            $('<label>').text('Especialidad:'),
            $('<input>').attr('type', 'text').attr('id', 'especialidad'),
            $('<br>'),
            $('<label>').text('Duración (minutos):'),
            $('<input>').attr('type', 'number').attr('id', 'duration').attr('min', '1')
          );

          var $dialog = $('<div>').append($dialogContent).dialog({
            title: 'Agregar evento',
            modal: true,
            buttons: {
              'Agregar': function() {
                eventData.title = $('#doctor').val();
                eventData.doctor = $('#doctor').val();
                eventData.especialidad = $('#especialidad').val();
                eventData.duration = parseInt($('#duration').val());

                $('#calendar').fullCalendar('renderEvent', eventData, true);
                $dialog.dialog('close');
              },
              'Cancelar': function() {
                $dialog.dialog('close');
              }
            },
            close: function() {
              $dialog.dialog('destroy').remove();
            }
          });

          $dialog.dialog('open');
          $('#calendar').fullCalendar('unselect');
        },
        // Otras opciones y configuraciones
        // ...
      });
    });
  </script>
</body>
</html>
