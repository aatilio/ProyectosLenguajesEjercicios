#include <iostream>
#include <conio.h>
#include <stdio.h>

using namespace std;
/*Realizar un Programa que permita gestionar (menú) las estructuras de datos de AUTOS con los campos
 (código, marca, color y año), CAMIONES con los campos (código, peso, largo y ancho) y AUTOBUS con 
 los campos (código, numero_asientos, origen y destino). La opciones de cada estructura deben ser Ingresar, 
 Eliminar, Buscar, Listar y Salir.*/
 
const int MAX = 2 ;
//Estrucras de datos
typedef struct {
	string marca;
	string color;
	int year;
	int codigo;
}COCHES;

typedef struct {
	int largo;
	int ancho;
	int peso;
	int codigo;
}CAMIONES;

typedef struct {
	string origen;
	string destino;
	int num_asientos;
	int codigo;
}AUTOBUS;


typedef COCHES CO[MAX];
typedef CAMIONES CA[MAX]; 
typedef AUTOBUS AU[MAX];   

typedef struct {
	CO elementos;  
	int contador;
}coche;
typedef struct {
	CA elementos;   
	int contador;
}camion;
typedef struct { 
	AU elementos;  
	int contador;
}bus;

	//Declaración de todas las funciones
int menu_principal();

int menu_coches();
void insertar_coches(coche &lista);
void buscar_coches(coche &lista,int pos, bool &ok);
void eliminar_coches(coche &lista,int pos, bool &ok);
void Listar_coches(coche &lista);

int menu_camiones();
void insertar_camiones(camion &lista1);
void buscar_camiones(camion &lista1,int pos, bool &ok);
void eliminar_camiones(camion &lista1,int pos, bool &ok);
void Listar_camiones(camion &lista1);

