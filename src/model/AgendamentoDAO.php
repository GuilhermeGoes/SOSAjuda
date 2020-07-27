<?php

class AgendamentoDAO
{

    function inserir($paciente, $turno, $especialista, $data, $motivo)
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=sos_ajuda', "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare('INSERT INTO agendamento (paciente, turno, especialista, data, motivo)
                 VALUES (:paciente, :turno, :especialista, :data, :motivo)');
            $stmt->execute(array(
                ':paciente' => "$paciente",
                ':turno' => "$turno",
                ':especialista' => "$especialista",
                ':data' => "$data",
                ':motivo' => "$motivo"
            ));

            echo "
                <script>
                    alert('" . $stmt->rowCount() . " Consulta agendada com sucesso!');
                    window.location = '../view/agendamentos.php';
                </script>";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function excluir($id)
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=sos_ajuda', "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare('DELETE FROM agendamento
                                    WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            echo "
                <script>
                    alert('" . $stmt->rowCount() . " Agendamento " . $id . " cancelado!');
                    window.location = '../view/listaAgenda.php';
                </script>";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}