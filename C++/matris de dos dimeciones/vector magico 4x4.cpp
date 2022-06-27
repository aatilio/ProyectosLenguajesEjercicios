#include <iostream>
using namespace std;

	/*	17-3 -4 -14
		6 -12-11-9
		10-8 -7 -13
		5 -15-16-2	*/

int main()
{
	int xx=0;
	cout << "Matriz N x N, ingrese (N): "; 
	cin>>xx;  
	cout << "_______________________________________\n\n";
	int magico[xx][xx];
	int sumaf0,sumaf1,sumaf2,sumaf3,sumac0,sumac1,sumac2,sumac3,sumad0,sumad1;
	    for (int j = 0; j < xx; j++)
	    {
	    	for (int i = 0; i < xx; i++ )
	    	{
	    		cout << "Guardar numero en la posicion ["<<j+1<<"]"<<"["<<i+1<<"]: " ; 
	    		cin >> magico[j][i];
			}
			cout <<"\n";
	    }
	    cout << "_______________________________________\n\n  	 MATRIZ ORIGINAL DE " <<xx<<" x "<<xx<< "\n\n";
	    for (int j = 0; j < xx; j++)
	    {
	    	cout << "     		| ";
	    	for (int i = 0; i < xx; i++ )
	    	{	
	    		cout << magico[j][i]<<" ";
			}
			cout << "|\n";
	    }
    	cout << "_____________________________________________________________________\n";
	    sumac0 = magico[0][0]+magico[0][1]+magico[0][2]+magico[0][3];
	    sumac1 = magico[1][0]+magico[1][1]+magico[1][2]+magico[1][3];
	    sumac2 = magico[2][0]+magico[2][1]+magico[2][2]+magico[2][3];
	    sumac3 = magico[3][0]+magico[3][1]+magico[3][2]+magico[3][3];
	    sumaf0 = magico[0][0]+magico[1][0]+magico[2][0]+magico[3][0];
	    sumaf1 = magico[0][1]+magico[1][1]+magico[2][1]+magico[3][1];
	    sumaf2 = magico[0][2]+magico[1][2]+magico[2][2]+magico[3][2];
	    sumaf3 = magico[0][3]+magico[1][3]+magico[2][3]+magico[3][3];
	    sumad0 = magico[0][0]+magico[1][1]+magico[2][2]+magico[3][3];
	    sumad1 = magico[0][3]+magico[1][2]+magico[2][1]+magico[3][0];
	    int sumatotal[10]={sumaf0,sumaf1,sumaf2,sumaf3,sumac0,sumac1,sumac2,sumac3,sumad0,sumad1};
	    if ((sumaf0==sumaf1)and(sumaf1==sumaf2)and(sumaf2==sumaf3)and(sumaf3==sumac0)and(sumac0==sumac1)and(sumac1==sumac2)and(sumac2==sumac3)and(sumac3==sumad0)and(sumad0==sumad1))
    		{
    			cout << "\n		       LA MATRIZ SI ES MAGICA\n\n			 muy bien humano!!!\n\n";
    			cout << "la suma de las filas 1, 2 , 3 y 4 es:    | "<<sumaf0<<" | "<<sumaf1<<" | "<<sumaf2<<" | "<<sumaf3<<" |  respectibamente";
    			cout << "\nla suma de las columnas 1, 2, 3 y 4 es:  | "<<sumac0<<" | "<<sumac1<<" | "<<sumac2<<" | "<<sumac3<<" |  respectibamente";
    			cout << "\nla suma de las diagonales 1 y 2 es:            | "<<sumad0<<" | "<<sumad1<<" |       respectibamente\n\n_________________________________________________________________________\n\nla suma en un arreglo es:  ";
				cout<<"|";
				for (int i = 0; i < 10; i++)
				{
				cout<<" "<<sumatotal[i]<<" | ";
				}
			}
		else 
			{
				cout << "\n			LA MATRIZ NO ES MAGICA\n\n          solo para que comprueves que esta mal humano!!!\n\n";
				cout << "la suma de las filas 1, 2 , 3 y 4 es:    | "<<sumaf0<<" | "<<sumaf1<<" | "<<sumaf2<<" | "<<sumaf3<<" |  respectibamente";
    			cout << "\nla suma de las columnas 1, 2, 3 y 4 es:  | "<<sumac0<<" | "<<sumac1<<" | "<<sumac2<<" | "<<sumac3<<" | respectibamente";
    			cout << "\nla suma de las diagonales 1 y 2 es:            | "<<sumad0<<" | "<<sumad1<<" |       respectibamente\n\n     INGRESE NUEVOS VALORES!!! \n\n";
			}
return 0;
}


