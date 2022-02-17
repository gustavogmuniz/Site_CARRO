<?php 

include_once 'conectar.php';


// parte 1 - Atributos

class tbcarros
{
    private $idcarro;
    private $fabricante;
    private $modelo;
    private $ano;
    private $placa;
    private $cor;
    private $comentarios;
    private $conn;

    
    // parte 2 - Get e Set

    public function getIdCarro() {
        return $this->idcarro;
    }

    public function setIdCarro($idcarroA) {
        $this->idcarro= $idcarroA;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function setFabricante($fabricanteA) {
        $this->fabricante= $fabricanteA;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modeloA) {
        $this->modelo= $modeloA;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($anoA) {
        $this->ano= $anoA;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placaA) {
        $this->placa= $placaA;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($corA) {
        $this->cor= $corA;
    }

    public function getComentarios() {
        return $this->comentarios;
    }

    public function setComentarios($comentariosA) {
        $this->comentarios= $comentariosA;
    }

    
    // parte 3 - Métodos

    // Salvar

function salvar()
{
    try
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("insert into tbcarros values (?,?,?,?,?,?,?)");
        @$sql-> bindParam(1, $this->getIdCarro(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getFabricante(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getModelo(), PDO::PARAM_STR);
        @$sql-> bindParam(4, $this->getAno(), PDO::PARAM_STR);
        @$sql-> bindParam(5, $this->getPlaca(), PDO::PARAM_STR);
        @$sql-> bindParam(6, $this->getCor(), PDO::PARAM_STR);
        @$sql-> bindParam(7, $this->getComentarios(), PDO::PARAM_STR);

        if($sql->execute() == 1)
        {
            return "Registro salvo!";
        }
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao salvar o registro! " . $exc->getMessage();
    }
}


// Alterar

function alterar()
{
    try 
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("select * from tbcarros where idCarro = ?");
        @$sql-> bindParam(1, $this->getIdCarro(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao alterar! " . $exc->getMessage();
    }
}

function alterar2()
{
    try
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("update tbcarros set Fabricante = ?, Modelo = ?, Ano = ?, Placa = ?, Cor = ?, Comentarios = ? where idCarro = ?");
        @$sql-> bindParam(1, $this->getFabricante(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getModelo(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getAno(), PDO::PARAM_STR);
        @$sql-> bindParam(4, $this->getPlaca(), PDO::PARAM_STR);
        @$sql-> bindParam(5, $this->getCor(), PDO::PARAM_STR);
        @$sql-> bindParam(6, $this->getComentarios(), PDO::PARAM_STR);
        @$sql-> bindParam(7, $this->getIdCarro(), PDO::PARAM_STR);
        if($sql->execute() == 1)
        {
            return "Registro alterado!";
        }
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao salvar registro! " . $exc->getMessage();
    }
}


// Consultar

function consultar()
{
    try
    {
        $this->conn = new conectar();
        $sql = $this->conn->prepare("select * from tbcarros where idcarro like ?");
        @$sql-> bindParam(1, $this->getIdCarro(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro para executar consulta!" . $exc->getMessage();
    }
}


// Exclusão

function exclusao()
{
    try
    {
        $this-> conn = new conectar();
        $sql = $this->conn->prepare("delete from tbcarros where idcarro = ?");
        @$sql-> bindParam(1, $this->getIdCarro(), PDO::PARAM_STR);
        
        if($sql->execute() == 1)
        {
            return "Excluido!";
        }
        else
        {
            return "Erro ao excluir!";
        }

        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao excluir! " . $exc->getMessage();
    }
}


// Listar


function listar()
{
    try
    {
        
        $this-> conn = new conectar();
        $sql = $this->conn->query("select * from tbcarros order by idcarro");
        $sql-> execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc)
    {
        echo "Erro ao se consultar! " . $exc->getMessage();
    }
}

}







?>