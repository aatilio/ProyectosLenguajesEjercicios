#include <iostream>
using namespace std;

int main()
{
	string nomCliente;
	int cantidad,paneton;
	
	cout <<"OPCION	PANETON		PRECIO UNITARIO\n";
	cout <<"1.-	DOnofrio		20\n2.-	Motta			19\n3.-	Todinno			18\n4.-	Naval			9\n5.-	Santa Claus		11\n6.-	Doña Pepa		10\n";
	cout <<"\nINGRESE LA MARCA DEL PANETON QUE COMPRO : ";
	cin >>paneton;
	cout <<"numero de panetones que compro : ";
	cin>>cantidad;
	cout <<"nombre del cliente : ";
	cin>>nomCliente;
	switch (paneton)
	{
		case 1:
		   {
		   		if (cantidad > 20){
			    	cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 20*cantidad;
					cout <<"\ndescuento : "<<((20*cantidad)*0.1);
					cout <<"\nneto a pagar : "<<(20*cantidad)*0.9;
				}
				else{
					cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 20*cantidad;
					cout <<"\ndescuento : 0";
					cout <<"\nneto a pagar : "<<20*cantidad;
				}
		   }
		    break;
		case 2:
		   {
		   		if (cantidad > 20){
			    	cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 19*cantidad;
					cout <<"\ndescuento : "<<(19*cantidad)*0.1;
					cout <<"\nneto a pagar : "<<(19*cantidad)*0.9;
				}
				else{
					cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 19*cantidad;
					cout <<"\ndescuento : 0";
					cout <<"\nneto a pagar : "<<19*cantidad;
				}	
		   }
		    break;
		case 3:
		   {
		   		if (cantidad > 20){
			    	cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 18*cantidad;
					cout <<"\ndescuento : "<<(18*cantidad)*0.1;
					cout <<"\nneto a pagar : "<<(18*cantidad)*0.9;
				}
				else{
					cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 18*cantidad;
					cout <<"\ndescuento : 0";
					cout <<"\nneto a pagar : "<<18*cantidad;
				}	
		   }
		    break;
		case 4:
		   {
		   		if (cantidad > 20){
			    	cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 9*cantidad;
					cout <<"\ndescuento : "<<(9*cantidad)*0.1;
					cout <<"\nneto a pagar : "<<(9*cantidad)*0.9;
				}
				else{
					cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<<9*cantidad;
					cout <<"\ndescuento : 0";
					cout <<"\nneto a pagar : "<<9*cantidad;
				}		
		   }
		    break;
		case 5:
		   {
		   		if (cantidad > 20){
			    	cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 11*cantidad;
					cout <<"\ndescuento : "<<(11*cantidad)*0.1;
					cout <<"\nneto a pagar : "<<(11*cantidad)*0.9;
				}
				else{
					cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 11*cantidad;
					cout <<"\ndescuento : 0";
					cout <<"\nneto a pagar : "<<11*cantidad;
				}	
		   }
		    break;
		case 6:
		   {
		   		if (cantidad > 20){
			    	cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 10*cantidad;
					cout <<"\ndescuento : "<<(10*cantidad)*0.1;
					cout <<"\nneto a pagar : "<<(10*cantidad)*0.9;
				}
				else{
					cout <<"\ncliente : "<<nomCliente;
			    	cout <<"\nmonto de la compra : "<< 10*cantidad;
					cout <<"\ndescuento : 0";
					cout <<"\nneto a pagar : "<<10*cantidad;
				}	
		   }
		    break;
		default:
			cout <<"opcion no valida\nTRATE DE INGRESAR CON LOS DATOS CORRECTOS";
		    break;
	}


return 0;
}

