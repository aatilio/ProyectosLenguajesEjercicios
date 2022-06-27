#include <iostream>
#include <stdlib.h>
using namespace std;

class rectangulo{
	private: //atributos 
		float largo, ancho;
	public:	//metodos 
		rectangulo(float,float); 	//constructor
		void perimetro();
		void area();
};

rectangulo::rectangulo(float _largo,float _ancho){
	largo = _largo;
	ancho = _ancho;
}

void rectangulo::perimetro(){
	float _perimetro;
	
	_perimetro = (2*largo)+ (2*ancho);
	
	cout <<"el peeimetro del rectangulo es: "<<_perimetro<<endl;	
}

void rectangulo::area(){
	float _area;
	
	_area = largo * ancho;
	
	cout <<"el area del rectangulo es: "<<_area<<endl;
}
int main()
{
	int largo, ancho;
	cout <<"ingrese el largo: "; cin >>largo;
	cout <<"ingrese el ancho: "; cin >>ancho;
	
	rectangulo r1(largo,ancho);
	
	r1.area();
	r1.perimetro();
	
	system ("pause");
	return 0;
}

