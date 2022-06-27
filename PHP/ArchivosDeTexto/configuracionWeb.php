<!DOCTYPE html>
<html>

<head>
    <title> Proyecto configuracion </title>
</head>

<body>
    <h2> Proyecto configura </h2>
    <?php
    //definir archivo de configuracion 
    $configArchivo = "config1.ini";
    //si formulario no se envio, nviarlo 
    if (!isset($_POST['btnEnvia'])) {
        //cargando parametros default en matriz 
        $datos = array();
        $datos['AdminEmail'] = null;
        $datos['DefAutor'] = null;
        $datos['NumMensajes'] = null;
        $datos['NotificarURL'] = null;
        $datos['NumComentarios'] = null;
        //leeer datos actuales de configuracion 
        if (file_exists($configArchivo)) {
            $lineas = file($configArchivo);
            foreach ($lineas as $li) {
                $matriz = explode('=', $li);
                $i = count($matriz) - 1;
                $datos[$matriz[0]] = $matriz[$i];
            }
        }
    ?>
    <form method="post" action="configuracionWeb.php">
        Direccion de correo de Admin: <br>
        <input type="email" size="50" name="data[AdminEmail]" placeholder="Ej.: usuario@servidor.com" value="<?php echo $datos['AdminEmail']; ?>" />
        <p>
            Nombre Autor: <br>
            <input type="text" name="data[DefAutor]" value="<?php echo $datos['DefAutor']; ?>" />
        <p>
            Numero de mensajes a mostrar: <br>
            <input type="number" size="4" name="data[NumMensajes]" value="<?php echo $datos['NumMensajes']; ?>" />
        <p>
            Numero de comentarios anonimos: <br>
            <input type="number" size="4" name="data[NumComentarios]" value="<?php echo $datos['NumComentarios']; ?>" />
        <p>
            URL notificar nuevos mensajes: <br>
            <input type="url" size="50" name="data[NotificarURL]" value="<?php echo $datos['NotificarURL']; ?>" />
        <p>
            <input type="submit" name="btnEnvia" value="Enviar" />
    </form>
    <?php
        //si formulario se envio procesa datos 
    } else {
        //llee datos enviados 
        $config = $_POST['data'];
        //valida datos enviados 
        if ((trim($config['NumMensajes']) != '' && (int) $config['NumMensajes'] <= 0)
            || (trim($config['NumComentarios']) != '' && (int) $config['NumComentarios'] <= 0)) 
        {
            die("ERROR: Digite numero valido");
        }
        //abre y bloquea archivo de configuracion 
        $fp = fopen($configArchivo, "w+") or die("ERROR: no se puede abrir archivo");
        flock($fp, LOCK_EX) or die("ERROR: no se puede bloquear archivo");
        //grabar valores de configuracion en archivo 
        foreach ($config as $clave => $valor) {
            if (trim($valor) != '') {
                fwrite($fp, "$clave = $valor <br>") or die("ERROR: no se puede grabar");
            }
        }
        flock($fp, LOCK_UN) or die("ERROR: no se puede desbloquear");
        fclose($fp);
        echo "<br> Los datos de configuracion fueron grabados...";
    }
    ?>
</body>

</html>