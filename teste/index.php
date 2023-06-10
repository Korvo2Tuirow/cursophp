<table border="1px solid">
    <tr>
        <th>IDCURSO</th>
        <th>NOME</th>
        <th>DESCRIÇÃO</th>
        <th>CARGA</th>
        <th>TOTAL DE AULAS</th>
        <th>ANO</th>
    </tr>


<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$data = "cadastro";

$conn = mysqli_connect($hostname, $usuario, $senha, $data);

$sql = "SELECT * FROM cursos order by ano";

$query = mysqli_query($conn, $sql);
while ($array = mysqli_fetch_array($query)){

$id= $array['idcurso'];
$nome = $array['nome'];
$desc = $array['descricao'];
$carga = $array['carga'];
$totalaulas = $array['totaulas'];
$ano = $array['ano'];

echo "<tr>";
echo "<td>$id</td>";
echo "<td>$nome</td>";
echo "<td>$desc</td>";
echo "<td>$carga</td>";
echo "<td>$totalaulas</td>";
echo "<td>$ano</td>";

};


?>