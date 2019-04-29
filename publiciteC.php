<?PHP
include "config.php";
class publiciteC {
/*function afficherpublicite ($publicite){
		echo "id: ".$publicite->getid()."<br>";
		echo "nom: ".$publicite->getnom()."<br>";
		echo "prix_sans_remise: ".$publicite->getprix_sans_remise()."<br>";
		echo "prix_avec_remise: ".$publicite->getprix_avec_remise()."<br>";
		echo "fichier: ".$publicite->getfichier()."<br>";
	}*/
	function ajouterpublicite($publicite){
		$sql="insert into publicite (id,type,nom,description,prix_sans_remise,prix_avec_remise,fichier) values (:id,:type,:nom, :description, :prix_sans_remise, :prix_avec_remise,:fichier)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$publicite->getid();
        $type=$publicite->gettype();
        $nom=$publicite->getNom();
        $description=$publicite->getDescription();
         $prix_sans_remise=$publicite->getprix_sans_remise();
          $prix_avec_remise=$publicite->getprix_avec_remise();
		$fichier=$publicite->getfichier();
		$req->bindValue(':id',$id);
		$req->bindValue(':type',$type);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix_sans_remise',$prix_sans_remise);
		$req->bindValue(':prix_avec_remise',$prix_avec_remise);
		$req->bindValue(':fichier',$fichier);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		
	function afficherprods(){
		//$sql="SElECT * From catalogue e inner join formationphp.catalogue a on e.id= a.id";
		$sql="SElECT * From publicite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherpublicites(){
		//$sql="SElECT * From catalogue e inner join formationphp.catalogue a on e.id= a.id";
		$sql="SElECT * From publicite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpublicite($id){
		$sql="DELETE FROM publicite where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpublicite($publicite,$id){
		$sql="UPDATE publicite SET id=:idn, type=:type, nom=:nom, description=:description,prix_sans_remise=:prix_sans_remise,prix_avec_remise=:prix_avec_remise,fichier=:fichier WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idn=$publicite->getid();
		$type=$publicite->gettype();
        $nom=$publicite->getnom();
        $description=$publicite->getdescription();
        $prix_sans_remise=$publicite->getprix_sans_remise();
        $prix_avec_remise=$publicite->getprix_avec_remise();
		$fichier=$publicite->getfichier();
		$datas = array(':idn'=>$idn, ':id'=>$id, ':type'=>$type, ':nom'=>$nom, ':description'=>$description, ':prix_sans_remise'=>$prix_sans_remise, ':prix_avec_remise'=>$prix_avec_remise,':fichier'=>$fichier);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':type',$type);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix_sans_remise',$prix_sans_remise);
		$req->bindValue(':prix_avec_remise',$prix_avec_remise);
		$req->bindValue(':fichier',$fichier);			
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpublicite($id){
		$sql="SELECT * from publicite where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function tribytype($type){
		$sql="SELECT * from publicite where type='$type'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListepublicite($quantite){
		$sql="SELECT * from publicite where quantite=$quantite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function recherchepublicite($recherche){
		
		$sql="SELECT * FROM publicite WHERE nom LIKE '%".$recherche."%' ORDER BY Nom ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	
}

	function vuesnumber($vues,$id){
		$sql="UPDATE publicite SET vues=:vues WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        


		$datas = array(':id'=>$id, ':vues'=>$vues );
		$req->bindValue(':id',$id);
		$req->bindValue(':vues',$vues);
		

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function tripublicite($recherche){
		
		$sql="SELECT * FROM publicite WHERE Type='$recherche'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	
}

function afficherpublicitestrier()
	{
		$sql="select * from publicite order by prix_sans_remise";
		$db=config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}


}




?>