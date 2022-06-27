#include <iostream>
#include <cmath>
using namespace std;

double area_triangulo(double lado);
double area_rombo(double diagonal1, double diagonal2);
double volumen_cubo(double lado);
double area_cuadrado(int lado);

int main(int argc, char** argv) {
    int opcion;
    bool salir=false;
    double lado, diagonal1,diagonal2;
    
    while(salir == false)
	{
	    do
		{
	        cout<<"Ingresa una opcion valida"<<endl;
	        cout<<"1 : Area triangulo equilatero"<<endl;
	        cout<<"2 : Area de un rombo"<<endl;
	        cout<<"3 : Volumen de un cubo"<<endl;
	        cout<<"4 : Area del cuadrado"<<endl;
	        cout<<"5 : SALIR"<<endl;
	        cin>>opcion;
	    }while((opcion != 1) and (opcion != 2) and (opcion != 3) and (opcion != 4) );    
		system ("cls");
	    switch (opcion)
		{
	        case 1:
	            cout<<"     Ingresa el lado de triangulo : ";
	            cin>>lado;
	            cout<<"     El area del triangulo es : "<<area_triangulo(lado)<<endl<<endl;
	            break;
	       case 2:
	            cout<<"     Ingresa la diagonal1 del rombo : ";
	            cin>>diagonal1;
	            cout<<"     Ingresa la diagonal2 del rombo : ";
	            cin>>diagonal2;
	            cout<<"     El area del rombo es : "<<area_rombo(diagonal1,diagonal2)<<endl<<endl;
	            break;
	        case 3:
	            cout<<"     Ingresa el lado del cubo : ";
	            cin>>lado;
	            cout<<"     El volumen del cubo es : "<<volumen_cubo(lado)<<endl<<endl;
	            break;
	        case 4:
	        	cout<<"     Ingresa el lado del cuadrado : ";
	            cin>>lado;
	            cout<<"     El area del cuadrado es : "<<area_cuadrado(lado)<<endl<<endl;
	            break;
	        case 5:
	             salir = true;
	        break;
	    }
    }
    return 0;
}

double area_triangulo(double lado)
{
    double ar;
    ar=pow(lado,2)*sqrt(3)/4;
    return(ar);
}
double area_rombo(double diagonal1, double diagonal2)
{
    double ar;
    ar= diagonal1*diagonal2/2;
    return(ar);
}
double volumen_cubo(double lado)
{
    double vol;
    vol=pow(lado,3);
    return(vol);
}
double area_cuadrado(int lado)
{
    return(lado*lado);
}
