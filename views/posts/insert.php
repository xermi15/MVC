<div>
    <h2>Nou Post</h2>
    <form action="<?php echo constant('URL'); ?>posts/newPost" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <b>Titol:</b>
                </td>
                <td>
                    <input type="text" name="title" placeholder="Introdueix el títol">
                </td>
            </tr>
            <tr>
                <td>
                    <b>Autor:</b>
                </td>
                <td>
                    <input type="text" name="author" placeholder="Introdueix l'autor">
                </td>
            </tr>
            <tr>
                <td>
                    <b>Contingut:</b>
                </td>
                <td>
                    <input type="text" name="content" placeholder="Introdueix el contingut del post">
                </td>
            </tr>
            <tr>
                <td>
                    <b>Imatge:</b>
                </td>
                <td>
                    <input type="file" name="image" />
                </td>
            </tr>
        </table>

        <input type="submit" value="Insert">
    </form>
</div>
