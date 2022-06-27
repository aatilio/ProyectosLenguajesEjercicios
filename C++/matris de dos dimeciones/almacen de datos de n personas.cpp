#include <iostream>
using namespace std;

int main()
{
	int cantidad=0,suma=0,nt=0;
	cout << "numero de personas de las que almacenara los datos: ";
	cin >> cantidad;
	cout << "numero de NOTAS a almacenar: ";
	cin >> nt;
	
	struct datospersona
	{
		string nombre;
		string apellido;
		int edad;
		int nota[];
		float promedio;
	};
	
	datospersona persona[cantidad];
	
	for (int i = 0; i < cantidad; i++)
	{
		cout <<"Ingrese el nombre de la persona Nro "<<i+1<< " : ";
		cin >> persona[i].nombre;
		cout <<"Ingrese el apellido de la persona Nro "<< i+1<< " : ";
		cin >> persona[i].apellido;
		cout <<"Ingrese el edad de la persona Nro "<< i+1<< " : ";
		cin >> persona[i].edad;
	
		for (int j=0; j<nt; j++)
		{
			cout << "intgrese nota Nro "<<j+1<<" : ";
			cin >> persona[i].nota[j];
			suma = suma + 	persona[i].nota[j];
		}
		persona[i].promedio = suma / cantidad;
	}
	for (int i = 0; i < cantidad; i++)
	{
		cout <<"________________________________________________________";
		cout <<"\nnombre de la persona Nro "<<i+1<< " es: "<<	persona[i].nombre<<endl;
		cout <<"apellido de la persona Nro "<<i+1<< " es: "<<	persona[i].apellido<<endl;
		cout <<"edad de la persona Nro"<<i+1<< " es: "<<	persona[i].edad<<endl;
		cout <<"promedio de notas de la persona Nro "<<i+1<< " es: "<<persona[i].promedio<<endl;
	}

return 0;
}

