<?php include 'includes/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4 mt-3">
    <h2>Gestión de Citas</h2>
    <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modalNuevaCita">
        + Agendar Nueva Cita
    </button>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Paciente</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Motivo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <!--Cambiar cuando se conecte la base de datos-->
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>María Pérez</td>
                        <td>24/03/2026</td>
                        <td>08:30 AM</td>
                        <td>Control prenatal</td>
                        <td><span class="badge bg-warning text-dark">Pendiente</span></td>
                        <td>
                            <button class="btn btn-sm btn-success">Completar</button>
                            <button class="btn btn-sm btn-danger">Cancelar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ana Gómez</td>
                        <td>24/03/2026</td>
                        <td>09:15 AM</td>
                        <td>Revisión de rutina</td>
                        <td><span class="badge bg-success">Atendida</span></td>
                        <td>
                            <button class="btn btn-sm btn-secondary" disabled>Completar</button>
                            <button class="btn btn-sm btn-secondary" disabled>Cancelar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalNuevaCita" tabindex="-1" aria-labelledby="modalNuevaCitaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalNuevaCitaLabel">Agendar Nueva Cita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formCita">
                    <div class="mb-3">
                        <label class="form-label">Seleccionar Paciente</label>
                        <select class="form-select">
                            <!--Cambiar cuando se conecte la base de datos-->
                            <option value="">Buscar paciente...</option>
                            <option value="1">María Pérez (V-12345678)</option>
                            <option value="2">Ana Gómez (V-87654321)</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fechaCita">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Hora</label>
                            <input type="time" class="form-control" id="horaCita">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Motivo de la consulta</label>
                        <textarea class="form-control" rows="2" placeholder="Ej. Chequeo general, dolores..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="alert('ACA Va El JS')">Guardar Cita</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>