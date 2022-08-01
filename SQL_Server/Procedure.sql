create database mobbile;
GO
use mobbile;
GO

create table productos
(
id_Cod int  primary key identity,
cod_prod varchar(3) not null,
nombre varchar(50)not null,
precio money not null,
stock int not null,
)
GO


CREATE TABLE clientes(
id_cliente INT PRIMARY KEY identity,
nombre VARCHAR(50) NOT NULL,
direccion VARCHAR(50) NOT NULL,
telefono VARCHAR(50) NOT NULL,
ciudad VARCHAR(50) NOT NULL
);

Create table historial(
fecha datetime,
cod_prod varchar(3),
descripcion varchar(100), 
usuario varchar(20))
GO


create table ventas(
cod_prod varchar(3) ,
cod_cliente INT NOT NULL FOREIGN KEY REFERENCES clientes(id_cliente),
cantidad int
)
GO


INSERT INTO clientes VALUES('Simon Bolivar', 'Kra11#9-56', '957702291', 'Miraflores');
INSERT INTO clientes VALUES('Mark Zuckerberg', 'Cll 21#95-52', '957315291', 'Paucarpata');
INSERT INTO clientes VALUES('Drew Barrymore', 'Kra52#65-05', '932535945', ' Miraflores');
INSERT INTO clientes VALUES('Larry Page', 'Cll 05#52-95', '957872296', ' Chiguata');
INSERT INTO clientes VALUES('Tom Delonge', 'Cll 52#65-56', '957992293', ' Paucarpata');
INSERT INTO clientes VALUES('Simon Bolivar', 'Kra 21#65-52', '982529563', 'JLB Rivero');
INSERT INTO clientes VALUES('Mark Hoppus', 'Cll 11#95-9', '989512294', ' JLB Rivero');
INSERT INTO clientes VALUES('Britney Spears', 'Cll 05#52-56', '977055295', ' Chiguata');
INSERT INTO clientes VALUES('John Forbes Nash', 'Kra 21#05-56', '976622966', ' Miraflores');
INSERT INTO clientes VALUES('Tom Delonge', 'Kra05#65-05', '956702293',' Paucarpata');
INSERT INTO clientes VALUES('Sergey Brin', 'Cll 11#65-11', '978702299', ' Paucarpata');
INSERT INTO clientes VALUES('Emma Watson', 'Kra 9#9-95', '931569638', ' Chiguata');

/*
insert into productos values('T01','iPhone 13 Pro Max',1.259,5);
insert into productos values('T02','Samsung Galaxy S22 Ultra 5G',1.259,10);
insert into productos values('T03','Samsung Galaxy Z Fold3',1.809,10);
insert into productos values('T04','Huawei Mate 40 Pro',1.199,5);
insert into productos values('T05','Huawei P50 Pro',1.199,5);


insert into productos values('T06','OPPO Find X3 Pro',1.199,8);
insert into productos values('T07','OnePlus 10 Pro',1000,10);
insert into productos values('T08','Xiaomi Mi 11 Ultra',1.199,10);
insert into productos values('T09','Google Pixel 6 Pro',1.150,5);
insert into productos values('T10','Poco F4 Pro',499,20);
insert into productos values('T11','Poco X4 Pro',399,25);
go
*/

-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
------------------CREAR PROCEDIMIENTOS ALMACENADOS DE VISUALISACION DE DATOS-------------------------
-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------

--tabla clientes 
CREATE PROCEDURE usp_ver_clientes
AS
	SELECT * FROM clientes

--EJECUTAR EL PROCEDIMIENTO ALMACENADO

EXEC usp_ver_clientes

--tabla clientes 
CREATE PROCEDURE usp_ver_productos
AS
	SELECT * FROM productos

--EJECUTAR EL PROCEDIMIENTO ALMACENADO

EXEC usp_ver_productos

--tabla ventas 
CREATE PROCEDURE usp_ver_ventas
AS
	SELECT * FROM ventas

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
@cod_prod varchar(3),
@nombre varchar(50),
@precio money,
@stock int
as
	insert into productos(	cod_prod, 
							nombre, 
							precio,
							stock) 
					values(	@cod_prod,
							@nombre,
							@precio,
							@stock);
go

--INSERTAMOS LOS DATOS LLAMANDO AL PROCEDIMIENTO ALMACENADO QUE CREAMOS

