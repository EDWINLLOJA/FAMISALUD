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
                        <form>
                            <!--  Comienzo filtro inicial-->
                            <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                   
                                    <label for="ID_CATEGORIA">CATEGORIA</label>


                                    <select id="cboespecialidad" class="form-select bg-light border-0"
                                        style="height: 55px;">

                                        <option selected>Especialidad</option>
                                        <?php foreach ($especialidad as $especialidades) : ?>
                                        <option required value="<?= $especialidades['idespecialidad']; ?>">
                                            <td><?= $especialidades['Especialidad']; ?></td>
                                        </option>
                                        <?php endforeach; ?>

                                    </select>
                                    <br>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="exampleFormControlSelect1">SUBCATEGORIA</label>
                                <div id="select2lista"></div>

                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlSelect1">prueba2</label>
                                <div id="select2lista1"></div>

                            </div>

                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-light border-0 datecalendario-input"
                                            placeholder="Fecha" data-target="#date1" data-toggle="datecalendario"
                                            style="height: 55px;">
                                    </div>
                                </div>

                                <!--  FIn comienzo filtro-->

                                <!--  Inicio Filtro-->



                                <div class="col-6 col-sm-6" style="display:block;">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Doctor"
                                        style="height: 55px;" id="doctorField" disabled>
                                </div>

                                <div class="col-6 col-sm-6" style="display:block;">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-light border-0 datecalendario-input"
                                            placeholder="Hora" data-target="#time1" data-toggle="datecalendario"
                                            style="height: 55px;" disabled>
                                    </div>
                                </div>

                                <!--Inicio Modal--->
                                <!--Fin Modal--->
                                <!--  Fin Filtro-->

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Nombre completos" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control bg-light border-0" placeholder="DNI"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control bg-light border-0" placeholder="Telefono"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="fechanacimiento" id="fechanacimiento" data-target-input="nearest">
                                        <input type="text" class="form-control bg-light border-0 -input"
                                            placeholder="Fecha de nacimiento" data-target="#fechanacimiento"
                                            data-toggle="" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Sexo</option>
                                        <option value="F">F</option>
                                        <option value="M">M</option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
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

    <script type="text/javascript">
				$(document).ready(function() {
					$('#cboespecialidad').val();
					recargarLista();

					$('#cboespecialidad').change(function() {
						recargarLista();
					});
				})
			</script>
			<script type="text/javascript">
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
			</script>
</body>

</html>