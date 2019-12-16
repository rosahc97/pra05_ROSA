<html>
    <head></head>
    <title></title>
    <body>
        <?php 
        if (isset($_POST['Acceder']) && (($_POST['usuario']) == "profesor")){
            header('Location: index3.php');
        }
        elseif (isset($_POST['Acceder']) && (($_POST['usuario']) == "administrador")){
            header('Location: registroaulas.php');
        }
        else{ ?>
                 <form action="alumnos.php" method="post">
            <table>
                <tr>
                    <td>
                        <p>Usuario:</p>
                    </td>
                    <td>
                        <input type="text" name="usuario" />
                    </td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="password" name="clave" /> </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Acceder" name="Acceder" />
                    </td>
                    <td>
                        <button onclick="location.href='./paginainicial.html'">Atrás</button>
                    </td>
                </tr>
            </table>
        </form>    
        
       <?php } ?>
        
    </body>
</html>