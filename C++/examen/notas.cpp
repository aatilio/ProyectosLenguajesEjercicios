#include<iostream>
using namespace std;



int main() {
	float descuento;
	float editorial;
	float importante_total_a_pagar;
	float importe_de_la_compra;
	float tipo_de_comprador;
	cout << "Ingresa el valor de importe de la compra:";
	cin >> importe_de_la_compra;

	do {
		system("cls");
		cout << "Selecciona el valor de editorial." << endl;
		cout << "    1.- San Marcos" << endl;
		cout << "    2.- Coveñas" << endl;
		cout << "    3.- Otros" << endl;
		cout << "    :";
		cin >> editorial;
	} while (!(editorial>=1 && editorial<=3));
	cout << "Selecciona el valor de tipo de comprador." << endl;
	cout << "    1.- Estudiante" << endl;
	cout << "    2.- Público en general" << endl;
	cout << "    :";
	do {
		cin >> tipo_de_comprador;
		if (tipo_de_comprador<1 || tipo_de_comprador>2) {
			cout << "Valor incorrecto. Ingrésalo nuevamente.: ";
		}
	} while (!(tipo_de_comprador>=1 && tipo_de_comprador<=2));
	descuento = 0;
	if (editorial==1 && tipo_de_comprador==1) {
		descuento = importe_de_la_compra*0.25;
	}
	if (editorial==1 && tipo_de_comprador==2) {
		descuento = importe_de_la_compra*0.1;
	}
	if (editorial==2 && tipo_de_comprador==1) {
		descuento = importe_de_la_compra*0.3;
	}
	if (editorial==2 && tipo_de_comprador==2) {
		descuento = importe_de_la_compra*0.13;
	}
	if (editorial==3 && tipo_de_comprador==1) {
		descuento = importe_de_la_compra*0.35;
	}
	if (editorial==3 && tipo_de_comprador==2) {
		descuento = importe_de_la_compra*0.16;
	}
	importante_total_a_pagar = importe_de_la_compra-descuento;
	cout << "Valor de descuento: " << descuento << endl;
	cout << "Valor de importante total a pagar: " << importante_total_a_pagar << endl;
	return 0;
}

