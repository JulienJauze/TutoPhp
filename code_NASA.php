<!DOCTRINE html>

<html>
    <body>
        
    <?php
    
    if(isset($_POST['mot_de_passe']) && ($_POST['mot_de_passe']) == "kangourou")
    {
    ?>
        <h3>Bienvenue sur le site de la Nasa</h3>
        <p>Voici les mots de passe</p>
        <ul>
            <li>5456-456456-45666</li>
            <li>5459-456456-45666</li>
            <li>5486-456456-45666</li>
            <li>5496-456456-45666</li>
        </ul>
    <?php
    }
    else
    {
        echo "<p>mot de passe incorrect</p>";
    }
    ?>

    </body>
  
</html>




