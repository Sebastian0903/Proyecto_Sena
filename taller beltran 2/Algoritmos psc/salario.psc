// Calcula el salario de un trabajador horas trabajadas y tarifa

Proceso salario

	Definir ht, tar, te, he, s, se, st como Entero;
	
	Escribir "Ingrese la cantidad de horas trabajadas : "; // se captura la informacion de horas
	Leer ht;
	Escribir "Ingrese el valor de la hora o tarifa: ";
	Leer tar;
	
	si ht >=40 entonces
		te= (tar*50/100)+tar;
		he= ht-40;
		s=40*tar;
		se=te*he;
		st=s+se;
		
	Sino
		st=ht*tar;
		
	FinSi
	Escribir "El sueldo total es: ", st;
	
FinProceso
