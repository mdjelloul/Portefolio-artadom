<html>
<body> 

<?php

$widSpec = $lesSpectacles['idSpectacle'];
$wintitSpec= $lesSpectacles['intitSpectacle'];
$wpseudoArtiste = $lesSpectacles['pseudoArtiste'];
$wlibPublic = $lesSpectacles['libPublic'];
$wtarifSpec = $lesSpectacles['tarifSpectacle'];
$wdescSpec = $lesSpectacles['descSpectacle'];
$wdureeSpec = $lesSpectacles['dureeSpectacle'];
$wphotoSpec= "vue/image/ImageSpectacle/".$lesSpectacles['photoSpectacle']."";
	?>

<?php

echo "<div class='artiste'>";
    
    echo '<div class="row">';

    echo '<img class="imgartiste" src="vue/image/imgArtiste/'.$idSpectacle['photoSpectacle'].'" alt="">';
    echo '<div class="desc"><b>'.$idSpectacle['intitSpectacle'].'</b> </div>';
    echo '<div class="descript"> '.$idSpectacle['descSpectacle'].' </div>';
    echo '</div>';
    echo '<div class="contact">';
    echo '<center>';
    echo '<div class="desc">'.$idSpectacle['idSpectacle'];
    echo "<p> <b> Contact : </b>";
    echo '<div class="desc">'$idSpectacle"['idArtiste']. </p>";
    echo '</center>';

    echo '</div>';

echo "</div>";


?>


</body>

</html>