<?php
echo "<h1>Lista de Usuários</h1>";

$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
  echo "<div class='container shadow p-3 mb-5 mt-5 bg-body rounded'>";
  echo "<table class='table table-hover table-striped table-bordered'>";
  echo "<thead class='table-dark'>";
  echo "<tr>";
  echo "<th scope='col'>" . "#" . "</th>";
  echo "<th scope='col'>" . "Nome" . "</th>";
  echo "<th scope='col'>" . "E-mail" . "</th>";
  echo "<th scope='col'>" . "Data Nascimento" . "</th>";
  echo "<th scope='col'>" . "Ações" . "</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while ($row = $res->fetch_object()) {
    echo "<tr>";
    echo "<th scope='row'>" . $row->id . "</th>";
    echo "<td>" . $row->nome . "</td>";
    echo "<td>" . $row->email . "</td>";
    echo "<td>" . $row->data_nasc . "</td>";
    echo "<td>
            <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" type='button' class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir esse registro?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false}\" type='button'  class='btn btn-danger'>Excluir</button>
          </td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
  echo "</div>";
} else {
  echo "<p class='alert alert-danger'>Não encontrou resultados</p>";
}
