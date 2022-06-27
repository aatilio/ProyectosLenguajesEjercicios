#include <iostream>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
using namespace std;
int main(int argc, char** argv) {
	int a,c,d,e,suma1=0,suma2=0;
	char b[20];
	cout<<"cuantos empleados hay en la empresa"<<endl;
	cin>>a;
	for(int i=1;i<=a;i++){
		cout<<"ingrese el nombre del empleado"<<endl;
		cin>>b;
		cout<<"en que categoria se encuentra el empleado: "<<endl;
		cout<<"1"<<endl;
		cout<<"2"<<endl;
		cout<<"3"<<endl;
		cout<<"si no esta en ninguna de estas categorias presione 4"<<endl;
		cin>>c;
		cout<<"ingrese el sueldo del empleado: "<<endl;
		cin>>d;
		if(c==1){
			e=d*0.12;
			suma1=suma1+d;
			suma2=suma2+e;
		}
		else if(c==2){
			e=d*0.1;
			suma1=suma1+d;
			suma2=suma2+e;
		}
		else if(c==3){
			e=d*0.08;
			suma1=suma1+d;
			suma2=suma2+e;	
		}
		else if(c==4){
		
			e=d*0.06;
			suma1=suma1+d;
			suma2=suma2+e;
		}
		else{
			cout<<"ERROR-datos mal ingresados"<<endl;
		}
	}
	cout<<"el total de sueldo basico es: "<<suma1<<endl;
	cout<<"el total de bonificaciones fue: "<<suma2<<endl;
	cout<<"el sueldo total es: "<<suma1+suma2<<endl;
	return 0;
}

