<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conversas</title>
    <meta http-equiv="Refresh" content="8">
    <script>
        function deixarEmbaixo(){
            var TextArea = document.getElementById("conversa")
            TextArea.scrollTop = TextArea.scrollHeight;
        }
    </script>
</head>
<body bgcolor="#61C9AB" onload="deixarEmbaixo()">
    <center>
        <h3>Conversa</h3>
            <textarea name="conversa" id="conversa" rows="7" cols="60" disabled>
 	        <?php
            //Aqui iremos ler o conteúdo do Arquivo criado
            if (file_exists("conversa.txt")){
                $arquivo = fopen("conversa.txt", "r");
                $mensagem = fread($arquivo, filesize("conversa.txt"));
                fclose($arquivo);

                echo $mensagem;
            }
            ?>
            </textarea>
    </center>
</body>
</html>