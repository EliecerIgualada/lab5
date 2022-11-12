<div class="container-sm">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
            <form action="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("mostrar")?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtNombre_contacto" value="<?php echo isset($nombre)?$nombre:""?>">
                    <div id="textHelp" class="form-text"><?php echo isset($error[0])?$error[0]:""?></div>

                    <label for="exampleInputText1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtCorreo_contacto" value="<?php echo isset($correo)?$correo:""?>">
                    <div id="textHelp" class="form-text"><?php echo isset($error[1])?$error[1]:""?></div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtComentario_contacto"></textarea>
                        <div id="textHelp" class="form-text"></div>
                    </div>
                    
                    <input type="hidden" value="<?php echo seg::getToken()?>" name="token">

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Borrar Datos</button>
                </div>
            </form>
        </div>
    </div>
</div>

