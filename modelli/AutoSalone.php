  <?php
      class AutoSalone {

      private $nome = null;
      private $autoEsposte = array();

      public function __construct($nome){
          $this->nome = $nome;
      }

      public function getNome() {
		      return $this->nome;
	    }

	    public function setNome($nome){
		      $this->nome = $nome;
	    }

      public function aggiungiAuto($auto) {
          $this->autoEsposte[] = $auto;
      }

      public function rimuoviAutoVenduta($auto){
          // cerca auto
          $trovato = false;
          for($i=0; $i<count($this->autoEsposte) && !$trovato; $i++){
              if($auto === $this->autoEsposte[$i]){
                  $trovato = true;
                  break;
              }
          }

          if($trovato) unset($this->autoEsposte[$i]);
      }

      public function elencaAutoEsposte(){
        $elencoAuto = "<tr>";
        for ($i=0; $i<count($this->autoEsposte); $i++) {
            $elencoAuto .= '<td>' . $this->autoEsposte[$i]->get_marca() . '</td>';
            $elencoAuto .= '<td>' . $this->autoEsposte[$i]->get_motore() . '</td>';
            $elencoAuto .= '<td>' . $this->autoEsposte[$i]->get_potenza() . '</td>';
            if($this->autoEsposte[$i]->get_targa() != null)
                $elencoAuto .= '<td>' .$this->autoEsposte[$i]->get_targa() . '</td>';

            $elencoAuto .= '</tr>';
        }

		    require 'viste/vistaSalone.php';
	    }

    }


  ?>
