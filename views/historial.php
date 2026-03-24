<?php include 'includes/header.php'; ?>
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center bg-white p-3 shadow-sm rounded">
            <h2 class="h4 mb-0 text-primary"><i class="fas fa-notes-medical me-2"></i>Historial Clínico</h2>
            <a href="index.php?c=Dashboard&a=index" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-chevron-left"></i> Volver al Panel
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="card-title mb-0">Datos de la Paciente</h5>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=Maria+Perez&background=0d6efd&color=fff&size=100" class="rounded-circle shadow-sm" alt="Foto Paciente">
                    </div>
                    <h4 class="h5 mb-1">María Pérez</h4>
                    <span class="badge bg-light text-primary border mb-3">ID: 31.502.669</span>
                    
                    <div class="text-start mt-2">
                        <p class="small mb-1 text-muted">Edad: <span class="text-dark fw-bold">28 años</span></p>
                        <p class="small mb-1 text-muted">Tipo de Sangre: <span class="text-danger fw-bold">O+</span></p>
                        <p class="small mb-0 text-muted">Última Visita: <span class="text-dark fw-bold">12/03/2026</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 text-primary fw-bold">Nueva Evolución Médica</h5>
                </div>
                <div class="card-body p-4">
                    <form action="index.php?c=Historial&a=guardar" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Motivo de Consulta / Síntomas</label>
                            <input type="text" class="form-control" name="motivo" placeholder="Ej: Control prenatal" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Diagnóstico y Observaciones Detalladas</label>
                            <textarea class="form-control" name="diagnostico" rows="12" style="resize: none;" placeholder="Describa aquí la evolución, resultados de exámenes físicos y observaciones..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Tratamiento e Indicaciones</label>
                            <textarea class="form-control" name="tratamiento" rows="3" placeholder="Recetas y próximos pasos..."></textarea>
                        </div>

                        <div class="d-flex justify-content-end gap-2 pt-3">
                            <button type="reset" class="btn btn-light px-4 border">Limpiar</button>
                            <button type="submit" class="btn btn-primary px-5">
                                <i class="fas fa-save me-2"></i>Guardar Registro
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>