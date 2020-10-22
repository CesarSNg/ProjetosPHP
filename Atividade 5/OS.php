<?php
class ordem{
    private $os;
    private $data;
    private $situacao;
    private $solicitante;
    private $area;

    public function setOs($o){
        $this->os = $o;
    }
    public function setData($d){
        $this->data = $d;
    }
    public function setSituacao($s){
        $this->situacao = $s;
    }
    public function setSolicitante($s){
        $this->solicitante = $s;
    }
    public function setArea($a){
        $this->area = $a;
    }

    public function getOs(){
        return $this->os;
    }

    public function getData(){
        return $this->data;
    }
    public function getSituacao(){
        return $this->situacao;
    }
    public function getSolicitante(){
        return $this->solicitante;
    }
    public function getArea(){
        return $this->area;
    }
}
?>

<?php
    $os = new ordem();

    $os->setOs("12");
    $os->setData("12/10/2020");
    $os->setSituacao("em aberto");
    $os->setSolicitante("joao");
    $os->setArea("administrativa");

    echo "os: " . $os->getOs();
    echo "<br />";
    echo "data: " . $os->getData();
    echo "<br />";
    echo "situacao: " . $os->getSituacao();
    echo "<br />";
    echo "solicitante: " . $os->getSolicitante();
    echo "<br />";
    echo "area: " . $os->getArea();
    echo "<br />";
     
?>



<?php

class cliente{
    private $nome;
    private $telefone;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;

    public function setNome($n){
        $this->nome = $n;
    }
    public function setTelefone($t){
        $this->tel = $t;
    }
    public function setEndereco($e){
        $this->endereco = $e;
    }
    public function setBairro($b){
        $this->bairro = $b;
    }
    public function setCidade($c){
        $this->cidade = $c;
    }

    public function setUf($u){
        $this->uf = $u;
    }

    public function setCep($c){
        $this->cep = $c;
    }

    public function getnome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getUf(){
        return $this->uf;
    }

    public function getCep(){
        return $this->cep;
    }
}

?>

<?php

class equipamemto{
    private $local;
    private $justificativa;
    private $dpm;
    private $obs;

    public function setLocal($l){
        $this->local = $l;
    }
    public function setJustificativa($j){
        $this->justificativa = $j;
    }
    public function setdpm($d){
        $this->dpm = $d;
    }
    public function setObs($o){
        $this->obs = $o;
    }

    public function getLocal(){
        return $this->local;
    }

    public function getJustificativa(){
        return $this->justificativa;
    }
    public function getdpm(){
        return $this->dpm;
    }
    public function getObs(){
        return $this->obs;
    }
}
?>

<?php

class servicos{
    private $hora_i_1;
    private $hora_t_1;
    private $atividade_1;
    private $tecnico_1;
    private $tempo_1;

    private $hora_i_2;
    private $hora_t_2;
    private $atividade_2;
    private $tecnico_2;
    private $tempo_2;

    private $hora_i_3;
    private $hora_t_3;
    private $atividade_3;
    private $tecnico_3;
    private $tempo_3;

    public function sethora_i_1($h){
        $this->hora_i_1 = $h;
    }
    public function sethora_t_1($h){
        $this-> = $hora_t_1 = $h;
    }
    public function setatividade_1($a){
        $this-> = $atividade_1 = $a;
    }
    public function settecnico_1($t){
        $this-> = $tecnico_1 = $t;
    }

    public function settempo_1($t){
        $this-> = $tecnico_1 = $t;
    }

    public function sethora_i_2($h){
        $this->hora_i_2 = $h;
    }
    public function sethora_t_2($h){
        $this-> = $hora_t_2 = $h;
    }
    public function setatividade_2($a){
        $this-> = $atividade_2 = $a;
    }
    public function settecnico_2($t){
        $this-> = $tecnico_2 = $t;
    }

    public function settempo_2($t){
        $this-> = $tecnico_2 = $t;
    }

    public function sethora_i_3($h){
        $this->hora_i_3 = $h;
    }
    public function sethora_t_3($h){
        $this-> = $hora_t_3 = $h;
    }
    public function setatividade_3($a){
        $this-> = $atividade_3 = $a;
    }
    public function settecnico_3($t){
        $this-> = $tecnico_3 = $t;
    }

    public function settempo_3($t){
        $this-> = $tecnico_3 = $t;
    }


    public function gethora_i_1(){
        return $this->hora_i_1;
    }

    public function gethora_t_1(){
        return $this->hora_t_1;
    }
    public function getatividade_1(){
        return $this->atividade_1;
    }
    public function gettecnico_1(){
        return $this->tecnico_1;
    }
    public function gettempo_1(){
        return $this->tempo_1;
    }
    public function gethora_i_1(){
        return $this->hora_i_1;
    }

    public function gethora_t_2(){
        return $this->hora_t_2;
    }
    public function getatividade_2(){
        return $this->atividade_2;
    }
    public function gettecnico_2(){
        return $this->tecnico_2;
    }
    public function gettempo_2(){
        return $this->tempo_2;
    }
    public function gethora_t_3(){
        return $this->hora_t_3;
    }
    public function getatividade_3(){
        return $this->atividade_3;
    }
    public function gettecnico_3(){
        return $this->tecnico_3;
    }
    public function gettempo_3(){
        return $this->tempo_3;
    }
}
?>
