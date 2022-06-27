#include <iostream>
using namespace std;

const int MAX = 3;
//estruccturas de datos 
	typedef struct 
	{
		string nombre;
		int edad;
	}tEstudiante;
	
	typedef tEstudiante tArray[MAX];
	typedef struct 
	{
		tArray elementos;		//tArray[0] tArray[1]...
		int contador;
	}tLista;
	//declaracion de funciones
	int menu();
	void insertarEASTUDIANTE(tLista lista);
	
	//desarrollar las funciones
	int menu()
	{
		int op;
		
		do
		{
			cout << "\n1 - agregar un nuevo estudiante \n";
			cout << "2 - eliminar un estudiante \n";
			cout << "3 - buscar un estudiante \n";
			cout << "4 - listar los estudiantes \n";
			cout << "0 - salir \n";
			cin>> op;
		}while ((op < 0)or(op > 4));
		return op;
	}
	
	//funcion insertar estudiante
	void insertarEstudiante(tLista lista)
	{
		if (lista.contador == MAX)
		{
			cout << "la matriz esta llena"<<endl;
		}
		else
		{
			cout <<"\nestudiante: "<< lista.contador<<endl;
			cout <<"ingrese nombre. ";
			cin >> lista.elementos[lista.contador].nombre;
			cout <<"ingrese edad: ";
			cin >> lista.elementos[lista.contador].edad;
			lista.contador++;
		}
	}
	
int main()

{
	tLista lista;
	int op,pos;
	lista.contador=0;
	do 
	{
		op=menu();
		switch(op)
		{
			case 1:
				{
					cout<<"\nincertamos un nuevo estudiante";
					insertarEstudiante(lista);
					lista.contador++;
				}
				break;
			case 2:
				cout<<"\neliminamos un estudiante de la lista";
				break;
			case 3:
				cout<<"\nbuscar un estudiante";
				break;
			case 4:
				cout<<"\nlistar los estudiantes";
				break;
		}
	}while (op !=0);
	

return 0;
}

