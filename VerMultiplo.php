<?php
class VerMultiplo {
    public $numero;    
    private $div2;
    private $div3;
    private $div4;
    private $div5;
    private $div6;
    private $div7;
    private $div8;
    private $div9;
    public $multiplo;
    public $res;

    public function verDiv2() {
        if ($this->getNumero() % 2 === 0){
            $this->div2 = true;            
        }else{
            $this->div2 = false;
        }
        $this->res = $this->div2;
    }
    
    public function verDiv3() {
        $n = str_split($this->getNumero());
        $x = strlen($this->getNumero());        
        for ($i = 0; $i < $x; $i++){
            $s += $n[$i];
        }
        if ($s % 3 === 0){
            $this->div3 = true;
        }else{
            $this->div3 = false;
        }
        $this->res = $this->div3;
    }
    
    public function verDiv4() {
        $dez = $this->getNumero() % 100;
        if ($dez % 4 === 0){
            $this->div4 = true;
        }else{
            $this->div4 = false;
        }
        $this->res = $this->div4;
    }    
    
    public function verDiv5() {
        if ($this->getNumero() % 5 === 0){
            $this->div5 = true;
        }else{
            $this->div5 = false;
        }
        $this->res = $this->div5;
    }
    
    public function verDiv6() {
        if ($this->getNumero() % 2 === 0 && $this->getNumero() % 3 === 0){
            $this->div6 = true;
        }else{
            $this->div6 = false;
        }
        $this->res = $this->div6;
    }
    
    public function verDiv7() {
        $primeiroResto = $this->getNumero() % 10;
        $dobroResto = $primeiroResto * 2;
        $primeirosNumeros = ($this->getNumero() - $primeiroResto) / 10;
        $ver = $primeirosNumeros - $dobroResto;
        if ($ver % 7 === 0){
            $this->div7 = true;
        }else{
            $this->div7 = false;
        }
        $this->res = $this->div7;
    }
    
    public function verDiv8() {
        $this->cen = $this->getNumero() % 1000;
        if ($this->cen % 8 === 0){
            $this->div8 = true;
        }else{
            $this->div8 = false;
        }
        $this->res = $this->div8;
    }
    
    public function verDiv9() {
        $n = str_split($this->getNumero());
        $x = strlen($this->getNumero());  
        $s = 0;
        for ($i = 0; $i < $x; $i++){
            $s += $n[$i];
        }
        if ($s % 9 === 0){
            $this->div9 = true;
        }else{
            $this->div9 = false;
        }
        $this->res = $this->div9;
    }
    
    public function select1() {
        switch ($this->multiplo){
            case 2:
                $this->verDiv2();
                break;
            case 3:
                $this->verDiv3();
                break;
            case 4:
                $this->verDiv4();
                break;
            case 5:
                $this->verDiv5();
                break;            
        }
    }
    
    public function select2() {
        switch ($this->multiplo){
            case 6:
                $this->verDiv6();
                break;
            case 7:
                $this->verDiv7();
                break;
            case 8:
                $this->verDiv8();
                break;
            case 9:
                $this->verDiv9();
                break;
        }
    }
    
    public function escolher() {
        if ($this->multiplo <= 5){
            $this->select1();
        }else{
            $this->select2();
        }        
        $this->mostrar();
    }
    
    public function mostrar() {
        if($this->res){
            echo "<h2>O número ".$this->numero." é multiplo de ".$this->multiplo."</h2>";
        }else{
            echo "<h2>O número ".$this->numero." <b>NÃO</b> é multiplo de ".$this->multiplo."</h2>";
        }
    }


    // Getter e Setter
    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }
    
    function getMultiplo() {
        return $this->multiplo;
    }
    
    function setMultiplo($multiplo) {
        if($multiplo < 2 || $multiplo > 9){
            echo "<p>O número escolhido não é válido, ";
            echo "escolha número entre 2 e 9</p><hr/>";
        }else{
            $this->multiplo = $multiplo;
        }
    }
        
    // Construtor
    function __construct($numero, $multiplo) {
        $this->numero = $numero;
        $this->setMultiplo($multiplo);
        if ($this->getMultiplo() >= 2 && $this->getMultiplo() <= 9){
            $this->escolher();
        }        
    }
    
}
