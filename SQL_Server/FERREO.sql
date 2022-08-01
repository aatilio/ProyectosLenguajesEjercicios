CREATE DATABASE FERREO

USE FERREO

-----------------------------------------------------------------
--■■■■■■■■■■■■■■■■■■■■■■■■ 2 CASE -------------------------------
-----------------------------------------------------------------

--UN SELEC DONDE ASOGNAMOS DE ACUERDO A LA EDAD CUAL ES SU CATEGORIA 
Select NOMBRE, EDAD,
CASE
WHEN EDAD >=18 AND EDAD <=30 THEN 'NO ESTA EN NOMINA'
WHEN EDAD >=31 AND EDAD <=50 THEN 'PROSESO DE ESTAR EN NOMINA'
WHEN EDAD >=51 AND EDAD <=70 THEN 'ESTA EN NOMINA'
Else 'NO SE SABE'
END AS NOMINA
from REPVENTAS

--UN SELEC USANDO CASE BUSCANDO QUE PRODUCTO FATA EN EXISTENCIAS 
Select ID_PRODUCTO, DESCRIPCION, EXISTENCIAS,
CASE
WHEN EXISTENCIAS = 0  THEN 'FALTA STOCK,'
Else 'NO FALTA STOCK'
END AS NOMINA
from PRODUCTOS



-----------------------------------------------------------------
--■■■■■■■■■■■■■■■■■■■■■■■■ 6 ROCEDIMIENTOS ALMACENADOS ----------
-----------------------------------------------------------------


--LISTAR TODOS LOS CLIENTES 
CREATE PROCEDURE LISTAR_CLIENTES
AS
SELECT * FROM CLIENTES
GO

--EJECUCION
EXEC LISTAR_CLIENTES



--LISTAR TODOS LOS CLIENTES 
CREATE PROCEDURE CLIE_ATE_REC_103
AS
SELECT * FROM CLIENTES WHERE REP_CLIE = 103
GO

--EJECUCION
EXEC CLIE_ATE_REC_103


--LISTAR TODOS LOS PRODUCTOS 
CREATE PROCEDURE LISTAR_PRODUCTOS
AS
SELECT * FROM PRODUCTOS
GO

--EJECUCION
EXEC LISTAR_PRODUCTOS


---------------------------------------------------------
--PROCEDURE DE INSERCION DE PRODUCTOS CON PARAMETROS-----

CREATE PROCEDURE INSERTAR_PRODUCTOS
--creamos los parametros segun su tipo de dato de la tabla
@id_fab nvarchar(255),
@id_producto nvarchar(255),
@descripcion nvarchar(255),
@precio float,
@existencias float
as
	insert into productos(	ID_FAB, 
							ID_PRODUCTO,
							DESCRIPCION,
							PRECIO,
							EXISTENCIAS) 
					values(	@id_fab,
							@id_producto,
							@descripcion,
							@precio,
							@existencias);
go




------------------------------------------------------------
--PROCEDURE DE ACTUALOZACION DE PRODUCTOS CON PARAMETROS----

CREATE PROCEDURE ACTUALIZAR_PRODUCTOS
--creamos los parametros segun su tipo de dato de la tabla
@id_fab nvarchar(255),
@id_producto nvarchar(255),
@descripcion nvarchar(255),
@precio float,
@existencias float
as
	UPDATE productos	SET	ID_PRODUCTO = @id_producto,
							DESCRIPCION = @descripcion,
							PRECIO = @precio,
							EXISTENCIAS = @existencias 
					WHERE	ID_FAB = @id_fab
go

--EJECUCION


--------------------------------------------------------------------------------
--CREAR UN PROCEDIMIENTO ALMACENADO DE ELIMINACION DE PRODUCTOS, CON PARAMETROS

CREATE PROCEDURE ELIMINAR_PRODUCTOS
@id_fab varchar(3)
as
	DELETE FROM PRODUCTOS WHERE ID_FAB = @id_fab;
go


--PROCEDURE PARA LA INGRESAR DATOS DE LAS OFICINAS CON PARAMETROS
CREATE PROCEDURE INSERTAR_OFICINA
--creamos los parametros segun su tipo de dato de la tabla
@OFICINA FLOAT,
@CIUDAD nvarchar(255),
@REGION nvarchar(255),
@DIR float,
@OBJETIVO float,
@VENTAS float
as
	insert into OFICINAS(	OFICINA, 
							CIUDAD,
							REGION,
							DIR,
							OBJETIVO,
							VENTAS) 
					values(	@OFICINA,
							@CIUDAD,
							@REGION,
							@DIR,
							@OBJETIVO,
							@VENTAS);
