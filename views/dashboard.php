<?php include 'includes/header.php'; ?>

<section class="d-flex justify-content-between align-items-center mb-4 mt-3">
    <h2>Panel de Control</h2>
<!--Cambiar cuando se conecte la base de datos-->
    <span class="text-muted">Viernes, 20 de Marzo de 2026</span>
</section>

<section class="row mb-4">
    <section class="col-md-4 mb-3">
        <section class="card text-white bg-primary shadow-sm h-100 border-0">
            <section class="card-body">
                <h6 class="card-title text-uppercase text-white-50 fw-bold">Total Pacientes</h6>
                <!--Cambiar cuando se conecte la base de datos-->
                <h2 class="display-4 fw-bold mb-0">142</h2>
                <small>Registradas en el sistema</small>
            </section>
        </section>
    </section>
    
    <section class="col-md-4 mb-3">
        <section class="card text-white bg-success shadow-sm h-100 border-0">
            <section class="card-body">
                <h6 class="card-title text-uppercase text-white-50 fw-bold">Citas para Hoy</h6>
                <!--Cambiar cuando se conecte la base de datos-->
                <h2 class="display-4 fw-bold mb-0">8</h2>
                <small>2 pendientes, 6 atendidas</small>
            </section>
        </section>
    </section>

    <section class="col-md-4 mb-3">
        <section class="card text-dark bg-warning shadow-sm h-100 border-0">
            <section class="card-body">
                <h6 class="card-title text-uppercase text-dark-50 fw-bold">Citas Canceladas</h6>
                <!--Cambiar cuando se conecte la base de datos-->
                <h2 class="display-4 fw-bold mb-0">3</h2>
                <small>En lo que va de mes</small>
            </section>
        </section>
    </section>
</section>

<section class="row">
    <section class="col-12">
        <section class="card shadow-sm border-0">
            <section class="card-header bg-white fw-bold py-3">
                🩺 Próximos pacientes en sala de espera
            </section>
            <section class="card-body p-0">
                <section class="table-responsive">
                    <table class="table table-hover table-borderless mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">Hora</th>
                                <th>Paciente</th>
                                <th>Motivo</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <!--Cambiar cuando se conecte la base de datos-->
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-bold text-primary">08:30 AM</td>
                                <td>María Pérez</td>
                                <td>Control prenatal</td>
                                <td><span class="badge bg-warning text-dark">En espera</span></td>
                            </tr>
                            <tr>
                                <td class="ps-4 fw-bold text-primary">09:15 AM</td>
                                <td>Ana Gómez</td>
                                <td>Revisión de rutina</td>
                                <td><span class="badge bg-secondary">Por llegar</span></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </section>
            <section class="card-footer bg-white text-end">
                <a href="citas.php" class="btn btn-sm btn-outline-primary">Ver agenda completa</a>
            </section>
        </section>
    </section>
</section>

<?php include 'includes/footer.php'; ?>