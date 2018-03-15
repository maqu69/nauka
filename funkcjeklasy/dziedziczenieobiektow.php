<?php
    class jaszczurki{
        private $imie = "";
        private $pamiec = array();

        function __construct($x){
            $this->imie=$x;

        }

        function getimie() {
            return $this->imie;
        }

        function __tostring() {
            return $this->imie;
        }
        function uciekaj(){
            echo "tup, tup, tup<br>";
        }
        function __set($co,$wartosc){
            $this->pamiec[$co] = $wartosc;
            echo "nauczylem sie co to jest $co";

        }
        function __get($co){
            return $this->pamiec[$co];
        }
        function __invoke(){
            echo 'oto jestem';
        }

    }

    class smoki extends jaszczurki {
        function ziejeogniem(){
            echo 'Roooar!';
        }
        function uciekaj(){
            echo "bam, bam, bam<br>";
        }

    }
    $tmp = new jaszczurki('Marian');
    $abc = new smoki ('Bazyli');
    echo 'ta jaszczurka to '.$tmp->getimie(); // odnosi sie to do private


    echo $tmp;
    echo $abc;
    $abc->ziejeogniem();
    $tmp->uciekaj();
    $abc->uciekaj();

    $tmp->burak = 'warzywo';
    echo $tmp->burak;

    $tmp();

    //https://www.youtube.com/watch?v=aNYig9AmpLI

?>