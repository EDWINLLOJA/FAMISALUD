<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css' />
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' />
</head>
<body>

    <div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="calendarModalLabel">Calendario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>

    <script>
    $(document).ready(function() {
        $('#calendarModal').modal('show');

        $('#calendarModal').on('shown.bs.modal', function (e) {
            $('#calendar').fullCalendar({
                // Configuraciones del calendario
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek'
                },
                defaultView: 'month',
                selectable: true,
                editable: false,
                // Otros eventos y configuraciones del calendario
                // ...
            });

            // Agregar eventos al calendario
            var eventData1 = {
                title: 'Evento 1',
                start: '2023-06-01'
            };
            var eventData2 = {
                title: 'Evento 2',
                start: '2023-06-05'
            };
            var eventData3 = {
                title: 'Evento 3',
                start: '2023-06-10'
            };
            $('#calendar').fullCalendar('renderEvent', eventData1, true);
            $('#calendar').fullCalendar('renderEvent', eventData2, true);
            $('#calendar').fullCalendar('renderEvent', eventData3, true);
        });

        $('#calendarModal').on('hidden.bs.modal', function (e) {
            $('#calendar').fullCalendar('destroy'); // Destruir el calendario al cerrar el modal
        });
    });
    </script>
</body>
</html>
