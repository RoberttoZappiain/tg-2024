<!-- resources/views/modals/myModal.blade.php -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="myModalLabel">CONTACTANOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="color: red;"></button>
            </div>
            <div class="modal-body text-white">
                <span>Acontinuacion, Puedes completar los espacios vacios con la información solicitada y a la brevedad
                    posible nos pondremos en contacto contigo.
                </span>
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="correo" placeholder="Correo electrónico" required>
                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="asunto" placeholder="Asunto" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="mensaje" rows="4" placeholder="Mensaje" required></textarea>
                    </div>
                   
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label fw-regular " for="flexCheckChecked">
                          Acepto suscribirme al boletín de noticias para recibir novedades y promociones.
                        </label>
                      </div>
                      <div class="d-grid gap-2 my-2">
                        <button type="submit" class="btn btn-contact text-white">Enviar</button>
                      </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
