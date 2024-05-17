
<?php
    $supplier = $data['supplier'];
?>
    <div class="border border-secondary-300 p-4 ">
        <h2 class='text-info'>Actualizar Supplier</h2>


        <form action="index.php?url=supplier/save/<?php echo $supplier['id']; ?>" method="post" class='form'>
            <div class="form-group mb-3">
                <input type="hidden" name="id" value="<?php echo $supplier['id']; ?>" required>
                <input type="hidden" name="accion" value="update">

                <label>Nombre</label>
                <input type="text" name="nombre" class='form-control' value="<?php echo $supplier['nombre']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label>Productos</label>
                <input type="text" name="productos" class='form-control' value="<?php echo $supplier['productos']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label>Clave</label>
                <input type="password" name="clave" class='form-control'  placeholder="Nueva Contraseña" 
                    value="<?php echo $supplier['clave']; ?>" required>            
            </div>
            <div class="form-group mb-3">
                <label>Cantidad</label>
                <input type="number" name="cantidad" class='form-control' placeholder="Cantidad"
                    value="<?php echo $supplier['cantidad']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label>Precio</label>
                <input type="number" name="precio" class='form-control' placeholder="Precio"
                    value="<?php echo $supplier['precio']; ?>" required>
            </div>
            <div class="form-group">
                <button class='btn btn-secondary'>Cancelar</button>
                <button class='btn btn-primary' type="submit">Guardar</button>            
            </div>
        </form>
    </div>
