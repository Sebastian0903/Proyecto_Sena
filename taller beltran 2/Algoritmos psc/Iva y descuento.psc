Proceso Iva_y_descuento
	Definir a,c,t,d,iva Como real;
	Escribir "Ingrese el precio del articulo";
	Leer a;
	Escribir "Ingrese la cantidad a comprar";
	Leer c;
	t<-a*c;
	iva<-t*0.19;
	t<-t+iva;
	Si t>13000 Entonces
		d<-t*5/100;
		t<-t-d;
		Escribir "Productos:",c,", Precio:$",a,", Total Neto:$",a*c,", IVA:$",iva,", Descuento:$",d,", Total:$",t;
	Sino
		Escribir "Productos:",c,", Precio:$",a,", Total Neto:$",a*c,", IVA:$",iva,", Total:$",t,", No hay descuento.";
	FinSi
FinProceso
