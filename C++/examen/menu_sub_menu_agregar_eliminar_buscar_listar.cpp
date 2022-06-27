#include <iostream>
#include <conio.h>
#include <stdio.h>

using namespace std;
/*Realizar un Programa que permita gestionar (menú) las estructuras de datos de AUTOS con los campos
(código, marca, color y año), CAMIONES con los campos (código, peso, largo y ancho) y AUTOBUS con 
los campos (código, numero_asientos, origen y destino). La opciones de cada estructura deben ser Ingresar, 
Eliminar, Buscar, Listar y Salir.*/

const int MAX = 2;
//Estrucras de datos
typedef struct
{
	string marca;
	string color;
	int year;
	int codigo;
} COCHES;
typedef struct
{
	int largo;
	int ancho;
	int peso;
	int codigo;
} CAMIONES;
typedef struct
{
	string origen;
	string destino;
	int num_asientos;
	int codigo;
} AUTOBUS;

typedef COCHES CO[MAX];
typedef CAMIONES CA[MAX];
typedef AUTOBUS AU[MAX];

typedef struct
{
	CO elementos;
	int contador;
} coche;
typedef struct
{
	CA elementos;
	int contador;
} camion;
typedef struct
{
	AU elementos;
	int contador;
} bus;

//Declaración de todas las funciones
int menu_principal();

int menu_coches();
void insertar_coches(coche &lista);
void buscar_coches(coche &lista, int pos, bool &ok);
void eliminar_coches(coche &lista, int pos, bool &ok);
void Listar_coches(coche &lista);

int menu_camiones();
void insertar_camiones(camion &lista1);
void buscar_camiones(camion &lista1, int pos, bool &ok);
void eliminar_camiones(camion &lista1, int pos, bool &ok);
void Listar_camiones(camion &lista1);

