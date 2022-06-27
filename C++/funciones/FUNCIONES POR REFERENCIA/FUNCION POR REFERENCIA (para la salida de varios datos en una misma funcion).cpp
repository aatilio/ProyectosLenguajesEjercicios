#include <iostream>
#include <stdlib.h>
using namespace std;

void calcular(int,int,int&,int&,float&,float&);

int main()
{
	int num1, num2,suma,resta;
	float producto, divicion;
	cout <<"INGRESE DOS NUMEROS \nprimer numero: "; cin >>num1; 
	cout <<"segundo numero: "; cin>>num2;
	calcular(num1, num2,suma,resta,producto,divicion);
	cout <<"\nla suma de los dos numeros es: "<<suma;
	cout <<"\nla resta de los dos numeros es: "<<resta;
	cout <<"\nel producto de los dos numeros es: "<<producto;
	cout <<"\nla divicion de los dos numeros es: "<<divicion;


return 0;
}


void calcular(int num1,int num2,int& suma,int& resta,float&  producto,float& divicion){
	suma = num1+num2;
	resta = num1-num2;
	producto = num1*num2;
	divicion = num1/num2;
}

