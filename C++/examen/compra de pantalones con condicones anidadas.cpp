#include <iostream>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
using namespace std;
int main(int argc, char** argv) {
	float a,c,d,e;
	int b;
cout<<"OPCION    TIPO        PRECIO"<<endl;
cout<<"  1.      DEPORTIVO   50"<<endl;
cout<<"  2.      CASUAL      60"<<endl;
cout<<"  3.      ELEGANTE    70"<<endl;
cout<<"que tipos de pantalones desea comprar: ";
cin>>b;
cout<<"cuantos pantalones desea comprar el cliente: ";
cin>>a;
switch(b){
	case 1:
		if(a<=10){
			e=50*a;
			c=e*0.03;
			d=e-c;
		}	
		else if(a>10 and a <17){
			e=50*a;
			c=e*0.05;
			d=e-c;
		}
		else {
			e=50*a;
			c=e*0.07;
			d=e-c;
		}
	break;
	case 2:
		if(a<=10){
			e=60*a;
			c=e*0.03;
			d=e-c;
		}	
		else if(a>10 and a <17){
			e=60*a;
			c=e*0.05;
			d=e-c;
		}
		else {
			e=60*a;
			c=e*0.07;
			d=e-c;
		}
	break;
	case 3:
		if(a<=10){
			e=70*a;
			c=e*0.03;
			d=e-c;
		}	
		else if(a>10 and a <17){
			e=70*a;
			c=e*0.05;
			d=e-c;
		}
		else {
			e=70*a;
			c=e*0.07;
			d=e-c;
		}
	break;
	default:
		cout<<"ERROR-datos mal ingresados"<<endl;
	break;
}
cout<<"el descuento total es: "<<c<<endl;
cout<<"el monto final a pagar es: "<<d<<endl;
	return 0;
}





