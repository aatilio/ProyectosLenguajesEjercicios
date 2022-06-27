package POO;

public class Procesos {
    /**
     * la calse procesos sirve para llamar a
     * los distintos metodos de las diferentes clases
     * como la de persona y sus clases hijas donde hereda su nombre
     */
    public void iniciar() {
        Persona adulto = new Persona();
        adulto.setNombre("Fredy");
        adulto.setApellido("Chavez");
        adulto.comer(adulto.getNombre());
        adulto.dormir();

        System.out.println();

        hombre padre = new hombre();
        padre.setNombre("Nicolas");
        padre.setApellido("Fernandez");
        padre.comer(padre.getNombre());
        padre.dormir();
        padre.afeitarce();

        System.out.println();

        mujer madre = new mujer();
        madre.setNombre("Gloria");
        madre.setApellido("Zapana");
        madre.comer(madre.getNombre());
        madre.dormir();
        madre.maquillarce();
    }

}
