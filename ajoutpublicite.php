<?PHP
include "../entities/publicite.php";
include "../core/publiciteC.php";

if (isset($_POST['id'])and isset($_POST['type'])  and isset($_POST['nom']) and isset($_POST['description'])  and isset($_POST['prix_sans_remise']) and isset($_POST['prix_avec_remise']) and isset($_POST['fichier'])){
$publicite1=new publicite$_POST['id'],$_POST['type'],$_POST['nom'],$_POST['description'],$_POST['prix_sans_remise'],$_POST['prix_avec_remise'],$_POST['fichier']);
//Partie2
/*
var_dump($catalogue1);
}
*/
//Partie3


//$id=strlen($_POST['id']);
//$nom=strlen($_POST['nom']);

//if($id > 0 && $nom > 0  ){
$publicite1C=new publiciteC();
$publicite1C->ajouterpublicite($publicite1);
header('Location: pub.php');

//else {
//	echo"<script> alert(\"3ib\") </script>";
//	header('Location: index-2.php');

//}	
}else{
	echo "vĂ©rifier les champs";
}
//*/

?>