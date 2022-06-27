SubAlgoritmo menu()
	Escribir "1.- Archivo";
	Escribir "2.- Editar";
	Escribir "3.- Configurar";
	Escribir "4.- Ejecutar";
	Escribir "5.- Ayuda";
	Escribir "6.- Salir ";
FinSubAlgoritmo

SubAlgoritmo eleccion()
	Escribir "_______________________________________________";
	Escribir "Seleccione una opcion :";
	Leer op;
	Segun op Hacer
		1: Escribir " - ABRIR NUEVO ARCHIVO";
			Escribir " - ABRIR UN ARCHIVO YA CREADO";
			Escribir " - GUARDAR UN ARCHIVO";
			Escribir " - GUARDAR UN NUEVO ARCHIVO";
			esperar Tecla;
		2:
			Escribir " - DESHASER UN ARCHIVO";
			Escribir " - REHACER UN ARCHIVO";
			Escribir " - CORTAR UN ARCHIVO";
			Escribir " - COPIAR UN ARCHIVO";
			Escribir " - PEGAR UN ARCHIVO";
			
		3: Escribir " - ASISTENCIAS";
			Escribir " - PRESENTACION";
			
		4: Escribir " - EJECUTAR";
			Escribir " - EJECUTAR PASO A PASO";
			Escribir " - EJECUCION EXPLICADA";
			
		5: Escribir " - INDICE";
			Escribir " - AYUDA RAPIDA";
			Escribir " - EJEMPLOS"; 
			esperar Tecla;
			De otro modo
			Escribir "Cerrar Programa"
	Finsegun
FinSubAlgoritmo

Algoritmo Ejercicio5
	Escribir "_______________________________________________";
	Escribir "Has iniciado sesion en Pseint";
	Escribir "_______________________________________________";
	Escribir " ";
	menu
	eleccion
FinAlgoritmo
