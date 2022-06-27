#include <iostream>
using namespace std;
/*
2 7 6       8 3 4
9 5 1	si	1 5 9		    
4 3 8		6 7 2 						

17-3 -4 -14
6 -12-11-9
10-8 -7 -13
5 -15-16-2											
*/
int main()
{
	double suma=0,constmagica=0;
    int num=0,sumF=0,sumC=0,sumD1=0,sumD2=0,condicional=0;
    cout << "Matriz N x N, ingrese (N):  ";
    cin >> num;
    int matriz[num][num];
    int sumaT[ (num*2)+2];
    cout << "_______________________________________\n\n";
    for( int i = 0; i < num; i++ )
    {
    	 for( int j = 0; j < num; j++ ) 
		{
            cout <<"Guardar numero en la posicion [" << i+1 << "][" << j+1 << "]: "; 
            cin >> matriz[i][j];
			suma = suma + matriz[i][j];		//ingresar los valores 
        }
        cout << "\n";
	}
    cout << "_______________________________________\n\n    	     MATRIS DE " <<num<<" x "<<num<< "\n\n";
    for( int i = 0; i < num; i++ )
	{
        cout << " 		| ";
        for( int j = 0; j < num; j++ )
        {
        	cout << matriz[i][j] << " ";
		}
        cout << "|" << endl;
    }
	for( int f = 0; f < num; f++ )
    {
    	 for( int c = 0; c < num; c++ ) 
		{
           	sumF = sumF + matriz[f][c];
        }
        sumaT[f] = sumF ;
        sumF = 0;
	}
	for( int c = 0; c < num; c++ ) 
    {
    	for( int f = 0; f < num; f++ )
		{
           	sumC = sumC + matriz[f][c];
        }
        sumaT[c+num] = sumC ;
        sumC = 0;
	}
	for( int f = 0; f < num; f++ )
    {
       	sumD1 = sumD1 + matriz[f][f];
    	sumD2 = sumD2 + matriz[(num-1)-f][(num-1)-f];    	
	}
	sumaT[(num*2)] = sumD1 ;
    sumaT[(num*2)+1] = sumD2 ;
    constmagica = suma / num;
	cout << "______________________________________________________________________________________\n\nArreglo   | ";
	for (int i = 0; i < (num*2)+2; i++ )
	{
		cout << sumaT[i]<<" | ";
		if (constmagica == sumaT[i])
		{
			condicional = condicional + 1;
		}
	}
	if (condicional == ((num*2)+2))
	{
		cout <<" ->  SI es una matriz magica";
	}
	else 
	{
		cout <<" ->  NO es una matriz magica";
	}
return 0;
}


