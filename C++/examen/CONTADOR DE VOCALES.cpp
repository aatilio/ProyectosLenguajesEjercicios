#include <stdio.h>
#include <iostream>
#define numVocales 5
#define tamFrase 100
 
void cuentaVocales( char frase[] , char vocales[] )
{
    ///Inicializa vocales a 0
    for( int i=0; i< numVocales; i++)
        vocales[i] = 0;
 
    for( int i=0; i < tamFrase; i++)
    {
        switch(frase[i])
        {
            case 'a': vocales[i]++; break;
            case 'e': vocales[i]++; break;
            case 'i': vocales[i]++; break;
            case 'o': vocales[i]++; break;
            case 'u': vocales[i]++; break;
        }
    }
}
 
 
void muestraVocales(char vocales[])
{
    printf(" a: %d\n", vocales[0] );
    printf(" e: %d\n", vocales[1] );
    printf(" i: %d\n", vocales[2] );
    printf(" o: %d\n", vocales[3] );
    printf(" u: %d\n", vocales[4] );
 
}
 
using namespace std;
 
int main()
{
    char frase[tamFrase],
         vocales[numVocales];
 
    printf("Escriba una frase:\n" );
    gets(frase);
 
    cuentaVocales(frase, vocales);
    muestraVocales(vocales);
 
    return 0;
}

