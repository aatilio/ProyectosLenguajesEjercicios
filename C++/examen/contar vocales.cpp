#include <iostream>
using namespace std;

int main()
{
char frase[100];
int _a=0,_e=0,_i=0,_o=0,_u=0;
cout <<"ingresa una frase ";
cin.getline(frase,100,'\n');
for (int i = 0; i < 100; i++)
{
    switch (frase[i])
	{
	case 'a': _a++; break;
	case 'e': _e++; break;
	case 'i': _i++; break;
	case 'o': _o++; break;
	case 'u': _u++; break;
	case 'A': _a++; break;
	case 'E': _e++; break;
	case 'I': _i++; break;
	case 'O': _o++; break;
	case 'U': _u++; break;
	}
}
cout <<"el numero total de vocales son : "<<_a+_e+_i+_o+_u<<" ,en expesifico : ";
cout <<"\nletra A: "<<_a;
cout <<"\nletra E: "<<_e;
cout <<"\nletra I: "<<_i;
cout <<"\nletra O: "<<_o;
cout <<"\nletra U: "<<_u;

return 0;
}

