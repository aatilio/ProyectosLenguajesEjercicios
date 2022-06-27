#include <iostream>
using namespace std;

struct datosCurso
	{
		string nombre;
		string creditos;
		int semestre;
		int codigo;
	};

int main()
{
	int cantidad=0,suma=0,nt=0;
	cout << "De cuantos cursos quiere almacenar los datos: ";
	cin >> cantidad;
	
	datosCurso persona[cantidad];
	
	for (int i = 0; i < cantidad; i++)
	{
		cout <<"Ingrese el nombre del curso Nro "<<i+1<< " : ";
		cin >> persona[i].nombre;
		cout <<"Ingrese los creditos del curso Nro "<< i+1<< " : ";
		cin >> persona[i].creditos;
		cout <<"Ingrese el semestre del curso Nro "<< i+1<< " : ";
		cin >> persona[i].semestre;
		cout <<"Ingrese el codigo del curso Nro "<< i+1<< " : ";
		cin >> persona[i].codigo;
		cout <<"_________________________________________________\n\n";
	}
	for (int i = 0; i < cantidad; i++)
	{
		cout <<"________________________________________________________";
		cout <<"\nnombre del curso Nro "<<i+1<< " es: "<<	persona[i].nombre<<endl;
		cout <<"creditos del curso Nro "<<i+1<< " es: "<<	persona[i].creditos<<endl;
		cout <<"semestre del curso Nro"<<i+1<< " es: "<<	persona[i].semestre<<endl;
		cout <<"codigo del curso Nro "<<i+1<< " es: "<<persona[i].codigo<<endl;
	}

return 0;
}

