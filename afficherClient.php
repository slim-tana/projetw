<?PHP

include 'footer.php' ;
include "../../core/clientC.php";
$clientCvar=new clientC();
$listeClients=$clientCvar->afficherClients();

//var_dump($listeClients->fetchAll());
?>
<!-- Breadcrumbs -->

<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
					</ul>
				</div>

			</div>
		</div>

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></
					</ul>
				</div>

			</div>
		</div>
		<h1>La liste des clients</h1>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>Adresse</td>
<td>Mail</td>
<td>Mot_de_passe</td>
<td>Numero</td>
<td>Supprimer</td>
<td>Modifier</td>
</tr>

<?PHP
foreach($listeClients as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['mot_de_passe']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	<td><form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierClient.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}

?>

</table>
 