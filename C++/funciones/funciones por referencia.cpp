#include <iostream>
using namespace std;

int funcion1(int n, int m);
int funcion2(int &n, int &m);

int main()
{
	int a,b;
	a=5;
	b=5;
	cout << funcion1(a,b);
	cout << "\na = "<<a<<" b = "<<b<<endl; 
	cout << funcion2(a,b);
	cout << "\na = "<<a<<" b = "<<b<<endl;


return 0;
}

int funcion1(int n,int m)
{
	n=n-2;
	m=m+2;
	return m+n;	
}

int funcion2(int &n,int &m)
{
	n=n-2;
	m=m+2;
	return m+n;	
}
