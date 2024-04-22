<?php
session_start();
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Desafio</title>

	<head>

	<body>
    <h1 style="text-align: center; padding-top:10%;">Editar [Designação da escola]</h1>

    <table style="margin: auto; ">
        <tr>
          <th>Designação</th>
          <th>Funcionais</th>
          <th>Não Funcionais</th>
          <th>Número total</th>
        </tr>
<form action="proc_edit.php" method="POST">
        <?php
        $query_designacao = "SELECT cod_designacao, nome_designacao, funcional_designacao, Nfuncional_designacao, total_designacao
             FROM tb_designacao";
            $result_designacao = $conn->prepare($query_designacao);
            $result_designacao->execute();

            while($row_designacao = $result_designacao ->fetch(PDO::FETCH_ASSOC)){
            extract($row_designacao); 
            if ($cod_designacao <= 1) {
                echo" <tr>";
                echo"<td> $nome_designacao </td>";
                echo"<td> <input type='number'  name='desigenacao$cod_designacao' min='0' value='$funcional_designacao' id='txt' onfocus='calcular()' disabled> </td>";
                echo"<td> <input type='number'  name='desigenacao$cod_designacao' min='0' value='$Nfuncional_designacao' id='txt' onblur='calcular()' disabled> </td>";
                echo"<td> <input type='number'  name='desigenacao$cod_designacao' min='0' value='$total_designacao' id='result'  > </td>";
                echo" </tr>";
               
            } else {
                
                echo" <tr>";
                echo"<td> $nome_designacao </td>";
                echo"<td> <input type='number'  name='desigenacao$cod_designacao' min='0' value='$funcional_designacao' id='txt1' onfocus='calcular1()'> </td>";
                echo"<td> <input type='number'  name='desigenacao$cod_designacao' min='0' value='$Nfuncional_designacao' id='txt1' onblur='calcular1()'> </td>";
                echo"<td> <input type='number'  name='desigenacao$cod_designacao' min='0' value='$total_designacao' id='result1'  disabled> </td>";
                echo" </tr>";
            }

            }
            ?>
            <tr>
            <td> 
            </td> 
            <td> 
            </td>
            <td> 
            </td>

                <td> 
            <button type="submit" style="background: #2B6AB5; color: #fff; padding: 40px 70px border-radius: 4px; font-size: 19px; font-weight: 300px;" >Actualizar</button>

                </td>
        </tr>


</form>
      </table>

    <?php
    if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    }     
    ?>

    <script>
    function calcular1(){
    var valor1 = parseInt(document.getElementById('txt1').value, 10);
    var valor2 = parseInt(document.getElementById('txt1').value, 10);
    document.getElementById('result1').value = valor1 + valor2;
    }
    </script>
</body>

</html>
