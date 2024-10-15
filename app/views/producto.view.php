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
    require_once 'templates/footer.php';
    }
}