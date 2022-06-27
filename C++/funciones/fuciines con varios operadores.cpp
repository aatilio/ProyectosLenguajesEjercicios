#include <iostream>
#include <cmath>
using namespace std;

double area_triangulo(double);
double area_rombo(double, double);
double volumen_cubo(double);

int main(int argc, char** argv) {
    int opcion;
    bool salir=true;		//variables
    double lado, diagonal1,diagonal2;
    
    while(salir == true) //condicion en bucle
	{
	    cout<<"Ingresa una opcion "<<"\n1 = Area triangulo equilatero"<<"\n2 = Area de un rombo"<<"\n3 = Volumen de un cubo"<<"\n4 = SALIR\n";
	    cin>>opcion;  
	    cout  <<"___________________________________________\n\n";
		if ((opcion == 1) or (opcion == 2) or (opcion == 3) or (opcion == 4))		//condicion de la opcion
		{
			switch (opcion)		//opciones
			{
		        case 1:
		            cout<<"     Ingresa el lado de triangulo : ";
		            cin>>lado;
		            cout<<"     El area del triangulo es : "<<area_triangulo(lado)<<"\n___________________________________________\n\n";
		            break;
		       case 2:
		            cout<<"     Ingresa la diagonal1 del rombo : "
		            cin>>diagonal1;
		            cout<<"     Ingresa la diagonal2 del rombo : ";
		            cin>>diagonal2;
		            cout<<"     El area del rombo es : "<<area_rombo(diagonal1,diagonal2)<<"\n___________________________________________\n\n";
		            break;
		        case 3:
		            cout<<"     Ingresa el lado del cubo : ";
		            cin>>lado;
		            cout<<"     El volumen del cubo es : "<<volumen_cubo(lado)<<"\n___________________________________________\n\n";
		            break;
		        case 4:
		            salir = false;
		            break;
		    }
		}  
		else
		{		//si no
			cout <<"ingrese una opcion valida"<<"\nintentelo nuevamente\n\n";  
		}    
    }
    return 0;		//salida de la funcion principal
}

double area_triangulo(double lado)		//funciones ya hechas
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
    return(vol);		//salida de cada funcion
}
