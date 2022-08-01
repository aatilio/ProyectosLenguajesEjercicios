create database Bodeguita

use Bodeguita

CREATE TABLE CLIENTE(
id_cliente INT PRIMARY KEY,
nombre VARCHAR(50) NOT NULL,
direccion VARCHAR(50) NOT NULL,
telefono VARCHAR(50) NOT NULL,
ciudad VARCHAR(50) NOT NULL
);

CREATE TABLE PRODUCTO(
id_producto INT PRIMARY KEY,
descripcion VARCHAR(200) NOT NULL,
precio INT NOT NULL
);

CREATE TABLE VENTA(
id_venta INT PRIMARY KEY,
cantidad INT NOT NULL,
id_cliente INT NOT NULL REFERENCES CLIENTE,
id_producto INT NOT NULL REFERENCES PRODUCTO
);

EXECUTE sp_rename 'CLIENTE.ciudad', 'distrito';

INSERT INTO CLIENTE VALUES(123,'Simon Bolivar', 'Kra11#9-56', '957702291', 'Miraflores');
INSERT INTO CLIENTE VALUES(456,'Mark Zuckerberg', 'Cll 21#95-52', '957315291', 'Paucarpata');
INSERT INTO CLIENTE VALUES(789,'Drew Barrymore', 'Kra52#65-05', '932535945', ' Miraflores');
INSERT INTO CLIENTE VALUES(741,'Larry Page', 'Cll 05#52-95', '957872296', ' Chiguata');
INSERT INTO CLIENTE VALUES(147,'Tom Delonge', 'Cll 52#65-56', '957992293', ' Paucarpata');
INSERT INTO CLIENTE VALUES(852,'Simon Bolivar', 'Kra 21#65-52', '982529563', 'JLB Rivero');
INSERT INTO CLIENTE VALUES(258,'Mark Hoppus', 'Cll 11#95-9', '989512294', ' JLB Rivero');
INSERT INTO CLIENTE VALUES(963,'Britney Spears', 'Cll 05#52-56', '977055295', ' Chiguata');
INSERT INTO CLIENTE VALUES(369,'John Forbes Nash', 'Kra 21#05-56', '976622966', ' Miraflores');
INSERT INTO CLIENTE VALUES(159,'Tom Delonge', 'Kra05#65-05', '956702293',' Paucarpata');
INSERT INTO CLIENTE VALUES(753,'Sergey Brin', 'Cll 11#65-11', '978702299', ' Paucarpata');
INSERT INTO CLIENTE VALUES(153,'Emma Watson', 'Kra 9#9-95', '931569638', ' Chiguata');
 
 select * FROM dbo.cliente

 --delete from dbo.producto;
INSERT INTO PRODUCTO VALUES(1,'Coca-Cola 2L',384);
INSERT INTO PRODUCTO VALUES(2,'Doritos',100);
INSERT INTO PRODUCTO VALUES(3,'Salchicha',360);
INSERT INTO PRODUCTO VALUES(4,'Pan',50);
INSERT INTO PRODUCTO VALUES(5,'Queso',100);
INSERT INTO PRODUCTO VALUES(6,'Sandia',110);
INSERT INTO PRODUCTO VALUES(7,'Leche 1L',450);
INSERT INTO PRODUCTO VALUES(8,'Atun',180);
INSERT INTO PRODUCTO VALUES(9,'Pescado',780);
INSERT INTO PRODUCTO VALUES(10,'Cicla Estatica',170);
INSERT INTO PRODUCTO VALUES(11,'Camiseta',1200);
INSERT INTO PRODUCTO VALUES(12,'Blue-Jean',450);
INSERT INTO PRODUCTO VALUES(13,'Papaya',140);
INSERT INTO PRODUCTO VALUES(14,'Agua en Bolsa',180);
INSERT INTO PRODUCTO VALUES(15,'Red Bull',320);

