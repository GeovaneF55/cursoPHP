<div class="title">Desafio Tabela #02</div>

<form action="#" method="post">
  <div>
    <label for="row">Linhas</label>
    <input type="number" name="row" id="row" value="<?= $_POST['row'] ?? 10 ?>">
  </div>
  <div>
    <label for="col">Colunas</label>
    <input type="number" name="col" id="col" value="<?= $_POST['col'] ?? 10 ?>">
  </div>
  <button>Gerar Tabelas</button>
</form>

<table>
  <?php
    $row = intval($_POST['row']);
    $col = intval($_POST['col']);

    if(!$row) $row = 10;
    if(!$col) $col = 10;

    $number = 1;
    for($i = 0; $i < $row; $i++) {
      $style = ($i % 2 === 1) ? 'background-color: lightblue;' : '';
      echo "<tr style='$style'>";
      for($j = 0; $j < $col; $j++) {
        echo "<td> $number </td>";
        $number++;
      }
      echo "</tr>";
    }
  ?>
</table>

<style>
  form * {
    font-size: 1.8rem;
  }

  form > div {
    margin-bottom: 10px;
  }

  table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
  }

  table tr {
    border: 1px solid #444;
  }

  table td {
    padding: 10px 20px;
  }
</style>