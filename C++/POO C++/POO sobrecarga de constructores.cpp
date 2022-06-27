#include <iostream>
#include <stdlib.h>
using namespace std;

class fecha
{
private:
    int dia,mes,anio;
public:
    fecha(int,int,int); //constructoer 1
    fecha(long); //constructor 2
    void mostrarfecha();
};

//constructor 1
fecha::fecha(int _dia,int _mes, int _anio)
{
	anio = _anio;
	mes = _mes;
	dia = _dia;
}

fecha::fecha(long fecha)
{
	anio = int(fecha /10000);	//extraer el anio
	mes = int((fecha-anio*10000)/100); //extraer el mes
	dia = int (fecha-anio*10000-mes*100); //extraer el dia
}

void fecha::mostrarfecha(){
	cout <<"la fecha es: "<<dia<<"/"<<mes<<"/"<<anio<<endl;
	
}
int main()
{
	fecha hoy(9,1,2021);
	fecha ayer(20210825);
	
	hoy.mostrarfecha();
	ayer.mostrarfecha();
	
	system ("pause");

return 0;
}

