package POO;

//HERENCIA
public class hombre extends Persona {
    /*
     * esta es la clase hija que hereda las
     * caracteristicas de la clase padre Persona
     * y tiene su propio metodo que es afeitase
     */

    public void afeitarce() {
        System.out.println(getNombre() + " " + getApellido() + " esta afeitandose desde la clase hombre");
    }
}