int menu_autobus();
void insertar_autobus(bus &lista2);
void buscar_autobus(bus &lista2,int pos, bool &ok);
void eliminar_autobus(bus &lista2,int pos, bool &ok);
void Listar_autobus(bus &lista2);
//menu principal
int menu_principal()
{
	int op;
	do{
		cout <<"   	MENU PRINCIPAL\n"<<endl;
		cout << "Gestionar, COCHES     1" << endl;
		cout << "Gestionar, CAMIONES   2" << endl;
		cout << "Gestionar, AUTOBUS    3" << endl;
		cout << "\n\nIngresa una opcion valida -> " ;
		cin>>op;
	}while((op < 0) || (op >3));
	return op;
}
//sub menu
int menu_coches()
{
	int op;
	do{
		cout <<"           COCHES \n"<<endl;
		cout << "Agregar un nuevo coche	1" << endl;
		cout << "Eliminar un coche			2" << endl;
		cout << "Buscar un coche			3" << endl;
		cout << "Listar los coche			4" << endl;
		cout << "SALIR				0";
		cout << "\n\nIngresa una opcion valida -> " ;
		cin>>op;
	}while((op < 0) || (op >4));
	return op;
}
int menu_camiones()
{
	int op;
	do{
		cout <<"           CAMIONES \n"<<endl;
		cout << "Agregar un nuevo camion	1" << endl;
		cout << "Eliminar un camion			2" << endl;
		cout << "Buscar un camion			3" << endl;
		cout << "Listar los camion			4" << endl;
		cout << "SALIR				0";
		cout << "\n\nIngresa una opcion valida -> " ;
		cin>>op;
	}while((op < 0) || (op >4));
	return op;
}
int menu_autobus()
{
	int op;
	do{
		cout <<"           AUTOBUS \n"<<endl;
		cout << "Agregar un nuevo autobus	1" << endl;
		cout << "Eliminar un autobus		2" << endl;
		cout << "Buscar un autobus			3" << endl;
		cout << "Listar los autobus			4" << endl;
		cout << "SALIR				0";
		cout << "\n\nIngresa una opcion valida -> " ;
		cin>>op;
	}while((op < 0) || (op >4));
	return op;
}
//funciones de cohes
void insertar_coches(coche &lista)
{
	if(lista.contador == MAX)
	{
		cout << "Los coches estan completos ...Pres Key" << endl;
		getch();
	}
	else
	{
		cout << "\n	coche -> " << lista.contador << endl;
		cout << "\nIngrese marca: ";
		cin >> lista.elementos[lista.contador].marca;
		cout << "\nIngrese color: ";
		cin >> lista.elementos[lista.contador].color;
		cout << "Ingrese año:     ";
		cin >> lista.elementos[lista.contador].year;
		cout << "Ingrese el codigo:     ";
		cin >> lista.elementos[lista.contador].codigo;
		lista.contador++;		
	}
}
void buscar_coches(coche &lista,int pos, bool &ok)
{
	if ((pos < 0)||(pos > lista.contador-1))
	{
		ok=false;
	}
	else 
	{
		cout <<"	COCHE  "<< pos;
		cout<<"\nMarca:   " << lista.elementos[pos].marca;
		cout<<"\nColor:   " << lista.elementos[pos].color;
		cout<<"\nAño:     " << lista.elementos[pos].year;
		cout<<"\nCodigo:  " << lista.elementos[pos].codigo;
		cout<<"\nPRESS KEY..."<<endl;
		getch();
		ok=true;	
	}
}
void eliminar_coches(coche &lista,int pos, bool &ok)
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
		cout <<"Coche eliminado ...PRESS KEY";
		getch();			//realiza una pausa, hasta presionar una tecla
		lista.contador--;
	}
}
void Listar_coches(coche &lista)
{
	cout<<"______________________________\n";
	for(int i=0; i < lista.contador; i++)
	{
		cout<<"\nMarca:   " << lista.elementos[i].marca;
		cout<<"\nColor:   " << lista.elementos[i].color;
		cout<<"\nAño:     " << lista.elementos[i].year;
		cout<<"\nCodigo:  " << lista.elementos[i].codigo;
		cout<<"\n";
	}
	cout<<"______________________________\nPRESS KEY...";
	getch();
}
//funciones de camiones
void insertar_camiones(camion &lista)
{
	if(lista.contador == MAX)
	{
		cout << "Los camiones estan completos ...Pres Key" << endl;
		getch();
	}
	else
	{
		cout << "\n	Camion -> " << lista.contador << endl;
		cout << "\nIngrese codigo:   ";
		cin >> lista.elementos[lista.contador].codigo;
		cout << "\nIngrese peso:     ";
		cin >> lista.elementos[lista.contador].peso;
		cout << "Ingrese largo:      ";
		cin >> lista.elementos[lista.contador].largo;
		cout << "Ingrese el ancho:   ";
		cin >> lista.elementos[lista.contador].ancho;
		lista.contador++;		
	}
}
void buscar_camiones(camion &lista,int pos, bool &ok)
{
	if ((pos < 0)||(pos > lista.contador-1))
	{
		ok=false;
	}
	else 
	{
		cout <<"	CAMION  "<< pos;
		cout<<"\nCodigo:   " << lista.elementos[pos].codigo;
		cout<<"\nPeso:   " << lista.elementos[pos].peso;
		cout<<"\nAncho:     " << lista.elementos[pos].ancho;
		cout<<"\nLargo:  " << lista.elementos[pos].largo;
		cout<<"\nPRESS KEY..."<<endl;
		getch();
		ok=true;	
	}
}
void eliminar_camiones(camion &lista,int pos, bool &ok)
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
		cout <<"Camion eliminado ...PRESS KEY";
		getch();			//realiza una pausa, hasta presionar una tecla
		lista.contador--;
	}
}
void Listar_camiones(camion &lista)
{
	cout<<"______________________________\n";
	for(int i=0; i < lista.contador; i++)
	{
	    cout<<"\nCodigo:   " << lista.elementos[i].codigo;
		cout<<"\nPeso:     " << lista.elementos[i].peso;
		cout<<"\nAncho:    " << lista.elementos[i].ancho;
		cout<<"\nLargo:    " << lista.elementos[i].largo;
		cout<<"\n";
	}
	cout<<"______________________________\nPRESS KEY...";
	getch();
}
//funciones de autobus
void insertar_autobus(bus &lista)
{
	if(lista.contador == MAX)
	{
		cout << "Los autobuses estan completos ...Pres Key" << endl;
		getch();
	}
	else
	{
		cout << "\n	Autobus -> " << lista.contador << endl;
		cout << "\nIngrese el codigo:                ";
		cin >> lista.elementos[lista.contador].codigo;
		cout << "\nIngrese la cantidad de asientos:  ";
		cin >> lista.elementos[lista.contador].num_asientos;
		cout << "Ingrese desde donde partio:         ";
		cin >> lista.elementos[lista.contador].origen;
		cout << "Ingrese a donde hira:               ";
		cin >> lista.elementos[lista.contador].destino;
		lista.contador++;		
	}
}
void buscar_autobus(bus &lista,int pos, bool &ok)
{
	if ((pos < 0)||(pos > lista.contador-1))
	{
		ok=false;
	}
	else 
	{
		cout <<"	AUTOBUS  "<< pos;
		cout<<"\nCodigo:              " << lista.elementos[pos].codigo;
		cout<<"\nNumero de asientos:  " << lista.elementos[pos].num_asientos;
		cout<<"\nOrigen:              " << lista.elementos[pos].origen;
		cout<<"\nDestino:             " << lista.elementos[pos].destino;
		cout<<"\nPRESS KEY..."<<endl;
		getch();
		ok=true;	
	}
}
void eliminar_autobus(bus &lista,int pos, bool &ok)
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
		cout <<"Autobus eliminado ...PRESS KEY";
		getch();			//realiza una pausa, hasta presionar una tecla
		lista.contador--;
	}
}
void Listar_autobus(bus &lista)
{
	cout<<"______________________________\n";
	for(int i=0; i < lista.contador; i++)
	{
		cout<<"\nCodigo:              " << lista.elementos[i].codigo;
		cout<<"\nNumero de asientos:  " << lista.elementos[i].num_asientos;
		cout<<"\nOrigen:              " << lista.elementos[i].origen;
		cout<<"\nDestino:             " << lista.elementos[i].destino;
		cout<<"\n";
	}
	cout<<"______________________________\nPRESS KEY...";
	getch();
}
//funcion principal
int main(int argc, char** argv) 
{
	bool exito;
	int op=0,opc=0,pos=0;
	
	coche lista;  //declarar las listas, importante
	camion lista;
	bus lista;

	lista.contador = 0;
	
	//numDtos();
	do
	{
		system("cls"); //limpiar datos al apretar cualquier tecla
		op=menu_principal();
		switch(op) 
		{
			case 1: 
			    {
			    	opc = menu_coches();
				}
				break;
			case 2: 
				{
					opc = menu_camiones();
				}
				break;
			case 3:
				{
					opc = menu_autobus();
				}
				break;
		}
	}while(op!=0);
		
	return 0;
}

