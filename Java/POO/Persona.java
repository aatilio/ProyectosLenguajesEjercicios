package POO;

/* Esta el la calse padre */
public class Persona {
    //EMCAPSULAMIENTO / PROTEGEMOS LOS DATOS 
    private String nombre, apellido;

    // metodo domir donde ser puede aplicar el POLIMORFISMO
    public void comer(String nombre) {
        System.out.println(nombre + " " + apellido + " esta comiendo desde la clase persona");
    }

    // metodo domir donde ser puede aplicar el POLIMORFISMO
    public void dormir() {
        System.out.println(nombre + " " + apellido + " esta durmiendo desde la clase persona");
    }

    // cirve para captural los datos ingresados
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    // sirve para imprimir los datos guardados
    public String getNombre() {
        return nombre;
    }

    //asignamos los datos a la bariable con el mismo nombre  encapsulamiento
    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public String getApellido() {
        return apellido;
    }
}
