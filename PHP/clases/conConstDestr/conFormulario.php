<?php //definir
class Elemento
{
    private $nombre;
    private $valor;
    private $etiqueta;
    //constructor 
    public function _construct()
    {
    }
    //metodo para crear nombre 
    public function crearNombre($nom)
    {
        $this->nombre = $nom;
    }
    //metodo extrae nombre 
    public function extraeNombre()
    {
        return $this->nombre;
    }
    //metodo crea elemento valor 
    public function creaValor($va)
    {
        $this->valor = $va;
    }
    //metodo extrae valor 
    public function extraeValor()
    {
        return $this->valor;
    }
    //metodo crea elemento etiqueta 
    public function creaEtiqueta($eti)
    {
        $this->etiqueta = $eti;
    }
    //metodo extrae elemento etiqueta 
    public function extraeEtiqueta()
    {
        return $this->etiqueta;
    }
}
?>
<?php
//fin de definicion de clase Elemento
class Opciones extends Elemento
{
    //constructor 
    public function _construct($va = '', $eti = '')
    {
        parent::_construct();
        $this->creaValor($va);
        $this->creaEtiqueta($eti);
    }
    //metodo datos de salida HTML para <option> 
    public function render()
    {
        echo "<option value=\"" . $this->extraeValor() . "\">" .
            $this->extraeEtiqueta() . " </option> <br>";
    }
}
?>
//fin de definicion de clase Opciones
<?php
//definir clase hija Seleccion 
class Seleccion extends Elemento
{
    protected $opcion;
    //constructor 
    public function _construct()
    {
        parent::_construct();
        $this->opcion = array();
    }
    //metodo añadir opcion a la lista 
    public function creaOpcion($opcion)
    {
        $this->opcion[] = $opcion;
    }
    //metodo extrae Opciones
    private function extraeOpciones()
    {
        return (array) $this->opcion;
    }
    //metodo enviar codigo HTML 
    public function render()
    {
        echo $this->extraeEtiqueta() .
            ":<br> >";
        echo "<select name=\"" . $this->extraeNombre() .
            "\"> <br>";
        foreach ($this->extraeOpciones() as $opt) {
            echo $opt->render();
        }
        echo "</select>";
    }
}
?>
//Fin definicion de class_exists
<!DOCTYPE html>
<html>

<head>
    <title> Genera listas de seleccion </title>
</head>

<body>
    <h2>
        Genera listas selccion en formulario </h2>
    <?php
    //si formulario no se ha enviado lo muestra 
    if (!isset($_POST['btnEnvia'])) {
    ?>
        <form method="post" action="conFormulario.php">
            <?php
            //genera lista 1 
            $frutas = new Seleccion();
            $frutas->creaEtiqueta('Frutas');
            $frutas->crearNombre('frut_sel');
            $frutas->creaOpcion(new Opciones('Naranjas', 'Naranjas'));
            $frutas->creaOpcion(new Opciones('Fresas', 'Fresas'));
            $frutas->creaOpcion(new Opciones('Piñas', 'Piñas'));
            $frutas->creaOpcion(new Opciones('Platanos', 'Platanos'));
            $frutas->render(); ?>
            <p>
                <?php
                //genera lista 2 
                $metales = new Seleccion();
                $metales->creaEtiqueta('Metales');
                $metales->crearNombre('metal_sel');
                $metales->creaOpcion(new Opciones('Oro', 'Oro'));
                $metales->creaOpcion(new Opciones('Plata', 'Plata'));
                $metales->creaOpcion(new Opciones('Platino', 'Platino'));
                $metales->creaOpcion(new Opciones('Acero', 'Acero'));
                $metales->render(); ?>
            <p>
                <?php
                //genera lista 3 
                $animales = new Seleccion();
                $animales->creaEtiqueta('Animales');
                $animales->crearNombre('animal_sel');
                $animales->creaOpcion(new Opciones('Oso', 'Oso'));
                $animales->creaOpcion(new Opciones('Pantera', 'Pantera'));
                $animales->creaOpcion(new Opciones('Leon', 'Leon'));
                $animales->creaOpcion(new Opciones('Caballo', 'Caballo'));
                $animales->render(); ?>
            <p> <input type="submit" name="btnEnvia" value="Enviar" />
        </form>
    <?php
        //si formulario s envio procesa datos 
    } else {
        var_dump($_POST);
        
        
    }
    ?>
</body>

</html>