<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie {
  public $titolo;
  public $descrizione;

  public function __construct($titolo, $descrizione = null) {
    $this -> titolo = $titolo;
    $this -> descrizione = $descrizione;

    if (!$descrizione) {
      $this -> descrizione  = 'Descrizione non disponibile';
    } else {
      $this -> descrizione = $descrizione;
    }
  }
  public function getString() {
    return 'Titolo: ' . $this -> titolo . ' --> Descrizione: ' . $this -> descrizione;
  }
}

class TestController extends Controller
{
  public function home() {
    $film1 = new Movie ('Fast & Furious', "Brian O'Conner (Paul Walker) è un agente della polizia di Los Angeles (LAPD), infiltrato con lo pseudonimo di Brian Spilner in una banda che opera nel settore delle gare clandestine. Il capo della banda è Dominic Toretto (Vin Diesel), un campione di gare di auto e criminale fuggitivo.");
    $film2 = new Movie ('2Fast & 2Furious', "Brian O'Conner è un ricercato ed ha cominciato una nuova vita da street racer a Miami. Una sera, in seguito alla chiamata di Tej Parker, un organizzatore di corse illegali, Brian partecipa ad una rocambolesca corsa che, alla fine, lo vede vincitore.");
    $film3 = new Movie ('The Fast and the Furious: Tokyo Drift');
    $film4 = new Movie ('Fast & Furious - Solo parti originali');

    $films = [$film1, $film2, $film3, $film4];
    $str = '';

    foreach ($films as $film) {

      $str .= $film -> getString() . "\n";
    }
    dd($str);
  }
}
