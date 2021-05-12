<?php
    class Movie {
      public $Titolo;
      public $Regista;
      public $minuti;
      public $pagamento = 0;

      public function setprezzo($minuti) 
        {
            if($minuti > 120) {
                $this -> pagamento= " "."è una serie prezzo:". 50;
            }
            else {
                $this -> pagamento= " Il film è compreso nell'abbonamento";
            }

        }
      public function getprezzo() 
        {  
            return $this ->pagamento;
        }

    }
//se il film supera 120 minuti allora è una serie e costerà 50 euro
    $filmprimo = new Movie();
    $filmprimo->Titolo = "Spartacus";
    $filmprimo ->setprezzo(200);

    $filmsecondo = new Movie();
    $filmsecondo->Titolo = "007";
    $filmsecondo ->setprezzo(115);

    echo "<h2>$filmprimo->Titolo:</h2>" ;
    echo $filmprimo -> getprezzo()."Euro";
    echo "<br>";
    echo "<h2>$filmsecondo->Titolo</h2>";
    echo $filmsecondo -> getprezzo();



