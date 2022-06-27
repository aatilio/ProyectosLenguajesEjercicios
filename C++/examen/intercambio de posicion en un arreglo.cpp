#include <iostream>
#include <stdlib.h>
#include<time.h>

using namespace std;

int main(int argc, char** argv) {
	int Posicion1,Posicion2,P1,P2,num;
	cout <<"CUANTOS NUMEROS DECEA ALMACENAR ";
	cin >>num;
	float Array[num+1];
	
	srand(time(NULL));
	cout<<"Array{";
	for(int i=0;i<num;i++){
	Array[i]=rand()%num;
	cout<<Array[i]<<",";
	}
	cout<<"}"<<endl;
		cout<<"\nINTERCAMBIO DE VALORES, Array[X] <-> Array[Y] "; 
		cout<<"\nINGRESE NUMEROS MENORES A   : "<<num+1;
		cout<<"\n		posicion (X): " ;
		cin>>P1; 
		cout<<"		posicion (Y): " ;
		cin>>P2;
		Posicion1 = P1-1;
		Posicion2 = P2-1;
		Array[num+1]=Array[Posicion2];
		Array[Posicion2]=Array[Posicion1];
		Array[Posicion1]=Array[num+1];
		cout<<"\n	NUENO \nArray{";
		for(int i=0;i<num;i++){
		cout<<Array[i]<<",";
		}
	cout<<"}"<<endl;
	return 0;

}


