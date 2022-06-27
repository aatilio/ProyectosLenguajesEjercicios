#include <iostream>
using namespace std;

/*Escriba un programa que permita crear una matriz de 3x3 y muestre su transpuesta 
(la transpuesta se consigue intercambiando filas por columnas y viceversa).*/

int main()
{
	int f=0,c=0;
	cout << "numero de filas: "; 
	cin>>f; 
	cout << "numero de columnas: "; 
	cin>>c; 
	cout << "\n_________________________________________\n\n";
	int num[f][c];
	    for (int j = 0; j < f; j++)
	    {
	    	for (int i = 0; i < c; i++ )
	    	{
	    		cout << "igrese numero de la posicion ["<<j<<"]"<<"["<<i<<"]: " ; 
	    		cin >> num[j][i];
	    	
			}
			cout <<"\n\n";
	    }
	    cout << "___________________\n\n"<<"MATRIZ ORIJINAL\n\n";
	    for (int j = 0; j < f; j++)
	    {
	    	for (int i = 0; i < c; i++ )
	    	{
	    		cout <<  num[j][i]<<"  ";
			}
			cout <<"\n\n";
	    }
	    cout << "___________________\n\n"<<"MATRIZ TRANPUESTA\n\n";
	    for (int j = 0; j < f; j++)
	    {
	    	for (int i = 0; i < c; i++ )
	    	{
	    		cout <<  num[i][j]<<"  ";
			}
			cout <<"\n";
	    }
    return 0;
}

