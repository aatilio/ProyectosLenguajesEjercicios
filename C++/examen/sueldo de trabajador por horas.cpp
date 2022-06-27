#include <iostream>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
using namespace std;
int main(int argc, char** argv) {
	int year,hora,dia;
	float total1year,sueldo;
cout<<"cuantos year ha trabajo el empleado"<<endl;
cin>>year;
cout<<"cuantas dias al mes trabaja: "<<endl;
cin>>dia;
cout<<"cuantas horas al dia trabaja:"<<endl;
cin>>hora;
total1year=12*(30*hora*dia);
if(year<=5){
	
	sueldo=(year*total1year)+(year*total1year)*0.6;
}
else if(year>5 and year<=10){
	sueldo=(year*total1year)+(year*total1year)*0.8;
}
else {
	sueldo=(year*total1year)+(year*total1year)*1;
}
cout<<"el suledo total que obtiene el empleado a fin off year es: "<<sueldo<<endl;
	return 0;
}

