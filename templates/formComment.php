<form action="insertarComentario" method="POST" class="container mt-4">
    <div class="mb-3">
        <label for="comentario" class="form-label">Ingrese un comentario</label>
        <textarea class="form-control" id="comentario" name="comentario" rows="4" placeholder="Escriba su comentario aquí..." required></textarea>
    </div>
    
    <div class="mb-3">
        <label for="puntuacion" class="form-label">Puntuación (1 a 10)</label>
        <input type="number" class="form-control" id="puntuacion" name="puntuacion" min="1" max="10" placeholder="1" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar comentario</button>
</form>
