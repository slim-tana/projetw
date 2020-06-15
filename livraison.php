<?PHP
class livraison
{
    private $code ;
    private $prix ;
    private $num;
    private $id_livraison;
    function __construct($code,$prix,$num,$id_livraison)
    {
        $this->code=$code;
        $this->prix=$prix;
        $this->num=$num;
        $this->id_livraison=$id_livraison;
    }
    function getCode()
    {
        return $this->code;
    }
    function getPrix()
    {
        return $this->prix ;
    }
    function getNum()
    {
        return  $this->num;
    }
    function getId_livraison()
    {
        return $this->id_livraison;
    }
    function setCode($code)
    {
        $this->code=$code;
    }
    function setPrix($prix)
    {
        $this->prix=$prix;
    }
    function setNum($num)
    {
        $this->num=$num;
    }
    function setId_livraison($id_livraison)
    {
        $this->id_livraison=$id_livraison ;
    }
}
?>