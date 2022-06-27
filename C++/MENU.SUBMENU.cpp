#include <iostream>
#include <conio.h>
#include <stdio.h>

using namespace std;
/*3.	Una empresa dedicada a la venta de vehículos desea un sistema donde pueda registrar,
 mostrar, buscar y eliminar vehículos; cada vehículo tiene: placa, marca, modelo, 
 color, año de fabricación*/
 
const int MAX = 2 ;
//Estrucras de datos
typedef struct {
	string marca;
	string color;
	string modelo;
	int fabricacion;
	int placa;
}vehiculos;


typedef vehiculos CO[MAX];

typedef struct {
	CO elementos;  
	int contador;
}vehiculo;


int menu_vehiculos()
{
	int op;
	do{
		cout << "_________________________________________________\n";
		cout << "|         ";
		cout <<"     MENU VEHICULOS           	|";
		cout << "\n";
		cout << "|	Registrar un nuevo vehiculo   1		|" << endl;
		cout << "|	Buscar un vehiculo            2		|" << endl;
		cout << "|	Eliminar un vehiculo          3		|" << endl;
		cout << "|	Listar los vehiculo           4		|" << endl;
		cout << "|_______________________________________________|\n";
		cout << "\nIngresa una opcion valida -> " ;
		cin>>op;
	}while((op < 0) || (op >4));
	return op;
}

//funciones de cohes
void insertar_vehiculos(vehiculo &lista)
{
	if(lista.contador == MAX)
	{
		cout << "Los vehiculos estan completos " << endl;
		system ("pause");
	}
	else
	{
		cout << "\n	vehiculo -> " << lista.contador+1 << endl;
		cout << "\nIngrese marca       : ";
		cin >> lista.elementos[lista.contador].marca;
		cout << "Ingrese color       : ";
		cin >> lista.elementos[lista.contador].color;
		cout << "Ingrese modelo      : ";
		cin >> lista.elementos[lista.contador].modelo;
		cout << "Ingrese fabricacion : ";
		cin >> lista.elementos[lista.contador].fabricacion;
		cout << "Ingrese placa       : ";
		cin >> lista.elementos[lista.contador].placa;
		lista.contador++;
		cout <<"\nquieres guardar los datos?\npresione enter para confirmar\n ";
		getch();
		cout <<"		vehiculo guardado\n";
		system ("pause");	
	}
}
void buscar_vehiculos(vehiculo &lista,int pos, bool &ok)
{
	if ((pos < 0)||(pos > lista.contador-1))
	{
		ok=false;
	}
	else 
	{
		cout << "	   vehiculo     " << pos;
		cout << "\nMarca        : " << lista.elementos[pos].marca;
		cout << "\nColor        : " << lista.elementos[pos].color;
		cout << "\nModelo       : " << lista.elementos[pos].modelo;
		cout << "\nFabricacion  : " << lista.elementos[pos].fabricacion;
		cout << "\nPlaca        : " << lista.elementos[pos].placa;
		cout << "\n";
		system ("pause");
		ok=true;	
	}
}
void eliminar_vehiculos(vehiculo &lista,int pos, bool &ok)
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
		cout <<"estas seguro que quiere eliminar el vehiculo?\npresione enter para confirmar\n ";
		getch();
		cout <<"		vehiculo eliminado\n";
		system ("pause");			//realiza una pausa, hasta presionar una tecla
		lista.contador--;
	}
}
void Listar_vehiculos(vehiculo &lista)
{
	cout<<"______________________________\n";
	for(int i=0; i < lista.contador; i++)
	{
			cout << "\n vehiculo -> " << i+1;
		cout << "\nMarca        : " << lista.elementos[i].marca;
		cout << "\nColor        : " << lista.elementos[i].color;
		cout << "\nModelo       : " << lista.elementos[i].modelo;
		cout << "\nFabricacion  : " << lista.elementos[i].fabricacion;
		cout << "\nPlaca        : " << lista.elementos[i].placa;
		cout << "\n";
	}
	cout<<"______________________________\n";
	system ("pause");
}

//funcion principal
int main(int argc, char** argv) 
{
	bool exito;
	int op=0,opc=0,pos=0;
	
	vehiculo lista;  //declarar las listas, importante
	
	lista.contador = 0;
	
	do{
		system("cls");
		opc = menu_vehiculos();
		system("cls");
			switch(opc)
				{
					case 1: 
						insertar_vehiculos(lista);
						break;
					case 2:
						{
							cout <<"\ningresee la posicion del vehiculo a buscar: ";
							cin>>pos ;
							buscar_vehiculos(lista, pos, exito);
							if (!exito)
							{
								cout <<"vehiculo no encontrado "<<endl;
								system ("pause");
							}
						}
						break; 
							
					case 3:
						{
							cout <<"\ningrese la posicion del vehiculo a eliminar:  ";
							cin >> pos;
							eliminar_vehiculos(lista, pos, exito);
							if (!exito)
							{
								cout <<"vehiculo inexistente! "<<endl;
								system ("pause");
							}
						}
						break;
					case 4:
						Listar_vehiculos(lista);
						break;
					case 0:	
					break;
				}		
		}while(opc!=0);	
	return 0;
}

