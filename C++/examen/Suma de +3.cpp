#include <iostream>
#include <stdio.h>
using namespace std;
/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char** argv) {

	float i;
	float suma;
	float termino;
	//suma = 0;
	for (i=1;i<=40;i++) {
		cout << "PROCESO " << i << endl;
		termino = i*3+1;
		suma = suma+termino;
		cout << "Valor de termino: " << suma << endl;
		cout << "" << endl;
	}
	cout << "Valor de suma: " << suma << endl;
	return 0;
}


