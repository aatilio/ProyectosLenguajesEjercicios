#include <iostream>
using namespace std;


/*1. Escriba un programa que permita crear una matriz de MxN, luego llenar
 sus valores y posteriormente indicar cuantos valores son pares e impares.*/

int main()
{
	int f=0,c=0;
	int par=0,impar =0;
	cout << "numero de filas: "; 
	cin>>f; 
	cout << "numero de columnas: "; 
	cin>>c; 
	cout << "\n_______________________________________\n\n";
	int num[f][c];
	    for (int j = 0; j < f; j++)
	    {
	    	for (int i = 0; i < c; i++ )
	    	{
	    		cout << "igrese numero de la posicion ["<<j+1<<"]"<<"["<<i+1<<"]: " ; 
	    		cin >> num[j][i];
	    		if (num[j][i] % 2 == 0)
	    		{
	    			par++;
				}
				else 
				{
					impar++;
				}
			}
			cout <<"\n";
	    }
	    cout << "___________________\n"<<"MATRIZ "<<f<<" x "<<c<<"\n\n";
	    for (int j = 0; j < f; j++)
	    {
	    	for (int i = 0; i < c; i++ )
	    	{
	    		cout <<  num[j][i]<<"  ";
			}
			cout <<"\n\n";
	    }
	    cout << "___________________\n";
	    cout << "\nnumero de pares en la matriz: "<<par<<"\nnumero de impares en la matriz: "<<impar;
    return 
