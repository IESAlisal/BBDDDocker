/* Consulta Apellidos, nombre y CorreoEmpresarial de la tabla Alumnos. 
    Sólo saca los 10 primeros registros de la tabla ordenados por Apellidos, Nombre */
use Instituto;
SELECT
    Apellidos, Nombre, CorreoEmpresarial 
FROM Alumnos 
ORDER BY Apellidos, Nombre
Limit 10;