go


--PROCEDURE PARA LA ACTUALIZAR DATOS DE LAS OFICINAS CON PARAMETROS
CREATE PROCEDURE ACTUALIZAR_OFICINA
--creamos los parametros segun su tipo de dato de la tabla
@OFICINA FLOAT,
@CIUDAD nvarchar(255),
@REGION nvarchar(255),
@DIR float,
@OBJETIVO float,
@VENTAS float
as
	UPDATE OFICINAS	SET		CIUDAD = @CIUDAD,
							REGION = @REGION,
							DIR = @DIR, 
							OBJETIVO = @OBJETIVO,
							VENTAS = @VENTAS 
					WHERE OFICINA = @OFICINA
go


--PROCEDURE PARA LA ELIMINAR DATOS DE LAS OFICINAS CON PARAMETROS
CREATE PROCEDURE ELIMINAR_OFICINA
--creamos los parametros segun su tipo de dato de la tabla
@OFICINA FLOAT
AS
	DELETE FROM OFICINAS WHERE OFICINA = @OFICINA;
go

-----------------------------------------------------------------
--■■■■■■■■■■■■■■■■■■■■■■■■ 4  FUNCIONES ------------------------------
-----------------------------------------------------------------


--FUNCION DONDE DEVUELVE LA DESCRIPCION DE LOS PRODUCTOS EN MAYUSCULA
CREATE FUNCTION produc_mayus
(
@descripcion Varchar(50)
)
RETURNS Varchar(50)
AS
--Declarar Variables
BEGIN
RETURN UPPER(@descripcion)
END



--Ejecutar
Select ID_PRODUCTO AS 'CODIGO DEL PRODUCTO', dbo.produc_mayus(descripcion) AS 'DESCRIPCION' From PRODUCTOS



--FUNCION DONDE DEVUELVE LA CANTIDAD DE PRODUCOTS VENDIDOS DE UNO EN ESPECIFICO
CREATE FUNCTION num_ventas_produc
(
@id_producto Varchar(50)
)
RETURNS Varchar(100)
AS
--Declarar Variables
BEGIN

DECLARE @num_ventas int
SELECT @num_ventas = SUM(CANT) FROM PEDIDOS WHERE PRODUCTO = @id_producto
RETURN @num_ventas

END

--Ejecutar

--select * from PEDIDOS
Select PRODUCTO AS 'CODIGO DEL PRODUCTO', dbo.num_ventas_produc (41004) As 'NUMERO DE VENTAS' From PEDIDOS WHERE PRODUCTO = '41004'



--creamos un afuncion donde nos debuelve el nombre del mes segun al numero ingresado
Create function NombreMes(@mes int)
Returns Varchar(10)
AS
Begin
Declare @Var Varchar(20)
	Select @Var=
	Case @mes
	When 1 Then 'ENERO'
	When 2 Then 'FEBRERO'
	When 3 Then 'MARZO'
	When 4 Then 'ABRIL'
	When 5 Then 'MAYO'
	When 6 Then 'JUNIO'
	When 7 Then 'JULIO'
	When 8 Then 'AGOSTO'
	When 9 Then 'SETIEMBRE'
	When 10 Then 'OCTUBRE'
	When 11 Then 'NOVIEMBRE'
	When 12 Then 'DICIEMBRE'
End
Return @Var
End
--Ejecutar
Print dbo.NombreMes(5)

----Implementar una función que devuelva el promedio de dos números ingresados por el usuario.
--Evaluamos primero si ya existe la función
--que queremos implementar si ya existe la eliminamos
IF object_id('calcularpromedio') is not null
BEGIN
DROP FUNCTION dbo.calcularpromedio
END

--Implementamos la función que calcula el promedio de 3 numeros con tres parámetros de entrada
CREATE FUNCTION calcularpromedio3
(@valor1 as decimal(10,2),@valor2 decimal(10,2),@valor3 decimal(10,2))
RETURNS decimal(10,2)
AS
BEGIN
DECLARE @resultado decimal(10,2)
SET @resultado=(@valor1+@valor2+@valor3)/3
RETURN @resultado
END

--Ejecutamos
select dbo.calcularpromedio3(13,15,20) as Promedio


-----------------------------------------------------------------
--■■■■■■■■■■■■■■■■■■■■■■■■ 3 VISTAS -----------------------------
-----------------------------------------------------------------

--Creamos la vistas de ver los datos de la oficina del Este

 create view vie_ver_oficionas_region_este 
 as
  select * from OFICINAS where REGION = 'Este'

