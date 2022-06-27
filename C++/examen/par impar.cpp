#include <iostream>
using namespace std;

int main()
{
	int numA=0,numB=0,contP=0,comtI=0;
	cout <<"NUMEROS PARES ENTRE UN RANGO (A...B)\n";
	cout <<"ingrese el numero A\n";
	cin>>numA;
	cout <<"ingrese el numero B\n";
	cin>>numB;
	
	for (int i = numA; i < numB; i++)
	{
	    if (i%2==0)
	    {
	    	 contP++;	
		}
	   else
	   {
	   		comtI++;
	   }
	}
cout <<"cantidad de numeros pares encontrados son: "<<contP<<" son los siguientes:\n";
	for (int i = numA; i < numB; i++)
	{
	    if (i%2==0)
	    {
	    	 cout<<"-"<<i;
		}
	}
cout <<"\ncantidad de numeros impares encontrados son: "<<comtI<<" son los siguientes:\n";
for (int i = numA; i < numB; i++)
	{
	    if (i%2!=0)
	    {
	    	 cout<<"-"<<i;
		}
	}
return 0;
}



