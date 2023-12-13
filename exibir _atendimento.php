<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>teste</p>

    <?php
    include_once('conexao_bd.php');
    $sql = "SELECT * FROM atendimento "

    $result = $conn->query($sql);

    print_r($result);
    ?>

    <div>

    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Atendimento</th>
      <th scope="col">Nome</th>
      <th scope="col">Serviço</th>
      <th scope="col">Filial</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
    </tr>
  </thead>

  <?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>". $user_data["idAtendimento"]."</td>";
        echo "<td>". $user_data["nome"]."</td>";
        echo "<td>". $user_data["idServiço"]."</td>";
        echo "<td>". $user_data["idFilial"]."</td>";
        echo "<td>". $user_data["dataAtendimento"]."</td>";
        echo "<td>". $user_data["horarioPreferencial"]."</td>";
        echo "</tr>";
    }

  ?>
  
</table>

    </div>
</body>
</html>