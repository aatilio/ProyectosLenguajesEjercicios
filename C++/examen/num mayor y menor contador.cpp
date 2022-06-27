#include <iostream>
using namespace std;

int main()
{
	int arreglo[10], cantidad;
	int mayor=0, menor,Cmayor,Cmenor;
	printf("Cantidad de numeros: ");
	scanf("%d",&cantidad);
	system("cls");
	for(int i=0;i<cantidad;i++)
	{
		printf("Numero %d: ",i+1);
		scanf("%d",&arreglo[i]);
	    if(mayor<arreglo[i])
	        mayor=arreglo[i];
	}
	cout<<"hola";
	printf("SALIDA DE DATOS %d\n");
	for(int i=0;i<cantidad;i++)
	{
	   	printf("%d",arreglo[i]);
	}
	menor=mayor;
	for(int i=0;i<cantidad;i++)
	    if(menor>arreglo[i])
	       menor=arreglo[i];
	for (int i = 0; i < cantidad; i++)
	{
	   if (arreglo[i]==mayor){
	   	Cmayor++;
	   }
	   else if (arreglo[i]==menor){
	   	Cmenor++;
	   }
	}
	system("cls");
	printf("El mayor es : %d\n",mayor);
	printf("Numero de veces que se rrepinte el mayor es : %d\n",Cmayor);
	printf("El menor es : %d\n", menor);
	printf("Numero de veces que se rrepinte el menor es : %d\n",Cmenor);
	return 0;
}




