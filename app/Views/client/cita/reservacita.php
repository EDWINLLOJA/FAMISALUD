<?php
// Verificar si se ha pasado el parámetro idHorario en la URL
$idHorario = isset($_GET['idHorario']) ? $_GET['idHorario'] : null;
?>


<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de calendario en modal con selección de eventos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
    .toast-error {
        background-color: rgb(255, 189, 8);
        /* Fondo amarillo */
        color: black !important;
        /* Color de texto negro */
        font-weight: bold !important;
        /* Letra en negrita */
    }
    </style>
    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can
                            Trust</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd
                            ipsum.
                            Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos
                            vero
                            eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna
                            sit.
                            Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form id="primeravista" action="<?= base_url('guardar_cliente_cita') ?>" method="post"
                            enctype="multipart/form-data">


                            <input type="hidden" name="idHorario" id="idHorario" value="">
                            <input type="hidden" name="idPersonal" id="idPersonal" value="">
                            <input type="hidden" name="idEspecialidad" id="idEspecialidad" value="">
                            <!--  Comienzo filtro inicial-->
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select id="cboespecialidad" class="form-select bg-light border-0"
                                        style="height: 55px;">
                                        <option selected>Especialidad</option>
                                        <?php foreach ($especialidad as $especialidades) : ?>
                                        <option required value="<?= $especialidades['idespecialidad']; ?>">
                                            <td><?= $especialidades['Especialidad']; ?></td>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-light border-0 datecalendario-input"
                                            placeholder="Fecha" data-target="#date1" data-toggle="datecalendario"
                                            style="height: 55px;">
                                    </div>
                                </div>


                                <!--  FIn comienzo filtro-->
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Doctor"
                                        id="doctorField" readonly style="height: 55px;">
                                </div>


                                <!--  Inicio Filtro-->



                                <div class="col-6 col-sm-6" style="display:block;">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-light border-0 input"
                                            placeholder="Hora" data-target="#time1" data-toggle="" style="height: 55px;"
                                            readonly>
                                    </div>
                                </div>

                                <!--Inicio Modal--->
                                <!--Fin Modal--->
                                <!--  Fin Filtro-->
                                <div class="col-12 col-sm-6">
                                    <input type="number" name="txtDNI" id="txtDNI"
                                        class="form-control bg-light border-0" placeholder="DNI" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" name="txtnombrecompleto" id="txtnombrecompleto"
                                        class="form-control bg-light border-0" placeholder="Nombre completos"
                                        style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="number" name="txttelefono" id="txttelefono"
                                        class="form-control bg-light border-0" placeholder="Telefono"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="txtemail" id="txtemail"
                                        class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="fechanacimiento" id="fechanacimiento" data-target-input="nearest">
                                        <input type="text" name="fechanacimientoinput" id="fechanacimientoinput"
                                            class="form-control bg-light border-0 -input"
                                            placeholder="Fecha de nacimiento" data-target="#fechanacimiento"
                                            data-toggle="" style="height: 55px;">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select name="cbosexo" id="cbosexo" class="form-select bg-light border-0"
                                        style="height: 55px;">
                                        <option value="" selected>Sexo</option>
                                        <option value="F">F</option>
                                        <option value="M">M</option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" id="txtguardarcita" type="submit">Make
                                        Appointment</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Favicon -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog " style="max-width: 50%;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Calendario en Modal</h5>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
                <div class="modal-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>


    <script>
    $(document).ready(function() {
        var segundaPaginaAbierta = false;

        $('#primeravista').submit(function(e) {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right',
                timeOut: 3000
            };

            e.preventDefault();

            // Validar campo Especialidad
            var cboespecialidadValue = $('#cboespecialidad').val();
            if (cboespecialidadValue === '') {
                toastr.error('selecciona una Especialidad válida.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo está vacío
            } else if (cboespecialidadValue === 'Especialidad') {
                toastr.error('selecciona una Especialidad válida.', {
                    "toastClass": "toast-error"
                });

                return; // Detener el proceso si el campo tiene el valor "Especialidad"
            }

            // Validar campo Fecha

            // Validar campo Hora


            // Validar campo DNI
            var txtDNIValue = $('#txtDNI').val();
            if (txtDNIValue === '') {
                toastr.error('Coloque el DNI.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo no está completo
            }

            // Validar campo Nombre completo
            var txtnombrecompletoValue = $('#txtnombrecompleto').val();
            if (txtnombrecompletoValue === '') {
                toastr.error('Coloque el nombre.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo no está completo
            }

            // Validar campo Teléfono
            var txttelefonoValue = $('#txttelefono').val();
            if (txttelefonoValue === '') {
                toastr.error('Coloque el telefono.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo no está completo
            }

            // Validar campo Email
            var txtemailValue = $('#txtemail').val();
            if (txtemailValue === '') {
                toastr.error('Coloque el email.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo no está completo
            }

            // Validar campo Fecha de nacimiento
            var fechanacimientoinputValue = $('#fechanacimientoinput').val();
            if (fechanacimientoinputValue === '') {
                toastr.error('Coloque el nacimiento.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo no está completo
            }

            // Validar campo Sexo
            var cbosexoValue = $('#cbosexo').val();
            if (cbosexoValue === '') {
                toastr.error('Coloque el sexo.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo no está completo
            } else if (cbosexoValue === 'Sexo') {
                toastr.error('Coloque el sexo.', {
                    "toastClass": "toast-error"
                });
                return; // Detener el proceso si el campo tiene el valor "Especialidad"
            }

            if (segundaPaginaAbierta) {
                toastr.error('reservando cita', {
                    "toastClass": "toast-error"
                });
                this.submit();
            } else {
                $(this).find('#txtguardarcita').prop('disabled', true);
                window.open("<?= base_url() ?>pagocliente", "_blank");
                segundaPaginaAbierta = true;
            }
        });
    });
    </script>


    <script type="text/javascript">


    </script>




    <script>
    $('#cboespecialidad').val();

    function recargarLista() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>/combo",
            data: "continente=" + $('#cboespecialidad').val(),
            success: function(r) {
                $('#select2lista').html(r);
                $('#select2lista1').html(r);
            }
        });
    }

    function recargardatoscalendario() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>/datoscalendario",
            data: "continente=" + $('#cboespecialidad').val(),
            success: function(r) {
                // Llenar el calendario con los datos recibidos
                $('#calendar').fullCalendar('removeEvents');
                $('#calendar').fullCalendar('addEventSource', JSON.parse(r));
                $('#calendar').fullCalendar('rerenderEvents');
            }
        });
    }

    function recargardatoscliente() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>/datospaciente",
            data: "continente=" + $('#txtDNI').val(),
            dataType: 'json',
            success: function(data) {
                // Limpiar los campos de texto antes de asignar nuevos datos
                $('#txtnombrecompleto').val('');
                $('#txttelefono').val('');
                $('#txtemail').val('');
                $('#fechanacimiento').find('input').val('');

                if (data) {
                    // Desactivar los campos de texto
                    $('#txtnombrecompleto').prop('disabled', true);
                    $('#txttelefono').prop('disabled', true);
                    $('#txtemail').prop('disabled', true);
                    $('#fechanacimiento').find('input').prop('disabled', true);
                    $('#cbosexo').prop('disabled', true);

                    // Asignar los datos a los campos correspondientes
                    $('#txtnombrecompleto').val(data.nombre);
                    $('#txttelefono').val(data.telefono);
                    $('#txtemail').val(data.correo);
                    $('#fechanacimiento').find('input').val(data.fechaNacimiento);
                    $('#cbosexo').val(data.sexo);
                } else {
                    // Mantener los campos de texto activos
                    $('#txtnombrecompleto').prop('disabled', false);
                    $('#txttelefono').prop('disabled', false);
                    $('#txtemail').prop('disabled', false);
                    $('#fechanacimiento').find('input').prop('disabled', false);
                    $('#cbosexo').prop('disabled', false);

                    // Restablecer el valor predeterminado para el campo de selección de sexo
                    $('#cbosexo').val(''); // Vaciar el valor actual, si lo hay
                    $('#cbosexo option[value=""]').prop('selected', true); // Seleccionar la opción "Sexo"
                }
            }
        });
    }





    $(document).ready(function() {







        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek'
            },
            defaultView: 'month',
            selectable: true,
            editable: false,
            viewRender: function(view, element) {
                adjustModalHeight();
            },
            select: function(start, end) {
                console.log("Evento seleccionado desde " + start.format() + " hasta " + end
                    .format());
                $('#calendar').fullCalendar('unselect');
            },
            eventClick: function(calEvent, jsEvent, view) {
                var selectedDate = moment(calEvent.start).format('YYYY-MM-DD');
                var selectedTime = moment(calEvent.start).format('HH:mm');
                var selectedEventTitle = calEvent.title;
                var selectedIdHorario = calEvent.idhorario ||
                    ''; // Establecer como cadena vacía si no hay valor
                var selectedIdPersonal = calEvent.idpersonal ||
                    ''; // Establecer como cadena vacía si no hay valor
                var selectedIdEspecialidad = calEvent.idespecialidad ||
                    ''; // Establecer como cadena vacía si no hay valor

                $('#date1 input').val(selectedDate);
                $('#time1 input').val(selectedTime);
                $('#doctorField').val(selectedEventTitle);
                $('#idHorario').val(selectedIdHorario);
                $('#idPersonal').val(selectedIdPersonal);
                $('#idEspecialidad').val(selectedIdEspecialidad);



                $('#myModal').modal('hide');
            },
            // Otras opciones y configuraciones
            // ...
        });

        $('.datecalendario-input').click(function() {
            $('#myModal').modal('show');
        });
        $('#myModal').on('hidden.bs.modal', function(e) {
            $('#calendar').fullCalendar('unselect');
        });
        $(window).resize(function() {
            adjustModalHeight();
        });

        function adjustModalHeight() {
            var calendarHeight = $('#calendar').fullCalendar('option', 'contentHeight');
            $('.modal-body').height(calendarHeight);
        }

        recargarLista();
        recargardatoscalendario();
        // Llamar a las funciones recargarLista() y recargardatoscalendario() cuando cambie el valor de #cboespecialidad
        $('#cboespecialidad').change(function() {
            recargarLista();
            recargardatoscalendario();
        });


        $('#txtDNI').keyup(function() {
            recargardatoscliente();
        });
    });
    </script>




</body>

</html>