EXEC usp_nuevo_producto'T01','iPhone 13 Pro Max',1.259,5
EXEC usp_nuevo_producto'T02','Samsung Galaxy S22 Ultra 5G',1.259,10
EXEC usp_nuevo_producto'T03','Samsung Galaxy Z Fold3',1.809,10
EXEC usp_nuevo_producto'T04','Huawei Mate 40 Pro',1.199,5
EXEC usp_nuevo_producto'T05','Huawei P50 Pro',1.199,5



--vemos la tabla que se inserto correctamente los datos
select * from productos 
select * from historial



------------------------------------------------------------------------------
--CREAR UN PROCEDIMIENTO ALMACENADO DE ACTUALISACION DE DATOS, CON PARAMETROS
------------------------------------------------------------------------------

CREATE PROCEDURE usp_actualizar_producto
--creamos los parametros segun su tipo de dato de la tabla
@cod_prod varchar(3),
@nombre varchar(50),
@precio money,
@stock int
as
	update  productos set	nombre = @nombre, 
							precio = @precio,
							stock = @stock 
					where cod_prod = @cod_prod;
go

--ejecutamos el procedure pasandole el id del producto

EXEC usp_actualizar_producto 'T04','Samsung Galaxy S22 Ultra 5G',1.259,9;

------------------------------------------------------------------------------
--CREAR UN PROCEDIMIENTO ALMACENADO DE ELIMINACION DE DATOS, CON PARAMETROS
------------------------------------------------------------------------------

CREATE PROCEDURE usp_eliminar_producto
@cod_prod varchar(3)
as
	DELETE FROM productos WHERE cod_prod = @cod_prod;
go

--ejecutamos el procedure pasandole el id del producto

EXEC usp_eliminar_producto 'T02';

-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
------------------CREACION DE TRIGGERS EN LA TABLA PRODUCTOS-----------------------------------------
-----------------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------

select * from historial
select * from productos 
go


-------------------------------------------------------------------------------------------
-----trigger de insertar productos
-----------------------------------------------------------------

create trigger TR_ProductoInsertado
on productos for insert
as
set nocount on
declare @cod_prod varchar(3)
select @cod_prod = cod_prod from inserted 
insert into historial values(getdate(), @cod_prod, 'nuevo registro insertado', system_user)


--insertamos un nuevo producto usando el procedimiento guardado que creamos

EXEC usp_nuevo_producto 'T06','OPPO Find X3 Pro',1.199,8
EXEC usp_nuevo_producto 'T07','OnePlus 10 Pro',1000,10   
EXEC usp_nuevo_producto 'T08','Xiaomi Mi 11 Ultra',1.199,10  
EXEC usp_nuevo_producto 'T09','Google Pixel 6 Pro',1.150,5  
EXEC usp_nuevo_producto 'T10','Poco F4 Pro',499,20
EXEC usp_nuevo_producto 'T11','Poco X4 Pro',399,25


-------------------------------------------------------------------------------------------
-----trigger de actualisacion de productos
-----------------------------------------------------------------
create trigger TR_ProductoActualizado
on productos for update	
as
set nocount on
declare @cod_prod varchar(4)
select @cod_prod = cod_prod from inserted   
insert into historial values(getdate(), @cod_prod, 'registro existente actualizado', system_user)


--fomra avitual 
update productos set stock =6 where cod_prod = 'T04'

--usando procedure
EXEC usp_actualizar_producto 'T04','Huawei Mate 40 Pro',1.259,6;
 

--------------------------------------------------------------------------------------------
-----trigger de eliminacion de productos
-----------------------------------------------------------------

create trigger TR_ProductoEliminado
on productos for delete
as
set nocount on
declare @cod_prod varchar(4)
select @cod_prod = cod_prod from deleted  
insert into historial values(getdate(), @cod_prod, 'registro existente eliminado', system_user)


--forma avitual
delete from productos  where cod_prod = 'T02'

--usando prosedimiento almacenados
EXEC usp_eliminar_producto 'T02';





--Procedimiento almacenado donde se reta a la tabla productos la cantidad vendida en la tabla ventas

create trigger TR_Ventas
on ventas for insert
AS
update productos set productos.stock = productos.stock - inserted.cantidad 
from inserted inner join productos 
on productos.cod_prod = inserted.cod_prod
go

--INSETAMOS LOS DATOS DE FORMA NORMAL
insert into ventas values('T01', 5, 1) 


SELECT * FROM ventas


sp_helptrigger ventas