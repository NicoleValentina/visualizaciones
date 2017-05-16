<?php include('cabeza.php');?>
<section>
<h2>Estudiantes</h2>
<?php
$estudiantes = array_map('str_getcsv', file('url'));
array_walk($estudiantes, function(&$a) use ($estudiantes) {$a = array_combine($estudiantes[0], $a);});
array_shift($estudiantes);
?>
<h4>1. Total de estudiantes matriculados en la carrera</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos de la tabla, y permita una comprensión inmediata de los cambios en los últimos años (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>2. Establecimientos educacionales de procedencia de los estudiantes que ingresan al primer año:</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos de la tabla, y permita una comprensión inmediata de los cambios en los últimos años (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>3. Edad, género y procedencia regional de los estudiantes que ingresaron a primer año en 2015:</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos doctype la tabla, y permita una comprensión inmediata de las distribución de las cantidades en cada dimensión, entre total, género, edad y procendencia (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>4. Puntajes de ingreso</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos en la tabla, y permita una comprensión inmediata de la evaluación de menores y mayores puntajes de matriculados. (1 pto.)</p>
<p>Puede usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a>, p5.js u otra herramientas digital (1pto.)</p>
</section>
<?php include('pie.php');?>
