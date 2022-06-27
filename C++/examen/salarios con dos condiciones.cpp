#include <iostream>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
using namespace std;
int main(int argc, char** argv) {
	int a,e;
	cout<<"DE CUENTOS TRABAJADORES PROSESARA EL SUELDO: ";
	cin>>a;
	float suel[a],aumento[a],vonificacion[a],sueldo[a];
	for(int i=0;i<a;i++)
	{
		system ("cls");
		cout <<"\n INGRECE LOS DATOS CORRECTAMENTE DEL TRABAJADOR NUMERO : "<<i+1<<"\n";
		cout<<"1. SOLTERO"<<endl;
		cout<<"2. CASADO"<<endl;
		cout<<"es: ";
		cin>>e;
		switch (e)
			{
			case 1:{
				system ("cls");
				cout<<"ingresar el sueldo del empleado "<<i+1<<" es: ";
					cin>>suel[i];
				
						if (suel[i]<=1500){
							vonificacion[i]=100;
							aumento[i]=suel[i]*0.2;
							sueldo[i]=vonificacion[i] + suel[i]+aumento[i];
						}
						else	if (suel[i]>1500 and suel[i]<=3000){
							vonificacion[i]=100;
							aumento[i]=suel[i]*0.1;
							sueldo[i]=vonificacion[i]+ suel[i]+aumento[i];
						}
						else 	if (suel[i]>3000 and suel[i]<=6000){
							vonificacion[i]=100;
							aumento[i]=suel[i]*0.05;
							sueldo[i]=vonificacion[i]+ suel[i]+aumento[i];
						}
						else{
							vonificacion[i]=100;
							aumento[i]=suel[i]*0;
							sueldo[i]=vonificacion[i] + suel[i]+aumento[i];
						}
				}
				break;
			case 2:{
				system ("cls");
					cout<<"ingresar el sueldo del empleado "<<i+1<<" es: ";
					cin>>suel[i];
						if (suel[i]<=1500){
							vonificacion[i]=200;
							aumento[i]=suel[i]*0.2;
							sueldo[i]=vonificacion[i]+ suel[i]+aumento[i];
						}
						else	if (suel[i]>1500 and suel[i]<=3000){
							vonificacion[i]=200;
							aumento[i]=suel[i]*0.1;
							sueldo[i]=vonificacion[i]+ suel[i]+aumento[i];
						}
						else 	if (suel[i]>3000 and suel[i]<=6000){
							vonificacion[i]=200;
							aumento[i]=suel[i]*0.05;
							sueldo[i]=vonificacion[i]+ suel[i]+aumento[i];
						}
						else {
							vonificacion[i]=200;
							aumento[i]=suel[i]*0;
							sueldo[i]=vonificacion[i]+ suel[i]+aumento[i];
						}
						
				}
				break;
		}
			system ("cls");
			cout <<"\n          TRABAJADOR NUMERO "<<i+1;
			cout<<"\nel sueldo original es               : "<<suel[i]<<endl;
		    cout<<"el aumento por el estado civil es   : "<<vonificacion[i]<<endl;
			cout<<"el aunmento por contraro es         : "<<aumento[i]<<endl;
			cout<<"el sueldo final a pagar es          : "<<sueldo[i]<<endl;
			system ("pause");	
	}
	cout <<"ENLISTAR TODOS LOS TRABAJADORES";
	system ("pause");
	system ("cls");
	cout <<"LISTA DETALLADAD DE SUELDOS DE TRABAJADORES EN LA EMPRESA ARAHO\n";
	for (int i = 0; i < a; i++)
		{
			cout <<"\n          TRABAJADOR NUMERO "<<i+1;
			cout<<"\nel sueldo original es               : "<<suel[i]<<endl;
		    cout<<"el aumento por el estado civil es   : "<<vonificacion[i]<<endl;
			cout<<"el aunmento por contraro es         : "<<aumento[i]<<endl;
			cout<<"el sueldo final a pagar es          : "<<sueldo[i]<<endl;
		}
	return 0;
}


