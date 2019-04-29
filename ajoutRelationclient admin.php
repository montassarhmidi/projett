<?PHP
include "../entities/relationclient.php";
include "../core/relationclientC.php";

if (isset($_POST['Nom']) and isset($_POST['Prenom'])and isset($_POST['Email']) and isset($_POST['Adresse']) and isset($_POST['Gouvernorat']) and isset($_POST['Ville']) and isset($_POST['CodePostal']) and isset($_POST['Telephone']) and isset($_POST['Password']))
{
$Relationclient1C=new Relationclient(($_POST['Nom']),($_POST['Prenom']),($_POST['Type']),($_POST['Email']),($_POST['Adresse']),($_POST['Gouvernorat']),($_POST['Ville']),($_POST['CodePostal']) ,($_POST['Telephone']) ,($_POST['Password']));
var_dump($Relationclient1C);
$RelationclientC=new RelationclientC();
$RelationclientC->ajouterRelationclient($Relationclient1C);
header('Location: ../back/relationclient.php');
	}


else{
	echo "vérifier les champs";
}


?>