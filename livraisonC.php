<?PHP 
include "../config.php";
class livraisonC {
    function affichelivraison2($livraison)
    {
        echo "code:   ".$livraison->getcode()."<br>";
        echo "prix:         ".$livraison->getprix()."<br>";
        echo "num:        ".$livraison->getnum()."<br>";
        echo "id_livreur: ".$livraison->getid_livraison()."<br>";
    }
    function ajouterlivraison($livraison)
    {
        $sql="insert into livraison (code,prix,num,id_livreur) values (:code,:prix,:num,:id_livreur)";
        $db= config::getConnexion();
        try{
         $req=$db->prepare($sql);
         $code=$livraison->getCode();
         $prix=$livraison->getPrix();
         $num=$livraison->getNum();
         $id_livreur=$livraison->getId_livraison();
         $req->bindvalue(':code',$code);
         $req->bindvalue(':prix',$prix);
         $req->bindvalue(':num',$num);
         $req->bindvalue(':id_livreur',$id_livreur);
         $req->execute();
        }
        catch(Exception $e)
        {
            echo 'Erreur : '.$e->getMessage();
        }
    }
    function affichelivraison()
    {
        $sql="SELECT * From livraison ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste ;
        }
        catch (Exception $e)
        {
            die('Erreur; '.$e->getMessage());
        }

    }
    function supprimerlivraison($code)
    {
        $sql="DELETE FROM livraison where code= :code";
        $db = config::getConnexion();
        $req =$db->prepare($sql);
        $req->bindvalue(':code',$code);
        try{
            $req->execute() ;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
    function modifierlivraison($livraison,$code)
    {
        $sql="UPDATE livraison SET code=:code,prix=:prix,num=:num,id_livreur=:id_livreur where code=$code";
        $db= config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $code=$livraison->getCode();
            $prix=$livraison->getPrix();
            $num=$livraison->getNum();
            $id_livreur=$livraison->getId_livraison();
            $datas = array(':code'=>$code,':prix'=>$prix,':num'=>$num,':id_livreur'=>$id_livreur);
            $req->bindvalue(":code",$code);
            $req->bindvalue(":prix",$prix);
            $req->bindvalue(":num",$num);
            $req->bindvalue(":id_livreur",$id_livreur);
            $req->execute();

        }
        catch(Exception $e)
        {
            echo "Erreur: ".$e->getMessage();
            echo " les datas : ";
            print_r($datas);
        }
    }
    function recupererlivraison($code){
		$sql="SELECT * From livraison where code=$code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function rechercherlistelivraison($code){
        $sql="SELECT * from livraison where code=$code";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trierlivraison(){
        //$sql="SElECT * From livraison e inner join formationphp.livraison a on e.code= a.code";
        $sql="SElECT * From livraison ORDER BY code";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
}

?>
