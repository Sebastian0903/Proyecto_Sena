Proceso matriz
	Definir m,fil,col,pos,fil_pos,col_pos Como entero;
	Dimension m(5,5);
	Escribir "Ingrese las cantidades de metros de tela";
	para fil<-1 hasta 4 con paso 1 hacer
		para col<-1 hasta 4 con paso 1 Hacer
			Leer m(fil,col);
		FinPara
	FinPara
	Pos<-0;
	para fil<-1 hasta 4 con paso 1 hacer
		para col<- 1 hasta 4 con paso 1 hacer
			Si M(fil,col)>pos Entonces
				Pos<-m(fil,col);
				fil_pos<-fil;
				col_pos<-col;
			FinSi
		FinPara
	FinPara
	Escribir "La mayor cantidad de tela es: ",pos," metros. se encuentra en la fila:",fil_pos," columna: ",col_pos;
FinProceso


