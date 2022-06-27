#include <iostream>
using namespace std;

int main()			//belleza de codigo
{
	double suma=0,constmagica=0;
    int num=0,sumF=0,sumC=0,sumD1=0,sumD2=0,condicional=0;
    cout << "Matriz N x N, ingrese (N):  ";
    cin >> num;
    int matriz[num][num];
    int sumaT[ (num*2)+2];		//sirve para almacenar cada suma de la matriz para luego compararlo
    cout << "_______________________________________\n\n";
    for( int i = 0; i < num; i++ )
    {
    	 for( int j = 0; j < num; j++ ) 
		{
            //cout <<"Guardar numero en la posicion [" << i << "][" << j << "]: "; 
            //cin>>matriz[i][j];					//ingresar los valores 
            matriz[i][j]=5;						//o valor definido			
			suma = suma + matriz[i][j];	
        }
        cout << "\n";
	}
    cout << "_______________________________________\n\n    	     MATRIS DE " <<num<<" x "<<num<< "\n\n";
    for( int i = 0; i < num; i++ )
	{
        cout << " | ";
        for( int j = 0; j < num; j++ )
        {
        	cout << matriz[i][j] << " ";  //impresion de la matriz en pantalla
		}
        cout << "|" << endl;
    }
	for( int f = 0; f < num; f++ )		//aqui es donde esta la magia
    {
    	 for( int c = 0; c < num; c++ ) 
		{
           	sumF = sumF + matriz[f][c];		//captura la suma de la fila
			sumC = sumC + matriz[c][f];		//captura la suma de la columna
        }
        sumaT[f] = sumF ;  //guarda la suma de cada fila
        sumF = 0;
        sumaT[f+num] = sumC ;  //guarda la suma de cada columna 
        sumC = 0;
        sumD1 = sumD1 + matriz[f][f];					 //captura la suma de la diagonal 1 
    	sumD2 = sumD2 + matriz[f][(num-1)-f];     //captura la suma de la diagonal 2	
	}
	sumaT[(num*2)] = sumD1;		  //guarda la suma de la diagonal 1 
    sumaT[(num*2)+1] = sumD2 ;		  //guarda la suma de la diagonal 2
    constmagica = suma / num;		  //es para comparar con cada una de las sumas
	cout << "______________________________________________________________________________________\n\nArreglo   | ";
	for (int i = 0; i < (num*2)+2; i++ )
	{
		cout << sumaT[i]<<" | ";
		if (constmagica == sumaT[i])  //aui es d0nde compara a cada uno
		{
			condicional = condicional + 1;   //si es que es cierto suma +1 hata aque sea igual a num*2+2
		}
	}
	if (condicional == ((num*2)+2)) 		//si la condicional es igual a num*2+2 
	{
		cout <<" ->  SI es una matriz magica";
	}
	else 
	{
		cout <<" ->  NO es una matriz magica";		//si es que no llega a conpletar la condicion no!!!
	}
return 0;
}


