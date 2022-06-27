// Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
// Es posible que el codigo generado no sea completamente correcto. Si encuentra
// errores por favor reportelos en el foro (http://pseint.sourceforge.net).

#include<iostream>
using namespace std;

// Para leer variables de texto se utiliza el operador << del objeto cin, que
// lee solo una palabra. Para leer una linea completa (es decir, incluyendo los
// espacios en blanco) se debe utilzar getline (ej, reemplazar cin>>x por
// getline(cin,x)), pero obliga a agregar un cin.ignore() si antes del getline
// se leyó otra variable con >>.

int main() {
	float centimetros;
	float convertido;
	string magnitud;
	string magnitud2;
	float metros;
	int opc;
	int opc2;
	float pies;
	float tamano;
	do {
		cout << "POR FAVOR ELEGIR UNA OPCION VALIDA" << endl;
		cout << "1:Convertir metros a otra magnitud" << endl;
		cout << "2:Convertir pies a otra magnitud" << endl;
		cout << "3:Convertir centimetros a otra magnitud" << endl;
		cout << "4:Convertir pulgadas a otra magnitud" << endl;
		cin >> opc;
	} while (!(opc==1 || opc==2 || opc==3 || opc==4));
	do {
		cout << "Ingresar la longitud a convertir, mayor a 0" << endl;
		cin >> tamano;
	} while (tamano<=0);
	switch (opc) {
	case 1:
		magnitud = "metros";
		cout << "POR FAVOR ELEGIR UNA OPCION" << endl;
		cout << "1:Convertir a pies" << endl;
		cout << "2:Convertir a centimetros" << endl;
		cout << "3:Convertir a pulgadas" << endl;
		cin >> opc2;
		if (opc2==1) {
			magnitud2 = "pies";
			convertido = tamano*100/30.48;
		}
		if (opc2==2) {
			magnitud2 = "centimetros";
			convertido = tamano*100;
		}
		if (opc2==3) {
			magnitud2 = "pulgadas";
			convertido = tamano*100/2.54;
		}
		break;
	case 2:
		magnitud = "pies";
		cout << "POR FAVOR ELEGIR UNA OPCION" << endl;
		cout << "1:Convertir a metros" << endl;
		cout << "2:Convertir a centimetros" << endl;
		cout << "3:Convertir a pulgadas" << endl;
		cin >> opc2;
		if (opc2==1) {
			magnitud2 = "metros";
			convertido = tamano/3.28;
		}
		if (opc2==2) {
			magnitud2 = "centimetros";
			convertido = tamano*30.48;
		}
		if (opc2==3) {
			magnitud2 = "pulgadas";
			convertido = tamano*12;
		}
		break;
	case 3:
		magnitud = "centimetros";
		cout << "POR FAVOR ELEGIR UNA OPCION" << endl;
		cout << "1:Convertir a pies" << endl;
		cout << "2:Convertir a metros" << endl;
		cout << "3:Convertir a pulgadas" << endl;
		cin >> opc2;
		if (opc2==1) {
			magnitud2 = "pies";
			convertido = tamano/30.48;
		}
		if (opc2==2) {
			magnitud2 = "metros";
			convertido = tamano/100;
		}
		if (opc2==3) {
			magnitud2 = "pulgadas";
			convertido = tamano/2.54;
		}
		break;
	case 4:
		magnitud = "pulgadas";
		cout << "POR FAVOR ELEGIR UNA OPCION" << endl;
		cout << "1:Convertir a pies" << endl;
		cout << "2:Convertir a centimetros" << endl;
		cout << "3:Convertir a metros" << endl;
		cin >> opc2;
		if (opc2==1) {
			magnitud2 = "pies";
			convertido = tamano*0.083334;
		}
		if (opc2==2) {
			magnitud2 = "centimetros";
			convertido = tamano*2.54;
		}
		if (opc2==3) {
			magnitud2 = "metros";
			convertido = tamano*0.0254;
		}
		break;
	default:
		cout << "INGRESE UN VALOR VALIDO POR FAVOR" << endl;
	}
	cout << tamano << " " << magnitud << " es igual a " << convertido << " " << magnitud2 << endl;
	return 0;
}

