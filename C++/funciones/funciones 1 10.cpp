#include <iostream>
#include <cmath>
using namespace std;

//ejesicio 1
/*int par(int);

int par(int x)
{
    if (x % 2 == 0)
        cout << "el numero es par"<<endl;
    else
        cout << "el numero es impar"<<endl;
}

int main()
{
    int num;
    cout << "PAR O IMPAR \n";
    cout << "ingrese un numero \n";
    cin >> num;
    cout<< par(num);
    return 0;
}
*/
//ejersicio 2
/*int par(int);

int par(int x)
{
    if (x > 0)
        return 1;
    else
        return 0;
}

int main()
{
    int num;
    cout << "NUMERO POSITIVO O NEGATIVO \n";
    cout << "ingrese el numero \n";
    cin >> num;
    if (par(num))
        cout << "el numero es positovo"<<endl;
    else
        cout << "el numero es negativo"<<endl;
            
    system ("pause");
    return 0;
}*/


//ejersicio 3
/*int area(int,int);
int perimetro(int,int);

int perimetro(int x, int y){
	return (x+y)*2;
}
int area(int x, int y){
	return x*y;
}
int main()
{
    int l, a;
    float r;
    cout << "PERIMETRO Y AREA DE UN RECTANGULO \n\n";
    cout << "ANCHO \n";
    cin >> a;
    cout << "LARGO \n";
    cin >> l;
    r=area(a,l);
    	cout<<"el area es: "<<r<<endl;
    r=perimetro(a,l);
    	cout<<"el perimetro es: "<<r<<endl;
   
    return 0;
}*/


//ejersicio 4 Ingresar un número entero por teclado y que permita mostrar la tabla de multiplicar de ese número.
/*int tabla(int);

int tabla(int n){
	int i=0;
	while (i <= 12)
    {
        cout << n << " * " << i << " = " << n * i << endl;
     	i++;
    }
     return n;
}

int main()
{
    int x, r;
    cout << "introdusca el valor de la tabla que quiere ver " << endl;
    cin >> x;
    r = tabla(x);
    cout << r;
    return 0;
}*/




/*ejersicio 5 A un trabajador le pagan según sus horas trabajadas y la tarifa está a un valor por hora.
 Si la cantidad de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 
 50% para las horas extras. Calcular el salario del trabajador dadas las horas trabajadas y las tarifas.*/
/*
double determinarSalario(int horas,double tarifa);
int main(int argc, char** argv9){
	int horas;
	double tarifa;
	cout <<"Ingrese horas trabajadas: ";
	cin >> horas;
	cout <<"Ingrese tarifa: ";
	cin>>tarifa;
	cout<<"El salario es: "<<determinarSalario(horas,tarifa);
	return 0;
 }
  double determinarSalario(int horas,double tarifa){
  	double salario=0;
  	if(horas>40)
  		salario=40*tarifa+(horas-40)*(tarifa+(tarifa*0.5));
  	else
  		salario= tarifa*horas;
  	return salario;
  }
*/

/*

//ejercicio 6
int salario(int);
int salario(int s){
	float t, d;
	if(s<=1000){
		d=s*0.10;
		t = s - d ;
		return t;
		return d;
	}
	if(s<=2000){
		d = s*0.15;
		t = s - d;
		return t;
		return d;
	}
	if(s>2000){
		d = s*0.18; 
		t = s - d ;
		return t;
		return d;
	}
}
int descuento(int);
int descuento(int s){
	float d;
	if(s<=1000){
		d=s*0.10;
		return d;
	}
	if(s<=2000){
		d = s*0.15;
		return d;
	}
	if(s>2000){
		d = s*0.18; 
		return d;
	}
}
int main(){
	int s;
	cout <<" ingrese sueldo:"<< endl;
	cin>>s;
	cout <<"su salario final es: "<< salario(s) << "\ndescuento de: " <<descuento(s)  << endl;
	return 0;
}
*/	
/*
//ejersicio 7
int nprimo(int);
int nprimo(int n){
	int conta=0;
	for(int i=1; i <= n; i++){
		for(int j=1; j <= i; j++){
			if(i%j==0){
				conta++;
			}
		}
		if (conta==2){
			cout  << i <<" ";
			conta=0;
		}
		else conta=0;
	}
}
int main(){
	int n;
	cout <<" NUMEROS PRIMOS DE 1 HASTA N "<<"\nEscribir n\n";
	cin>>n;
	if (n<0){
		cout <<"ese numero no es positivo. ";
		while (n<0){
			cout <<"intente nuevamente.";
		}
	}
	cout << nprimo(n)<<endl;
	return 0;
}
*/
/*
//ejercicio 8

float promedio(int, int, int);

int main(){
	int a,b,c;
	cout <<"PROMEDIO DE CALIFICAIONES "<<endl;
	cout <<"\n	nota 1: "; cin>>a;
	cout <<"	nota 2: "; cin>>b;
	cout <<"	nota 3: "; cin>>c;
	if ( promedio(a,b,c) >= 13){
		cout <<"\n	aprobo con: "<< promedio(a,b,c);
	}
	else {
		cout <<"\n	desaprobo con: "<< promedio(a,b,c);
	}
	return 0;
}
float  promedio(int n, int m, int x){
	float p;
	p = (n+m+x)/3;
	return (p);
	}


*/

