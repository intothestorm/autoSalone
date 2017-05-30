<?php
  require_once 'conf/config.php';

  $salone = new AutoSalone('Aurora');

  // creo qualche auto
  $a[] = new Auto('Fiat', 'benzina', '500');
  $a[] = new Auto('Toyota', 'diesel', '1600');
  $a[] = new Auto('Audi', 'benzina', '2200');
  $a[] = new Auto('Bmw', 'diesel', '3000');

  for($i=0; $i<count($a);$i++)
      $salone->aggiungiAuto($a[$i]);

  $titolo = "AUTOSALONE" . $salone->getNome();
  $contenuto = $salone->elencaAutoEsposte(); // tabella

  require_once 'viste/template.php';

?>
