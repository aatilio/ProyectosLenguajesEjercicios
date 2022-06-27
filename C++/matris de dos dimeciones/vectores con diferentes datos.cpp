#include <iostream>
using namespace std;

struct datosclase1
	{
		string nombre1;
		int nota1[];
		float promedio1;
	};
	struct datosclase2
	{
		string nombre2;
		int nota2[];
		float promedio2;
	};
	struct datosclase3
	{
		string nombre3;
		int nota3[];
		float promedio3;
	};
int main()
{
	float suma1=0,suma2=0,suma3=0;
	
	datosclase1 clase1[1];
	datosclase2 clase2[1];
	datosclase3 clase3[1];
	
	cout <<"CLASE 1\n";
	for (int i = 0; i < 1; i++)
	{
		cout <<"Ingrese  el nombre de la clase "<<i+1<< " : ";
		cin >> clase1[i].nombre1;
		for (int j=0; j<2; j++)
		{
			cout << "intgrese nota del alumno "<<j+1<<" : ";
			cin >> clase1[i].nota1[j];
			suma1 = suma1 + 	clase1[i].nota1[j];
		}
		clase1[i].promedio1= suma1 / 2;
	}
	cout <<"CLASE 2\n";
	for (int i = 0; i < 1; i++)
	{
		cout <<"Ingrese  el nombre de la clase "<<i+1<< " : ";
		cin >> clase2[i].nombre2;
		for (int j=0; j<2; j++)
		{
			cout << "intgrese nota del alumno "<<j+1<<" : ";
			cin >> clase2[i].nota2[j];
			suma2 = suma2 + clase2[i].nota2[j];
		}
		clase2[i].promedio2 = suma2 / 2;
	}
	cout <<"CLASE 3\n";
	for (int i = 0; i < 1; i++)
	{
		cout <<"Ingrese el nombre de la clase "<<i+1<< " : ";
		cin >> clase3[i].nombre3;
		for (int j=0; j<2; j++)
		{
			cout << "intgrese nota del alumno "<<j+1<<" : ";
			cin >> clase3[i].nota3[j];
			suma3 = suma3 + 	clase3[i].nota3[j];
		}
		clase3[i].promedio3 = suma3 / 2;
	}
	cout <<"\nCLASE 1\n";
	for (int i = 0; i < 1; i++)
	{
		cout <<"________________________________________________________";
		cout <<"\nnombre de la clase Nro "<<i+1<< " es: "<<	clase1[i].nombre1<<endl;
		cout <<"promedio de notas de la clase es: "<<clase1[i].promedio1<<endl;
	}
	cout <<"\nCLASE 2\n";
	for (int i = 0; i < 1; i++)
	{
		cout <<"________________________________________________________";
		cout <<"\nnombre de la clase Nro "<<i+1<< " es: "<<	clase2[i].nombre2<<endl;
		cout <<"promedio de notas de la clase es: "<<clase2[i].promedio2<<endl;
	}
	cout <<"\nCLASE 3\n";
	for (int i = 0; i < 1; i++)
	{
		cout <<"________________________________________________________";
		cout <<"\nnombre de la clase Nro "<<i+1<< " es: "<<	clase3[i].nombre3<<endl;
		cout <<"promedio de notas de la clase es: "<<clase3[i].promedio3<<endl;
	}

return 0;
}

