<div class="container">
    <h1>Nou Post</h1>
    <form action="<?php echo constant('URL'); ?>posts/newPost" method="post" enctype="multipart/form-data" id="insertForm">

        <div class="form-group">
            <label for="exampleInput">Titol:</label>
            <input type="text" class="form-control" name="title" placeholder="Introdueix el títol">
        </div>

        <div class="form-group">
            <label for="exampleInput">Autor:</label>
            <input type="text" class="form-control" name="author" placeholder="Introdueix l'autor">
        </div>

        <div class="form-group">
            <label for="exampleInput">Contingut:</label>
            <textarea name="content" class="form-control" form="insertForm" rows="10" placeholder="Introdueix el contingut del post"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Imatge:</label>
            <input type="file" name="image" class="form-control-file">


        </div>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>
    <hr>
</div>