/*
 
//Función que nos da el Promedio   8
float promedio(float nota1,float nota2, float nota3)
	{
		float Promedio;
		Promedio = (nota1+nota2+nota3)/3;
		return (Promedio);
	}
 
//Programa Principal
int main()
{
	float nota1, nota2, nota3, i, n, notafinal;
	cout<<"Ingrese cantidad de alumnos:";
	cin>>n;
	//Bucle para ingreso de Notas, en base a 3 Unidades
	for (i=1;i<=n;i++)
		{
			cout<<"\nIngrese nota I: ";
			cin>>nota1;
			cout<<"Ingrese nota II: ";
			cin>>nota2;
			cout<<"Ingrese nota III: ";
			cin>>nota3;
			notafinal = promedio(nota1,nota2,nota3);
			//Condicion si el alumno supera el 10.5 (Nota mínima)
			if (notafinal > 13)
				{cout<<"El alumno ha aprobado con: "<<notafinal<<"\n";
				}
			else
				cout<<"El alumno ha desaprobado con:"<<notafinal<<"\n";
		}
		return 0;
}
*/

//ejercicio 9
float promedio(int,int);
float promedio(int a,int b){
	float prom;
	prom=a*0.75+b*0.25;
	return prom;
}
int main(){
	int NT,NP,a,b,num;
	cout <<"numero de alumnos que almacenara los datos: "; cin >>num;
	int registro[num];
for (int i = 0; i < num; i++)
{
   	cout <<"\nALUMNO "<<i+1;
    cout <<"\nNota Teorica ";	cin>>NT; 
    cout <<"Nota practica ";	cin>>NP;
    registro[i]=promedio(NT,NP);
}
for (int i = 0; i < num; i++)
{
   	cout <<"\nALUMNO "<<i+1;
    cout <<"\nSu nota final del alumno "<<i+1 <<" es: "<< registro[i];  
}
    return 0;
}

/*

//EJERCICIO 10

double areatri(double lado);
double arearom(double diagonal1, double diagonal2);
double volumencub(double lado);

int main(int argc, char** argv) {
    int opcion;
    bool salir=false;
    double lado, diagonal1,diagonal2;
    
    while(salir == false){
    do{
        cout<<"Ingresa una opcion valida"<<endl;
        cout<<"1 : Area triangulo equilatero"<<endl;
        cout<<"2 : Area de un rombo"<<endl;
        cout<<"3 : Volumen de un cubo"<<endl;
        cout<<"4 : SALIR"<<endl;
        cin>>opcion;
    }while((opcion != 1) and (opcion != 2) and (opcion != 3) and (opcion != 4) );    

    switch (opcion){
        case 1:
            cout<<"     Ingresa el lado de triangulo : ";
            cin>>lado;
            cout<<"     El area del triangulo es : "<<areatri(lado)<<endl<<endl;
            break;
        case 2:
            cout<<"     Ingresa la diagonal1 del rombo : ";
            cin>>diagonal1;
            cout<<"     Ingresa la diagonal2 del rombo : ";
            cin>>diagonal2;
            cout<<"     El area del rombo es : "<<arearom(diagonal1,diagonal2)<<endl<<endl;
            break;
        case 3:
            cout<<"     Ingresa el lado del cubo : ";
            cin>>lado;
            cout<<"     El volumen del cubo es : "<<volumencub(lado)<<endl<<endl;
            break;
        case 4:
            salir = true;
            break;
    }
    }

    return 0;
}

double area_triangulo(double lado){
    double ar;
    ar=pow(lado,2)*sqrt(3)/4;
    return(ar);
}
double area_rombo(double diagonal1, double diagonal2){
    double ar;
    ar= diagonal1*diagonal2/2;
    return(ar);
}
double volumen_cubo(double lado){
    double vol;
    vol=pow(lado,3);
    return(vol);
}


*/

