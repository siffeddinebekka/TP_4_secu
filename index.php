<?php
    require_once("modele.class.php");
    $unModele = new Modele ("localhost:8890","tp4_user","root","root");

?>

<!DOCTYPE html>
<head>
    <title>Brute Force</title>
</head>
<body>
    <center>
        <h1>Connexion à un site sécurisé</h1>
        <?php
            require_once("vue_connexion.php");
            if(isset($_POST["Connexion"]))
            {
                $donnees = array("email"=>$_POST["email"]);
                $unModele->setTable("user");
                $unUser=$unModele->selectWhere("*",$donnees);
                if(! $unUser)
                {
                    echo "Verifier les identifiants";
                }

                else if($unUser['mdp']==$_POST['mdp'])
                {
                    echo "</br> Bienvenu au site web:" .$unUser['nom'];

                    // on annule le nombre de tentatives
                    $where=array("iduser"=>$unUser['iduser']);
                    $tab=array('nbTentatives'=>0);
                    $unModele->update($tab,$where);
                }
                else 
                {
                    //on increment le nb tentatives
                    $where=array("iduser"=>$unUser['iduser']);
                    $tab=array('nbTentatives'=>$unUser['nbTentatives']+1);
                    $unModele->update($tab,$where);

                    if($unUser['nbTentatives']+ 1 >5)
                    {
                        //mise en attente


                        // remise à zero du nombre de tentatives
                        $where=array("iduser"=>$unUser['iduser']);
                        $tab=array('nbTentatives'=>0);
                        $unModele->update($tab,$where);
                    }


                    echo "</br> Bienvenu au site web:" .$unUser['nom'];
                }
            }
        ?>
    </center>
</body>
</html>