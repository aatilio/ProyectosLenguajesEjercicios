#include <iostream>
using namespace std;

int main()
{
	int numeros[]={1,2,3,4,5};
	int *dir_numero;
	dir_numero=numeros;
	
	for (int i = 0; i < 5; i++)
	{
	  cout <<"\nposicion  [" << i << "], numero conteido en este es: "<< *dir_numero++;
	}




return 0;
}

