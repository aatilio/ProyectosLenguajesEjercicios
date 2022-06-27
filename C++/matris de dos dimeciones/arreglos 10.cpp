#include <iostream>
using namespace std;
//#include <string>
//1.	Escriba un programa que permita almacenar en un array 10 elementos, luego mostrar la suma y el promedio de sus elementos.
/*
int main()
{
    int num[100], filas;
    double sum = 0,promedio=0;
    cout << "igresa la cantidad de dato que quieres almacenar  ";
    cin >> filas;
    for (int j = 0; j <= filas-1; j++)
    {
        cout << "igrese numero: ";
        cin >> num[j];
        sum += num[j];
    }
    promedio = sum / filas;
    cout << "\nla suma de los " << filas << " numeros de la matris es: " << sum << "\nel promedio es: " <<  promedio << endl;
    return 0;
}
*/
    /*2.	Escriba un programa que permita almacenar en un array 10 elementos, luego 
mostrar la suma de los números pares y la suma de los números impares.*/
/*
int main()
{
    int num[100], cantidad;
    double sumpar = 0, sumimp = 0, p = 0, i = 0;
    cout << "CANTIDAD DE DATOS QUE QUIERE ALMACENAR:  ";
    cin >> cantidad;
    for (int j = 1; j <= cantidad; j++)
    {
        cout << "igrese numero:  ";
        cin >> num[j];
        if (num[j] % 2 == 0)
        {
            sumpar += num[j];
            p++;
        }
        if (num[j] % 2 != 0)
        {
            sumimp += num[j];
            i++;
        }
    }
    cout << "\n_________________________________________\n";
    cout << "\nhay " << p << " pares, su suma es: " << sumpar << "\nhay " << i << " impares, su suma es: " << sumimp << endl;
    return 0;
}
*/
    //3.	Escriba un programa que lea 10 números por teclado y luego los muestre en orden inverso.
/*    
int main()
{
    int num[100], filas;
    cout << "igresa la cantidad de datos que quiere almacenar  ";
    cin >> filas;
    for (int j = 1; j <= filas; j++)
    {
        cout << "igrese los elementos de la matris [" << j << "] :  ";
        cin >> num[j];
    }
    int j = filas;
    cout << "el inverso es: ";
    while (filas > 0)
    {
        cout << num[j] << " ";
        filas--;
        j--;
    }
    return 0;
}
*/
    /*4.	Escriba un programa que permita leer cinco notas por teclado de un alumno, obtener su promedio
y mostrar si el alumno aprobó (mayor a 12) o no el curso.*/
/*
int main()
{
    int num[100], notas;
    double sum = 0;
    cout << "CUANTAS NOTAS QUIERE ALMACENAR:  ";
    cin >> notas;
    for (int j = 1; j <= notas; j++)
    {
        cout << "\nIgrese nota " << j << " :  ";
        cin >> num[j];
        sum += num[j];
    }
    cout << "\n___________________\n";
    if (sum / notas > 12)
    {
        cout << "\nUd. Aprobo con: " << sum / notas;
    }
    else
    {
        cout << "\nUd. Desaprobo con: " << sum / notas;
    }
    return 0;
}
*/
    /*5.	Escriba un programa que permita almacenar 10 números en un array ingresados 
por teclado, luego mostrar el cuadrado y cubo de dichos elementos.*/
/*
int main()
{
    int num[100], numeros;
    cout << "igresa la cantidad de numeros que quiere almacenar  ";
    cin >> numeros;
    for (int j = 1; j <= numeros; j++)
    {
        cout << "\n_________________________\n";
        cout << "\ningrese numero  [" << j << "] :  ";
        cin >> num[j];
        cout << "\nel cuadrado es: " << num[j] * num[j] << "\nel cubo es: " << num[j] * num[j] * num[j] << endl;
    }
    return 0;
}
*/
/*6	Escriba un programa que permita mostrar los datos de un usuario (nombre, edad y sexo)*/

