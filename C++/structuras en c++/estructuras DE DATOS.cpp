#include <iostream>
#include <conio.h>
#include <stdio.h>

using namespace std;
/* run this program using the console pauser or add your own getch, system("pause") or input loop */
/*int numDtos();
int numDtos()
{
	int n;
	cout <<"Numero de datos que quiere almacenar: ";
	cin>>n;
	return n;
}*/

const int MAX = 3 ;
//Estrucras de datos
typedef struct {
	string nombre;
	int edad;
}tEstudiante;

typedef tEstudiante tArray[MAX];  

typedef struct {
	tArray elementos; 
	int contador;
}tLista;

	//Declaración de todas las funciones
int menu();
void insertarEstudiante(tLista &lista);
void buscarEstudiante(tLista &lista,int pos, bool &ok);
void eliminarEstudiante(tLista &lista,int pos, bool &ok);
void ListarEstudiante(tLista &lista);



//Desarrollar las funciones
int menu()
{
	int op;
	
	do{
		cout <<"   MENU PRINCIPAL ESTUDIANTES \n"<<endl;
		cout << "Agregar un nuevo estudiante	1" << endl;
		cout << "Eliminar un estudiante		2" << endl;
		cout << "Buscar un estudiante		3" << endl;
		cout << "Listar los estudiantes		4" << endl;
		cout << "SALIR				0";
		cout << "\n\nIngresa una opcion balida -> " ;
		cin>>op;
	}while((op < 0) || (op >4));
	
	return op;
}

//Funcion Insetar Estudiante
void insertarEstudiante(tLista &lista)
{
	if(lista.contador == MAX)
	{
		cout << "LA MATRIZ ESTA LLENA ...Pres Key" << endl;
		getch();
	}
	else
	{
		cout << "\n	Estudiante -> " << lista.contador << endl;
		cout << "\nIngrese nombre: ";
		cin >> lista.elementos[lista.contador].nombre;
		cout << "Ingrese edad:     ";
		cin >> lista.elementos[lista.contador].edad;
		lista.contador++;		
	}
}

	//funcion eliminar estudiante	
void eliminarEstudiante(tLista &lista,int pos, bool &ok)
{
	if ((pos < 0)||(pos > lista.contador-1))
	{
		ok=false;
	}
	else 
	{
		ok=true;
		for (int i=pos;i<lista.contador-1;i++)
		{
			lista.elementos[i] = lista.elementos[i+1];
		}
		cout <<"Estudiante eliminado ...PRESS KEY";
		getch();			//realiza una pausa, hasta presionar una tecla
		lista.contador--;
	}
}
	//funcion buscar estudiante
void buscarEstudiante(tLista &lista,int pos, bool &ok)
{
	if ((pos < 0)||(pos > lista.contador-1))
	{
		ok=false;
	}
	else 
	{
		cout <<"	Estudiante "<<pos;
		cout<<"\nNombre: " << lista.elementos[pos].nombre;
		cout<<"\nEdad:   " << lista.elementos[pos].edad;
		cout<<"\nPRESS KEY..."<<endl;
		getch();
		ok=true;	
	}
}

	//funcion lista de todos los estudiantes
void ListarEstudiante(tLista &lista)
{
	cout<<"______________________________\n";
	for(int i=0; i < lista.contador; i++)
	{
		cout << "\n Estudiante -> " << i;
		cout<<"\nNombre: " << lista.elementos[i].nombre;
		cout<<"\nEdad:   " << lista.elementos[i].edad;
		cout<<"\n";
	}
	cout<<"______________________________\nPRESS KEY...";
	getch();
}

int main(int argc, char** argv) 
{
	bool exito;
	int op=0,pos=0;
	
	tLista lista;  //declarar las listas, importante
	lista.contador = 0;
	
	//numDtos();
	do
	{
		system("cls"); //limpiar datos al apretar cualquier tecla
		op=menu();
		switch(op)
		{
			case 1: // Agregar estudiante
			    {
			    	insertarEstudiante(lista);
				}
				break;
			case 2: //Eliminar estudiante
				{
					cout <<"\ningrese la posicion del estudiante a eliminar:  ";
					cin >> pos;
					eliminarEstudiante(lista, pos, exito);
					if (!exito)
					{
						cout <<"elemento inexistente! ...PRESS KEY"<<endl;
						getch();
					}
				}
				break;
			case 3://Buscar estudiante
				{
					cout <<"\ningresee la posicion del estudiante a buscar: ";
					cin>>pos ;
					buscarEstudiante(lista, pos, exito);
					if (!exito)
					{
						cout <<"estudiante no encontrado ...PRESS KEY"<<endl;
						getch();	
					}
				}
				break;
			case 4://Listar los estudiantes
				ListarEstudiante(lista);
				break;
		}
	}while(op!=0);
		
	return 0;
}

