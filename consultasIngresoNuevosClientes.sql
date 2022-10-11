
-- mostrar los cantactos por sucursal 
SELECT s.id_sucursal,c.nombre,s.direccion,s.celular,s.correo from `sucursal2` as s INNER JOIN`contacto` as c where(s.id_sucursal = c.id_sucursal)
;
-- mostrar todas las empresas 
SELECT e.nombre,e.ruc,e.direccion,e.pais,s.id_sucursal,c.id_contacto FROM empresa as e INNER JOIN sucursal as  s INNER JOIN contacto as c WHERE (e.eliminada = 1);

SELECT e.nombre,e.direccion,e.razon_social,e.ruc,e.celular_contacto from empresa2 as e where e.eliminada = 1;

SELECT e.nombre,e.direccion,e.razon_social,e.ruc,e.celular_contacto,s.id_sucursal,c.id_contacto from empresa2 as e INNER JOIN sucursal2 as  s INNER JOIN contacto as c where e.eliminada = 1;


SELECt * from sucursal2 as s INNER JOIN empresa2 as e where(s.ruc_empresa = e.ruc); 
-- mostrar las sucursales por empresa 
select s.direccion,s.correo,s.celular,e.ruc,e.nombre,e.ruc from `empresa2` as e INNER JOIN `sucursal2` as s WHERE (s.ruc_empresa = e.ruc);
-- mostrar las empresas que posiblemente sean clientes "ESTADOS 1 TRABAJANDO , 0 POSIBLE_CLIENTE "
SELECT* from `empresa2` as e where(e.estado = 0);
-- ingresar empresas 
INSERT empresa2 VALUE(nombre,ruc)
-- mostrar las empresasa que trabajen con nosotros 

-- eliminar empresas 
UPDATE  empresa2 set eliminada = 0 where id_empresa = 1; 
-- actualizar empresas 
update empresa set nombre="Diego",direccion="",razon_social="",ruc="",celular_contacto="",pais="",estado="" where id_empresa = 1 and eliminada = 1;
-- ingresar sucursa
INSERT sucursal(direccion,correo,celular,nombre,id_empresa) VALUES('direccion','celular',)

SELECT s.correo,s.direccion,s.ruc_empresa from sucursal2 as s inner JOIN empresa2 as e WHERE (s.ruc_empresa = e.ruc
and e.eliminada = 1);

UPDATE sucursal2 SET eliminada = 0 where id = ;