INSERT INTO VENTA VALUES(1,5,123,1);
INSERT INTO VENTA VALUES(2,6,123,2);
INSERT INTO VENTA VALUES(3,7,123,3);
INSERT INTO VENTA VALUES(4,8,123,4);
INSERT INTO VENTA VALUES(5,2,456,5);
INSERT INTO VENTA VALUES(6,4,741,6);
INSERT INTO VENTA VALUES(7,5,456,7);
INSERT INTO VENTA VALUES(8,600,741,8);
INSERT INTO VENTA VALUES(9,69,852,9);
INSERT INTO VENTA VALUES(10,15,789,10);
INSERT INTO VENTA VALUES(11,11,456,5);
INSERT INTO VENTA VALUES(12,22,789,6);
INSERT INTO VENTA VALUES(13,11,753,7);
INSERT INTO VENTA VALUES(14,10,963,12);
INSERT INTO VENTA VALUES(15,65,963,11);
INSERT INTO VENTA VALUES(16,12,852,10);
INSERT INTO VENTA VALUES(17,65,741,9);
INSERT INTO VENTA VALUES(18,78,147,8);
INSERT INTO VENTA VALUES(19,92,258,9);
INSERT INTO VENTA VALUES(20,12,258,6);
INSERT INTO VENTA VALUES(21,32,147,3);
INSERT INTO VENTA VALUES(22,3,789,1);
INSERT INTO VENTA VALUES(23,45,456,2);
INSERT INTO VENTA VALUES(24,5,123,3);
INSERT INTO VENTA VALUES(25,5,789,4);
INSERT INTO VENTA VALUES(26,6,456,1);
INSERT INTO VENTA VALUES(27,4,123,2);
INSERT INTO VENTA VALUES(28,7,789,12);
INSERT INTO VENTA VALUES(29,8,258,13);
INSERT INTO VENTA VALUES(30,9,852,14);
INSERT INTO VENTA VALUES(31,9,753,15);
INSERT INTO VENTA VALUES(32,6,753,10);
INSERT INTO VENTA VALUES(33,7,159,9);
INSERT INTO VENTA VALUES(34,8,963,10);
INSERT INTO VENTA VALUES(35,9,369,8);
INSERT INTO VENTA VALUES(36,15,369,7);
INSERT INTO VENTA VALUES(37,5,123,5);
INSERT INTO VENTA VALUES(38,6,123,6);
INSERT INTO VENTA VALUES(39,7,123,7);
INSERT INTO VENTA VALUES(40,8,123,8);
INSERT INTO VENTA VALUES(41,5,123,9);
INSERT INTO VENTA VALUES(42,6,123,10);
INSERT INTO VENTA VALUES(43,7,123,11);
INSERT INTO VENTA VALUES(44,8,123,12);
INSERT INTO VENTA VALUES(45,5,123,13);
INSERT INTO VENTA VALUES(46,6,123,14);
INSERT INTO VENTA VALUES(47,7,123,15);

 select * FROM dbo.VENTA


--creacion de una vista para que sea mas facil ver el resultado guardado

create view vi_1
as
select * from PRODUCTO
where id_producto=9

select * from vi_1

-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
------------------CREAR PROCEDIMIENTOS ALMACENADOS DE VISUALISACION DE DATOS-------------------------
-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------

--tabla clientes 
CREATE PROCEDURE usp_ver_clientes
AS
	SELECT * FROM CLIENTE

--EJECUTAR EL PROCEDIMIENTO ALMACENADO

EXEC usp_ver_clientes

--tabla clientes 
CREATE PROCEDURE usp_ver_productos
AS
	SELECT * FROM PRODUCTO

--EJECUTAR EL PROCEDIMIENTO ALMACENADO

EXEC usp_ver_productos

--tabla ventas 
CREATE PROCEDURE usp_ver_ventas
AS
	SELECT * FROM CLIENTE

--EJECUTAR EL PROCEDIMIENTO ALMACENADO

EXEC usp_ver_ventas

--------------------------------------------------------------------------------------------------------------------
--Para poder visualisar de forma clara las instrucciones de un procedimiento guardado para luego poder editarlo.

sp_helptext usp_ver_clientes


---------------------------------------------------------------------------
--CREAR UN PROCEDIMIENTO ALMACENADO DE INSERCION DE DATOS, CON PARAMETROS
---------------------------------------------------------------------------

create procedure usp_nuevo_producto
--creamos los parametros segun su tipo de dato de la tabla
@xid_producto int,
@xdescripcion varchar(200),
@cprescio int
as
	insert into PRODUCTO(id_producto, 
						descripcion, 
						precio) 
				values(@xid_producto,
						@xdescripcion,
						@cprescio);
go

