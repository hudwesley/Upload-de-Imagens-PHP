<?php 
    require_once("conexao.php");
    if(isset($_GET["idFile"])){
        $idFile = ($_GET["idFile"]);

        $sql = "DELETE FROM tbFile WHERE idFile = $idFile";
        if($conn->query($sql) === TRUE){
            ?>
            <script>
                alert("Arquivo excluído com sucesso");
                window.location = "index.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Ocorreu um erro ao excluir");
                window.history.back();
            </script>
            <?php
        }
    }
?>