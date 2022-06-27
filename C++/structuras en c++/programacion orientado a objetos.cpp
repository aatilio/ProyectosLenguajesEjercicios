#include <iostream>
using namespace std;


class carro{
private:
	int llave;
	int numeroSerie;
	bool acceso;
	int velocidad;
public:
    carro(int _llave,int _numeroSerie);
    void encender(int _llave);
    void acelerar();
    void frenar();
    string marca;
    string modelo;
};

carro::carro(int _llave, int _numeroSerie)
{
	llave = _llave;
	numeroSerie = _numeroSerie;
	acceso = false;
	velocidad = 0;
}
void carro::encender(int _llave)
{
	if (_llave == llave)
	{
		acceso = true;
		cout <<"carro encendido\n";
	}
	else 
	{
		acceso = false;
		cout<<"quivocate de nuevo y llamo a la policia\n";
	}	
}
void carro::acelerar(){
	if(acceso==true){
		velocidad=velocidad+10;
		cout <<"tu velocidad es "<<velocidad<<"\n";
	}
	else{
		cout <<"no tu no tienes acceso al carro\n";
	}
}
void carro::frenar(){
	if(acceso==true){
		velocidad=velocidad-10;
		cout <<"tu velocidad es "<<velocidad<<"\n";
	}
	else{
		cout <<"no tu no tienes acceso al carro\n";
	}
}


int main()
{
	carro bocho1=carro(123,55);
	carro bocho2=carro(124,56);
	carro bocho3=carro(125,57);
	bocho1.encender(123);
	bocho1.acelerar();
	bocho1.acelerar();
	bocho1.acelerar();
	bocho1.frenar();
	
	bocho2.encender(124);
	
	system ("pause");
return 0;
}