--INSERTAMOS LOS DATOS LLAMANDO AL PROCEDIMIENTO CREADO

EXEC usp_nuevo_producto 16,'Cola Escosesa',8

--vemos la tabla que se inserto correctamente los datos
select * from PRODUCTO


------------------------------------------------------------------------------
--CREAR UN PROCEDIMIENTO ALMACENADO DE ACTUALISACION DE DATOS, CON PARAMETROS
------------------------------------------------------------------------------

CREATE PROCEDURE usp_actualizar_producto
@xid_producto int,
@xdescripcion varchar(200),
@xprecio int
as

	UPDATE PRODUCTO SET descripcion = @xdescripcion,
						precio = @xprecio
					WHERE id_producto = @xid_producto;
go

--ejecutamos el procedure pasandole el id del producto

EXEC usp_actualizar_producto 16,'Cola escocesa de 2.5 litros',9;

------------------------------------------------------------------------------
--CREAR UN PROCEDIMIENTO ALMACENADO DE ELIMINACION DE DATOS, CON PARAMETROS
------------------------------------------------------------------------------

CREATE PROCEDURE usp_eliminar_producto
@xid_producto int
as
	DELETE FROM PRODUCTO WHERE id_producto = @xid_producto;
go

--ejecutamos el procedure pasandole el id del producto

EXEC usp_eliminar_producto 16;


-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
---------------------------------------------------CREACION DE TRIGGER ------------------------------
-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------


--creamos una tabla nueva llamada hostorial para hacer pruevas con trigger
Create table historial
(fecha date,
id_producto int,
descripcion varchar(100),
usuario varchar(30))


select * from historial
select * from PRODUCTO

-----------------------------------------------------------------------------------------------------
---------------------------------------------------- INSERTAR REGISTROS EN LA TABLA PRODUCTO 
-----------------------------------------------------------------------------------------------------
create trigger TR_Insertado
on producto for insert
as
--set nocount on		--esta instruccion sirve para ocultar que la ejecucion del trigger en la consolo de resultados
declare @id_producto int
select @id_producto = id_producto from inserted

insert into historial values
(getdate(),@id_producto, 'registro insertado', system_user)

--al insertar nuevos productos en la tabla productos tambien registramos en la tabla historial el codigo de producto y la fecha de insercion
insert into producto values(17,'Red Bull',60)
insert into producto values(18,'Gatorade',50)


-----------------------------------------------------------------------------------------------------
--------------------------------------------- BORRAR REGISTROS EN LA TABLA PRODUCTO 
-----------------------------------------------------------------------------------------------------
alter trigger TR_Borrado
on producto for delete
as
set nocount on
declare @id_producto int
select @id_producto = id_producto from deleted

insert into historial values
(getdate(),@id_producto, 'produnto eliminado', system_user)
go

--vemos las tablas con sus respectivos registros
select * from historial
select * from producto
--llamamos a la instruccion delete con normalidad
delete from producto where id_producto = 17
delete from producto where id_producto = 18

-----------------------------------------------------------------------------------------------------
--------------------------------------------- ACTUALIZAR REGISTROS EN LA TABLA PRODUCTO 
-----------------------------------------------------------------------------------------------------

create trigger TR_Actualiza
on producto for update
as
--- set nocount on
declare @id_producto int
select @id_producto = id_producto from inserted

insert into historial values
(getdate(),@id_producto, 'Producto actualizado',system_user)
go

--llamamos  a la intruccin UPDAETE, en la tabla productos 
update producto set descripcion ='Kola escocesa, 2.5 litros'
where id_producto = 16


------------------------------------------------------------------------------------------------------------
--- HACER QUE SE RESTE AUTOMATICAMENTE EL NUEMRO DE PRODUCTOS DE LA TABLA DEL MISMO NOMBRE CON LA DE VENTAS 
------------------------------------------------------------------------------------------------------------

select * from historial
select * from VENTA


create trigger TR_Venta1
on venta for insert
AS
declare @id_producto int


update ARTICULO set ARTICULO.STOCK =
ARTICULO.STOCK - inserted.cantidad
from inserted inner join ARTICULO
on ARTICULO.id_articulo = inserted.id_producto
insert into historial values(getdate(),
@id_producto, 'registro actualizado',
system_user)

insert into VENTA values(51, 5, 123, 8, '2021-
07-19')
---update producto set descrip
