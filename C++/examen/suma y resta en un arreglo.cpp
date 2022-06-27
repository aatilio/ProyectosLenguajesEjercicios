
#include <iostream>
#include <stdio.h>
using namespace std;
/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char** argv) {
	int suma = 0,resta=0,num;
	cout <<"cuantos numeros desea comparar : ";
	cin>>num;
	int numeros[num];
	for(int i=0;i<num;i++){
		cout <<"posicion "<<i+1<<" :";
		cin >>numeros[i];
		if (numeros[i]%2==0)
		    suma+= numeros[i];
		else
			resta+=numeros[i];
	}
	cout <<"\n	NUMEROS PARES ";
	for(int i=0;i<num;i++)
		if (numeros[i]%2==0)
		    cout <<"\nposiscion "<<i+1<<" es: "<<numeros[i];
	cout <<"\n	NUMEROS IMPARES ";
	for(int i=0;i<num;i++)
		if (numeros[i]%2!=0)
		     cout <<"\nposiscion "<<i+1<<" es: "<<numeros[i];
	cout<<"\nsuma de los numeros pares es: "<<suma<<endl;
	cout<<"suma de los numero s impares es: "<<resta<<endl;
	cout <<"pares - impares es : "<<suma-resta;   
	return 0;
}

