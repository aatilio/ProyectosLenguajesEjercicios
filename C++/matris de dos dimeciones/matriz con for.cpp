#include <iostream>
using namespace std;
/*Escriba un programa que compruebe si una matriz de datos es mágica o no, y en caso 
de que sea mágica escribir la suma. Una matriz mágica es una matriz cuadrada (tiene igual
número de filas que de columnas) que tiene como propiedad especial que la suma de las 
filas, las columnas y las diagonales es igual. Por ejemplo: 

2 7 6       8 3 4
9 5 1	si	1 5 9		    
4 3 8		6 7 2 						

17-3 -4 -14
6 -12-11-9
10-8 -7 -13
5 -15-16-2					
  						
En esta matriz las sumas son 15.
El tamaño de la matriz será igual a la figura. Además, debe guardar la suma de las filas,
las columnas y las diagonales en un arreglo en el orden siguiente:
*/
int main()
{
    int num;
    cout << "Matriz N x N, ingrese (N):  ";
    cin >> num;
    const int constanteMagica = (num * ((num * num) + 1 )) / 2; //nos sirve para cualquier matris N x N
    int matriz[num][num];
    
    cout << "_______________________________________\n\n";
    for( int i = 0; i < num; i++ )
    {
    	 for( int j = 0; j < num; j++ ) 
		{
            cout <<"Guardar numero en la posicion [" << i+1 << "][" << j+1 << "]: "; 
            cin >> matriz[i][j];		//ingresar los valores 
        }
        cout << "\n";
	}
    cout << "_______________________________________\n\n    	     MATRIS DE " <<num<<" x "<<num<< "\n\n";
    for( int i = 0; i < num; i++ )
	{
        cout << " 		| ";
        for( int j = 0; j < num; j++ )
        {
        	cout << matriz[i][j] << " ";	//salida de los valores
		}
        cout << "|" << endl;
    }
    bool esMagico = true; //"esMagico" sirve de condicion, si se conbierte en falso dejara de 
    int i = 0;
    while( i < num && esMagico == true ) 
	{
		int suma=0;
        for( int j = 0; j < num; j++ ) 
		{
            suma = suma + matriz[i][j];  
        }
        if( suma != constanteMagica ) //si (suma |es distinto a| constanteMagica) entonces "esMagico = falso"
        {
        	esMagico = false;
		}
		i++;
    }
    if( esMagico ) 
	{
        cout << "\n_______________________________________\n\n La matriz SI es un cuadrado magico!!!" << endl;
        //cout << "Por que:\n La suma de la la fila 1: "<<suma1/3<<", 2: "<<suma1/3<<" y 3: "<<suma1/3<< "; y\nLa suma de la la columna 1: "<<suma1/3<<", 2: "<<suma1/3<<" y 3: "<<suma1/3;
        
		return 0;
    }
    int j = 0;
    while( j < num && esMagico == true ) 
	{
			int suma=0;
        for( int i = 0; i < num; i++ ) 
		{
            suma = suma + matriz[i][j];            
        }
        if( suma != constanteMagica ) 
		{
			esMagico = false;
		}
		j++;
    }
    if( esMagico )  
    {
    	cout << "\n_______________________________________\n\n La matriz SI es un cuadrado magico!!!" << endl;
        //cout << "Por que:\n La suma de la la fila 1: "<<suma2/3<<", 2: "<<suma2/3<<" y 3: "<<suma2/3<< "; y\nLa suma de la la columna 1: "<<suma2/3<<", 2: "<<suma2/3<<" y 3: "<<suma2/3;
	}
    else 
    {
    	cout << "\n_______________________________________\n\n La matriz NO es un cuadrado magico!!!" << endl;
	}
    return 0;
}