int menu_autobus();
void insertar_autobus(bus &lista2);
void buscar_autobus(bus &lista2, int pos, bool &ok);
void eliminar_autobus(bus &lista2, int pos, bool &ok);
void Listar_autobus(bus &lista2);
//menu principal
int menu_principal()
{
	int op;
	do
	{
		cout << "_________________________________________\n";
		cout << "|         ";
		cout << "   MENU PRINCIPAL             |";
		cout << "\n";
		cout << "|	Gestionar, COCHES     1		|" << endl;
		cout << "|	Gestionar, CAMIONES   2		|" << endl;
		cout << "|	Gestionar, AUTOBUS    3		|" << endl;
		cout << "|_______________________________________|\n";
		cout << "\nIngresa una opcion valida -> ";
		cin >> op;
	} while ((op < 0) || (op > 3));
	return op;
}
//sub menu
int menu_coches()
{
	int op;
	do
	{
		cout << "_________________________________________\n";
		cout << "|         ";
		cout << "    MENU COCHES               |";
		cout << "\n";
		cout << "|	Agregar un nuevo coche   1	|" << endl;
		cout << "|	Buscar un coche          2	|" << endl;
		cout << "|	Eliminar un coche        3	|" << endl;
		cout << "|	Listar los coche         4	|" << endl;
		cout << "|	MENU PRINCIPAL           0	|" << endl;
		cout << "|_______________________________________|\n";
		cout << "\nIngresa una opcion valida -> ";
		cin >> op;
	} while ((op < 0) || (op > 4));
	return op;
}
int menu_camiones()
{
	int op;
	do
	{
		cout << "_________________________________________\n";
		cout << "|         ";
		cout << "     MENU CAMIONES       	|" << endl;
		cout << "|	Agregar un nuevo camion    1 	|" << endl;
		cout << "|	Buscar un camion           2 	|" << endl;
		cout << "|	Eliminar un camion         3 	|" << endl;
		cout << "|	Listar los camiones        4 	|" << endl;
		cout << "|	MENU PRINCIPAL             0 	|" << endl;
		cout << "|_______________________________________|\n";
		cout << "\nIngresa una opcion valida -> ";
		cin >> op;
	} while ((op < 0) || (op > 4));
	return op;
}
int menu_autobus()
{
	int op;
	do
	{
		cout << "_________________________________________\n";
		cout << "|         ";
		cout << "     MENU AUTOBUS          	|" << endl;
		cout << "|	Agregar un nuevo autobus  1	|" << endl;
		cout << "|	Buscar un autobus         2	|" << endl;
		cout << "|	Eliminar un autobus       3	|" << endl;
		cout << "|	Listar los autobus        4	|" << endl;
		cout << "|	MENU PRINCIPAL            0	|" << endl;
		cout << "|_______________________________________|\n";
		cout << "\nIngresa una opcion valida -> ";
		cin >> op;
	} while ((op < 0) || (op > 4));
	return op;
}
//funciones de cohes
void insertar_coches(coche &lista)
{
	if (lista.contador == MAX)
	{
		cout << "Los coches estan completos " << endl;
		system("pause");
	}
	else
	{
		cout << "\n	coche -> " << lista.contador << endl;
		cout << "\nIngrese marca      : ";
		cin >> lista.elementos[lista.contador].marca;
		cout << "Ingrese color      : ";
		cin >> lista.elementos[lista.contador].color;
		cout << "Ingrese year       : ";
		cin >> lista.elementos[lista.contador].year;
		cout << "Ingrese el codigo  : ";
		cin >> lista.elementos[lista.contador].codigo;
		lista.contador++;
		cout << "\nquieres guardar los datos?\npresione enter para confirmar\n ";
		getch();
		cout << "		COCHE guardado\n";
		system("pause");
	}
}
void buscar_coches(coche &lista, int pos, bool &ok)
{
	if ((pos < 0) || (pos > lista.contador - 1))
	{
		ok = false;
	}
	else
	{
		cout << "	COCHE  " << pos;
		cout << "\nMarca   : " << lista.elementos[pos].marca;
		cout << "\nColor   : " << lista.elementos[pos].color;
		cout << "\nAño     : " << lista.elementos[pos].year;
		cout << "\nCodigo  : " << lista.elementos[pos].codigo;
		cout << "\n";
		system("pause");
		ok = true;
	}
}
void eliminar_coches(coche &lista, int pos, bool &ok)
{
	if ((pos < 0) || (pos > lista.contador - 1))
	{
		ok = false;
	}
	else
	{
		ok = true;
		for (int i = pos; i < lista.contador - 1; i++)
		{
			lista.elementos[i] = lista.elementos[i + 1];
		}
		cout << "estas seguro que quiere eliminar el COCHE?\npresione enter para confirmar\n ";
		getch();
		cout << "		COCHE eliminado\n";
		system("pause"); //realiza una pausa, hasta presionar una tecla
		lista.contador--;
	}
}
void Listar_coches(coche &lista)
{
	cout << "______________________________\n";
	for (int i = 0; i < lista.contador; i++)
	{
		cout << "\n coche -> " << i;
		cout << "\nMarca   : " << lista.elementos[i].marca;
		cout << "\nColor   : " << lista.elementos[i].color;
		cout << "\nAño     : " << lista.elementos[i].year;
		cout << "\nCodigo  : " << lista.elementos[i].codigo;
		cout << "\n";
	}
	cout << "______________________________\n";
	system("pause");
}
//funciones de camiones
void insertar_camiones(camion &lista1)
{
	if (lista1.contador == MAX)
	{
		cout << "Los camiones estan completos " << endl;
		system("pause");
	}
	else
	{
		cout << "\n	Camion -> " << lista1.contador << endl;
		cout << "\nIngrese codigo   : ";
		cin >> lista1.elementos[lista1.contador].codigo;
		cout << "Ingrese peso     : ";
		cin >> lista1.elementos[lista1.contador].peso;
		cout << "Ingrese largo    : ";
		cin >> lista1.elementos[lista1.contador].largo;
		cout << "Ingrese el ancho : ";
		cin >> lista1.elementos[lista1.contador].ancho;
		lista1.contador++;
		cout << "\nquieres guardar los datos?\npresione enter para confirmar\n ";
		getch();
		cout << "		CAMION guardado\n";
		system("pause");
	}
}
void buscar_camiones(camion &lista1, int pos, bool &ok)
{
	if ((pos < 0) || (pos > lista1.contador - 1))
	{
		ok = false;
	}
	else
	{
		cout << "	CAMION  " << pos;
		cout << "\nCodigo   : " << lista1.elementos[pos].codigo;
		cout << "\nPeso     : " << lista1.elementos[pos].peso;
		cout << "\nAncho    : " << lista1.elementos[pos].ancho;
		cout << "\nLargo    : " << lista1.elementos[pos].largo;
		cout << "\n";
		system("pause");
		ok = true;
	}
}
void eliminar_camiones(camion &lista1, int pos, bool &ok)
{
	if ((pos < 0) || (pos > lista1.contador - 1))
	{
		ok = false;
	}
	else
	{
		ok = true;
		for (int i = pos; i < lista1.contador - 1; i++)
		{
			lista1.elementos[i] = lista1.elementos[i + 1];
		}
		cout << "estas seguro que quieres eliminar el CAMION?\npresione enter para confirmar\n ";
		getch();
		cout << "		CAMION eliminado\n";
		system("pause"); //realiza una pausa, hasta presionar una tecla
		lista1.contador--;
	}
}
void Listar_camiones(camion &lista1)
{
	cout << "______________________________\n";
	for (int i = 0; i < lista1.contador; i++)
	{
		cout << "\n Camion -> " << i;
		cout << "\nCodigo   : " << lista1.elementos[i].codigo;
		cout << "\nPeso     : " << lista1.elementos[i].peso;
		cout << "\nAncho    : " << lista1.elementos[i].ancho;
		cout << "\nLargo    : " << lista1.elementos[i].largo;
		cout << "\n";
	}
	cout << "______________________________\n";
	system("pause");
}
//funciones de autobus
void insertar_autobus(bus &lista2)
{
	if (lista2.contador == MAX)
	{
		cout << "Los autobuses estan completos " << endl;
		system("pause");
	}
	else
	{
		cout << "\n	Autobus -> " << lista2.contador << endl;
		cout << "\nIngrese el codigo               : ";
		cin >> lista2.elementos[lista2.contador].codigo;
		cout << "Ingrese la cantidad de asientos : ";
		cin >> lista2.elementos[lista2.contador].num_asientos;
		cout << "Ingrese desde donde partio      : ";
		cin >> lista2.elementos[lista2.contador].origen;
		cout << "Ingrese a donde hira             : ";
		cin >> lista2.elementos[lista2.contador].destino;
		lista2.contador++;
		cout << "\nquieres guardar los datos?\npresione enter para confirmar\n ";
		getch();
		cout << "		BUS guardado\n";
		system("pause");
	}
}
void buscar_autobus(bus &lista2, int pos, bool &ok)
{
	if ((pos < 0) || (pos > lista2.contador - 1))
	{
		ok = false;
	}
	else
	{
		cout << "	AUTOBUS  " << pos;
		cout << "\nCodigo              : " << lista2.elementos[pos].codigo;
		cout << "\nNumero de asientos  : " << lista2.elementos[pos].num_asientos;
		cout << "\nOrigen              : " << lista2.elementos[pos].origen;
		cout << "\nDestino             : " << lista2.elementos[pos].destino;
		cout << "\n";
		system("pause");
		ok = true;
	}
}
void eliminar_autobus(bus &lista2, int pos, bool &ok)
{
	if ((pos < 0) || (pos > lista2.contador - 1))
	{
		ok = false;
	}
	else
	{
		ok = true;
		for (int i = pos; i < lista2.contador - 1; i++)
		{
			lista2.elementos[i] = lista2.elementos[i + 1];
		}
		cout << "estas seguro que quieres eliminar el BUS?\npresione enter para confirmar\n ";
		getch();
		cout << "		BUS eliminado\n";
		system("pause"); //realiza una pausa, hasta presionar una tecla
		lista2.contador--;
	}
}
void Listar_autobus(bus &lista2)
{
	cout << "______________________________\n";
	for (int i = 0; i < lista2.contador; i++)
	{
		cout << "\n Bus -> " << i;
		cout << "\nCodigo              : " << lista2.elementos[i].codigo;
		cout << "\nNumero de asientos  : " << lista2.elementos[i].num_asientos;
		cout << "\nOrigen              : " << lista2.elementos[i].origen;
		cout << "\nDestino             : " << lista2.elementos[i].destino;
		cout << "\n";
	}
	cout << "______________________________\n  ";
	system("pause");
}
//funcion principal
int main(int argc, char **argv)
{
    bool exito;
    int op = 0, opc = 0, pos = 0;

    coche lista; //declarar las listas, importante
    camion lista1;
    bus lista2;

    lista.contador = 0;
    lista1.contador = 0;
    lista2.contador = 0;

    do
    {
        system("cls"); //limpiar datos al apretar cualquier tecla
        op = menu_principal();
        system("cls");
        switch (op)
        {
        case 1:
        {
            do
            {
                system("cls");
                opc = menu_coches();
                switch (opc)
                {
                case 1:
                    insertar_coches(lista);
                    break;
                case 2:
                {
                    cout << "\ningresee la posicion del coche a buscar: ";
                    cin >> pos;
                    buscar_coches(lista, pos, exito);
                    if (!exito)
                    {
                        cout << "coche no encontrado " << endl;
                        system("pause");
                    }
                }
                break;

                case 3:
                {
                    cout << "\ningrese la posicion del coche a eliminar:  ";
                    cin >> pos;
                    eliminar_coches(lista, pos, exito);
                    if (!exito)
                    {
                        cout << "coche inexistente! " << endl;
                        system("pause");
                    }
                }
                break;
                case 4:
                    Listar_coches(lista);
                    break;
                case 0:
                    break;
                }
            } while (opc != 0);
        }
        break;
        case 2:
        {
            do
            {
                system("cls");
                opc = menu_camiones();
                switch (opc)
                {
                case 1:
                    insertar_camiones(lista1);
                    break;
                case 2:
                {
                    cout << "\ningresee la posicion del camion a buscar: ";
                    cin >> pos;
                    buscar_camiones(lista1, pos, exito);
                    if (!exito)
                    {
                        cout << "camion no encontrado " << endl;
                        system("pause");
                    }
                }
                break;

                case 3:
                {
                    cout << "\ningrese la posicion del camion a eliminar:  ";
                    cin >> pos;
                    eliminar_camiones(lista1, pos, exito);
                    if (!exito)
                    {
                        cout << "camion inexistente! " << endl;
                        system("pause");
                    }
                }
                break;
                case 4:
                    Listar_camiones(lista1);
                    break;
                case 0:
                    break;
                }
            } while (opc != 0);
        }
        break;
        case 3:
        {
            do
            {
                system("cls");
                opc = menu_autobus();
                switch (opc)
                {
                case 1:
                    insertar_autobus(lista2);
                    break;
                case 2:
                {
                    cout << "\ningresee la posicion del autobus a buscar: ";
                    cin >> pos;
                    buscar_autobus(lista2, pos, exito);
                    if (!exito)
                    {
                        cout << "bus no encontrado " << endl;
                        system("pause");
                    }
                }
                break;

                case 3:
                {
                    cout << "\ningrese la posicion del autobus a eliminar:  ";
                    cin >> pos;
                    eliminar_autobus(lista2, pos, exito);
                    if (!exito)
                    {
                        cout << "bus inexistente!" << endl;
                        system("pause");
                    }
                }
                break;
                case 4:
                    Listar_autobus(lista2);
                    break;
                case 0:
                    break;
                }
            } while (opc != 0);
        }
        break;
        }
    } while (op != 0);
    return 0;
}

