<?php
    class Conexao{
        public static function getConexao(){            
            $conexao = new PDO("mysql:host=localhost;dbname=bdprojetofinal", "root", "");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conexao;
        }
    }
?>