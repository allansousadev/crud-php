<?php
echo "<h1>Lista de Usuário</h1>";

$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
  echo "<div class='container shadow p-3 mb-5 mt-5 bg-body- rounded'>";
  echo "<table class='table table-hover table-striped table-bordered'>";
  echo "<tr>";
  echo "<th>" . "#" . "</th>";
  echo "<th>" . "Nome" . "</th>";
  echo "<th>" . "E-mail" . "</th>";
  echo "<th>" . "Data Nascimento" . "</th>";
  echo "<th>" . "Ações" . "</th>";
  while ($row = $res->fetch_object()) {
    echo "<tr>";
    echo "<td>" . "$row->id" . "</td>";
    echo "<td>" . "$row->nome" . "</td>";
    echo "<td>" . "$row->email" . "</td>";
    echo "<td>" . "$row->data_nasc" . "</td>";
    echo "<td><button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" type='button' class='btn btn-success'>Editar</button>
    <button type='button' class='btn btn-danger'>Excluir</button></td>";
  }
  echo "</table>";
  echo "</div>";
} else {
  echo "<p class='alert alert-danger'>Não encontrou resultados</p>";
}