int main()
{
    int num;
    cout << "NUMERO DE PERSONAS (N DATOS), INGRESE N:  ";
    cin >>num;
    string nombre[num];
    string sexo[num];
    int edad[num];
    cout << "\n";
    if (num > 0) //condicion para que el numero de personad sea mayor a 0
    {
        for (int i = 0; i < num; i++)
        {
            cout << "Ingrese, nombre de la persona [" << i + 1 << "] :  ";
            cin >> nombre[i];
            cout << "Ingrese, sexo de la persona [" << i + 1 << "] :  ";
            cin >> sexo[i];
            cout << "Ingrese, edad de la persona [" << i + 1 << "] :  ";
            cin >> edad[i];
            cout << "\n";
        }
        cout << "\n________________________________________\n";
       	cout << "\nNUMERO"<<"  NOMBRE"<<"      SEXO  "<<"     EDAD\n"; 
        for (int j = 0; j < num; j++)
        {
            cout << "\n  " << j + 1 << "     " << nombre[j] << "    " << sexo[j] << "       " << edad[j] << "\n";
        }
    }
    else
    {
        cout << "INGRESE UN VALOR MAYOR A 0\n";
    }
    return 0;
}
*/
/*
int main()
{
	int per;
	cout << "ingrese la cantidad de datos qie querer almacenar: "; 
	cin >> per;
    string num[per][3];
    int i, x;
    for (int j = 0; j < per; j++)
    {
    	i=0;
        while (i <= per*3)
        {
            cout << "igresar Nombre: ";
            cin >> num[j][i];
            i++;
            cout << "igresar Edad: "; //no me funcina
            cin >> num[j][i];
            i++;
            cout << "igresar sexo: ";
            cin >> num[j][i];
        }
        cout << "\n\n";
    }
    for (int j = 0; j <= per; j++)
    {
    	x=0;
        while (x <= per*3)
        {
            cout << "Nombre: " << num[j][x] << " ";
            x++;
            cout << "Edad: " << num[j][x] << " ";
            x++;
            cout << "sexo: " << num[j][x] << " \n";
        }
        cout << "\n\n";
    }
    return 0;
}
*/

    /*7.	Escriba un programa que permita leer el nombre de 10 productos de una tienda y 
su correspondiente precio. La aplicación debe decir cuántos de ellos cuestan más de 3000 
soles y mostrar su nombre, precio y posición en pantalla.*/
/*
int main()
{
    int num;
    int cantidad = 0;
    cout << "Ingrese la cantidad de productos quiere almacenar: ";
    cin>>num;
    string producto[num];
    int precio[num];
    for (int i = 0; i < num; i++)
    {
        cout << "\ningrese nombre del producto " << i + 1 << " : ";
        cin >> producto[i];
        cout << "precio del mismo:  ";
        cin >> precio[i];
    }
    cout <<"\n	LISTA TOTAL DE PRODUCTOS";
    cout << "\n___________________________________________________________________\n";
    cout <<"\nNUMERO"<<"     NOMBRE DEL PRODUCTO" <<"             PRECIO \n\n";
    for (int i = 0; i < num; i++)
    {
        cout << "\n   " << i + 1 << "                " << producto[i] << "                      " << precio[i] << endl;
    }
    for (int i = 0; i < num; i++)
    {
        if (precio[i] > 3000)
        {
            cantidad++;
        }
    }
    cout << "\n____________________________________________________________________\n";
    cout << "\nProductos con precios mayores a 3000 -> " << cantidad << ",  Son las siguientes:\n\n";
    cout <<"\nNUMERO"<<"     NOMBRE DEL PRODUCTO" <<"             PRECIO \n\n";
    for (int i = 0; i < num; i++)
    {
        if (precio[i] > 3000)
        {
            cout << "\n   " << i + 1 << "            " << producto[i] << "                      " << precio[i] << endl;
        }
    }
    return 0;
}
*/
    /*8.	Escriba un programa que dada una lista de enteros y un valor x por parte del usuario, 
diga cuántas veces x aparece en la lista.    */
/*
int main()
{
    int n = 0, conta = 0, i = 0;
    int num[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 4, 16, 3, 3, 2, 6, 4, 5, 8, 14, 1, 9, 13, 20, 1, 30};
    cout << "ingrese cualquier numero \n";
    cin >> n;
    while (i <= 29)
    {
        if (n == num[i])
        {
            conta++;
        }
        i++;
    }
    cout << "\nla cantidad de  numeros igulales a " << n << " en mi base de datos  son " << conta;
    return 0;
}
*/
    /*9.	Escriba un programa que permita ingresar "n" sueldos, luego recorra el arreglo e imprima los siguientes resultados:
La suma de sueldos generados
         * La cantidad de sueldos < 2500
         * La cantidad de sueldos >= 2500 pero < 4000
         * La cantidad de sueldos >= 4000 pero < 5000
         * La cantidad de sueldos >= 5000
*/
/*
int main()
{
    int nsueldos;
    float suel1 = 0, suel2 = 0, suel3 = 0, suel4 = 0;
    cout << "Cantidad de sueldos que quiere almacenar  ";
    cin >> nsueldos;
    int numeros[nsueldos];
    for (int j = 1; j <= nsueldos; j++)
    {
        cout << "igrese el sueldo de la persona " << j << " : ";
        cin >> numeros[j];
        if ((numeros[j] <= 2499) and (numeros[j] >= 1))
        {
            suel1++;
        }
        if ((numeros[j] <= 3999) and (numeros[j] >= 2500))
        {
            suel2++;
        }
        if ((numeros[j] <= 4999) and (numeros[j] >= 4000))
        {
            suel3++;
        }
        if(numeros[j] >= 5000)
        {
            suel4++;
        }
    }
    cout << "\n________________________________________________";
    cout << "\n\nLa cantidad de sueldos < 2500 es: " << suel1 << "\n\nLa cantidad de sueldos >= 2500 pero < 4000 es: " << suel2 << "\n\nLa cantidad de sueldos >= 4000 pero < 5000 es: " << suel3 << "\n\nLa cantidad de sueldos >= 5000 es: " << suel4;
    return 0;
}

*/

    /*10.	Escriba un programa que permita almacenar 10 elementos en un array, luego mostrar 
la cantidad de números positivos y la cantidad de números negativos.*/
/*

int main()
{
    int num[100], numeros;
    int positivo = 0, negativo = 0;
    cout << "igresa la cantidad numeros que quiere almacenar\n";
    cin >> numeros;
    for (int j = 1; j <= numeros; j++)
    {
        cout << "igrese numero: ";
        cin >> num[j];
        if (num[j] > 0)
        {
            positivo++;
        }
        if (num[j] < 0)
        {
            negativo++;
        }
    }
    cout << "\n\ncantidad de numeros positivos: " << positivo << "\n\ncantidad de numeros negativos: " << negativo;
    return 0;
}

*/
