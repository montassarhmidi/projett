<?PHP
class publicite{
	private $id;
    private $type;
	private $nom;
    private $description;
    private $prix_sans_remise;
    private $prix_avec_remise;
    private $fichier;

    function __construct($id,$type,$nom,$description,$prix_sans_remise,$prix_avec_remise,$fichier){
		$this->id=$id;
        $this->type=$type;
		$this->nom=$nom;
        $this->description=$description;
        $this->prix_sans_remise=$prix_sans_remise;
        $this->prix_avec_remise=$prix_avec_remise;
        $this->fichier=$fichier;
    }
        function getid(){
            return $this->id;
        }
        function gettype(){
            return $this->type;
        }
        function getnom(){
            return $this->nom;
        }
         function getdescription(){
            return $this->description;
        }
         function getprix_sans_remise(){
            return $this->prix_sans_remise;
        }
         function getprix_avec_remise(){
            return $this->prix_avec_remise;
        }
        function getfichier(){
            return $this->fichier;
        }

         function setid($id){
            $this->id=$id;
        }

         function settype($type){
            $this->type=$type;
        }
        function setnom($nom){
            $this->nom=$nom;
        }
        function setdescription($description){
            $this->description=$description;
        }
        function setprix_sans_remise($prix_sans_remise){
            $this->prix_sans_remise=$prix_sans_remise;
        }
        function setprix_avec_remise($prix_avec_remise){
            $this->prix_avec_remise=$prix_avec_remise;
        }

        function setfichier($fichier){
            $this->fichier;
        }
    }
    ?>