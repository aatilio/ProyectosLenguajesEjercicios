#include <iostream>
using namespace std;

int main()
{
	int n,mayor=0,menor,sumtotal,sumPpar,sumPipar,contaP,contaI,contaJ=0;
	cout <<"cuantos pobladores son: ";
	cin>>n;
	int poblador[n];
	for (int i = 0; i < n; i++)
	{
   		cout <<"poblador "<<i+1<< " edad: ";
   		cin>>poblador[i];
   		sumtotal=sumtotal+poblador[i];
   		
   		if(mayor<poblador[i])
		{
			mayor=poblador[i];
		}
		if(menor>poblador[i])
		{
			menor=poblador[i];
		}
		if (poblador[i]%2==0)
	    {
	    	sumPpar=sumPpar+poblador[i];
			contaP++;	
		}
	   else
	   {
		   	sumPipar+=poblador[i];
			contaI++;	
	   }
	   if (poblador[i]>=18 && poblador[i]<= 28)
	   {
	   		contaJ++;
	   }	
	}
cout <<"\nsumatoria total de todas las edades: "<<sumtotal;
cout <<"\nedad mayor: "<<mayor;
cout <<"\nedad menor: "<<menor;
cout <<"\nCantidad de edades pares: "<<contaP-1;
cout <<"\nSumatoria de edades pares e impares: "<<sumPpar;
cout <<"\nCantidad de edades impares: "<<contaI;
cout <<"\nSumatoria de edades impares e impares: "<<sumPipar;
cout <<"\nnumero de personas en etapa de juventud "<<contaJ;	

return 0;
}

