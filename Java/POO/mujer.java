package POO;

public class mujer extends Persona {
    /*
     * esta es la clase hija que hereda las
     * caracteristicas de la clase padre Persona
     * y tiene su propio metodo maquillase
     */
    public void maquillarce() {
        System.out.println(getNombre() + " " + getApellido() + " se esta maquillando desde la clase mujer");
    }
}
