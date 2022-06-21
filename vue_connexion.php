<!-- <script type="text/javascript">
	function checkMdp(mdp) {
		var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!&])[A-Za-z\d@$!&]{8,15}$/;
		return re.test(mdp);
	}
	function traiterMdp() {
		var mdp = document.getElementById("mdp").value;
		if (!checkMdp(mdp)) {
			alert("Le mot de passe ne vérifie pas la stratégie de mot de passe !");
		}
		if (mdp.length == 0) {
			alert("Veuillez saisir un mot de passe !");
		} else if (mdp.length < 8) {
			alert("Votre mot de passe est trop court !");
		} else if (mdp.length > 15) {
			alert("Votre mot de passe est trop long !");
		}
	}
</script> -->

<form method="post" action="">
	<table border="0">
		<tr>
			<td>Email : </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Mot de passe : </td>
			<td><input type="password" name="mdp" id="mdp" onblur="traiterMdp()"></td>
		</tr>
		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"></td>
			<td><input type="submit" name="Connexion" value="Connexion"></td>
		</tr>
	</table>
</form>
