<?php
    import 
    class repository{
        
        require 'connection.php';

        public function __construct()
        {
            $this->connect();
        }

        public function insert($name, $email)
        {
            $sql = "insert into cliente (nome, email)
                    values('".$nome."','".$email."')";
            if(mysql_query($sql,$con)){
                $msg = "Gravado com sucesso!";
            }else{
                $msg = "Erro ao gravar!";
            }
            mysql_close($con);
        }


        public function update($name, $email)
        {
            $sql = "insert into cliente (nome, email)
                    values('".$nome."','".$email."')";
           $result = connection.query()

           return $result;
        }


        public function delete($name, $email)
        {
            $sql = "insert into cliente (nome, email)
                    values('".$nome."','".$email."')";
           $result = connection.query()

           return $result;
        }


        public function insert($name, $email)
        {
            $sql = "insert into cliente (nome, email)
                    values('".$nome."','".$email."')";
           $result = connection.query()

           return $result;
        }
    }
?>