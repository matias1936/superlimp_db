<?php
class ProductoView{
    function showBy($producto){
        require_once 'templates/header.php';
        ?>
        <div>
            Nombre: <?php echo $producto->nombre ?> 
        </div>
        <div>
            Precio: <?php echo $producto->precio ?> 
        </div>
        <div>
            Descripcion: <?php echo $producto->descripcion ?> 
        </div>

    <?php
        require_once 'templates/footer.php';
    }

    function show($productos){
        require_once 'templates/header.php';
        ?>
    <ul class="list-group">
        <?php foreach($productos as $producto){ ?>

            <li class="list-group-item item-task" >
                <div>
                    Nombre: <?php echo $producto->nombre ?> 
                </div>

                <div>
                    <a href="vermas/<?php echo $producto->id ?> " type="button" class='btn btn-danger ml-auto'>Ver más</a>
                </div>
            </li>   
        <?php } ?>
    </ul>
    <?php
    
    }
    function showComentarios($comentarios) {
        require_once 'templates/formComment.php';
        ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <ul class="list-group">
                    <?php foreach ($comentarios as $comentario) { ?>
                        <li class="list-group-item mb-3 shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-1">Anónimo</h5>
                                <span class="badge bg-primary rounded-pill">
                                    <?php echo $comentario->puntuacion; ?> ⭐
                                </span>
                            </div>
                            <p class="mb-1 text-muted">
                                <?php echo htmlspecialchars($comentario->comentario); ?>
                            </p>
                            <small class="text-muted">Publicado hace X días</small>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php
        require_once 'templates/footer.php';
    }
    
}