--Vemos la información de la vista:

 select * from vie_ver_oficionas_region_este;


 --vista donde mostramos todos los vendedores que trabajan en la oficina de Barcelona

 create view vie_vendedores_oficina_barcelona
 AS
	SELECT * FROM REPVENTAS 
	where OFICINA_REP IN (SELECT OFICINA FROM OFICINAS WHERE  CIUDAD = 'Barcelona')
 GO

 --ejecucion 
 select * from vie_vendedores_oficina_barcelona


 --VISTAS PARA VISUALIZAR TODOS LOS PEDIDOS QUE SE REALISARON EL LA FECHA 02/02/2000
 CREATE VIEW vie_ver_pedidos_2000
 AS
	SELECT * FROM PEDIDOS WHERE FECHA_PEDIDO = '2000-02-02'
 GO
 --llamamos a la vista creada
  select * from vie_ver_pedidos_2000
-----------------------------------------------------------------
--■■■■■■■■■■■■■■■■■■■■■■■■ 5 TRIGGERS ---------------------------
-----------------------------------------------------------------

--CREAMOS UNA TABLA DONDE SE CAPTURAN TODOS LOA CAMBIOS QUE SE HACEN EN LAS TABLAS ESPESIFICADAS
Create table HISTORIAL(
fecha datetime,
codigo varchar(3),
descripcion varchar(100), 
usuario varchar(20))
GO


-------------------------------------------------------------------------------------------
-----trigger de insertar productos

create trigger TR_ProductoInsertado
on productos for insert
as
set nocount on
declare @cod_prod varchar(3)
select @cod_prod = ID_FAB from inserted 
insert into historial values(getdate(), @cod_prod, 'nuevo registro insertado', system_user)


--insertamos un nuevo producto usando el procedimiento guardado que creamos

EXEC INSERTAR_PRODUCTOS 'IMM','887X','Retenedor Riostra',475,32
EXEC INSERTAR_PRODUCTOS 'IMM','773C','Riostra 1/2-Tm',975,28



-------------------------------------------------------------------------------------------
-----trigger de actualisacion de productos

create trigger TR_ProductoActualizado
on productos for update	
as
set nocount on
declare @cod_prod varchar(4)
select @cod_prod = ID_FAB from inserted   
insert into historial values(getdate(), @cod_prod, 'registro existente actualizado', system_user)


--usando procedure
EXEC ACTUALIZAR_PRODUCTOS 'IMM','887X','Retenedor Riostra',475,10
 

--------------------------------------------------------------------------------------------
-----trigger de eliminacion de productos

create trigger TR_ProductoEliminado
on productos for delete
as
set nocount on
declare @cod_prod varchar(255)
select @cod_prod = ID_FAB from deleted  
insert into historial values(getdate(), @cod_prod, 'registro existente eliminado', system_user)


--usando prosedimiento almacenados
EXEC ELIMINAR_PRODUCTOS 'IMM';




-----------------■■■■■■■--------------------------------------------------------------------------
-----trigger de insertar oficinas

create trigger TR_InsertarOficina
on Oficinas for insert
as
set nocount on
declare @cod_prod FLOAT
select @cod_prod = OFICINA from inserted 
insert into historial values(getdate(), @cod_prod, 'nueva oficina insertada', system_user)


--insertamos una oficina usando el procedimiento guardado que creamos

EXEC INSERTAR_OFICINA 24,'Andorra','Sur',109,48000,32500;
EXEC INSERTAR_OFICINA 25,'Paris','Riostra 1/2-Tm',110,25000,20100;


-------------------------------------------------------------------------------------------
-----trigger de actualisacion de oficinas

create trigger TR_ActualizarOficina
on oficinas for update	
as
set nocount on
declare @cod_prod float
select @cod_prod = OFICINA from inserted   
insert into historial values(getdate(), @cod_prod , 'oficina  actualizada', system_user)


--usando procedure
EXEC ACTUALIZAR_OFICINA 24,'Andorra','Sur',109,50000,40500;
EXEC ACTUALIZAR_OFICINA 25,'Paris','NorEste',110,25000,20100;
 

--------------------------------------------------------------------------------------------
-----trigger de eliminacion de oficinas

create trigger TR_EliminarOficina
on oficinas for delete
as
set nocount on
declare @cod_prod float
select @cod_prod = OFICINA from deleted  
insert into historial values(getdate(), @cod_prod, 'oficina eliminado', system_user)


--usando prosedimiento almacenados
EXEC ELIMINAR_OFICINA 25;


SELECT *  FROM HISTORIAL

SELECT *  FROM OFICINAS