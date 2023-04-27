<?php
    include_once 'vue/vue_header.php';   
?>
  <link rel="stylesheet" href="vue/css/caroussel.css">
  <div class="content">
    <center>
      <div class="card_desc">
          <h2>
            Le Mans : avec «Art-A-Dom», les artistes sont livrés sur un plateau à domicile!
          </h2><br>

          <h4><i>
            Suite aux confinements, un collectif d’artistes s’est réuni pour continuer à promouvoir la culture et à se produire face à un public... virtuel!
          </i></h4>
          <br>
          <h5>
              Le monde de la culture est dans une mauvaise passe à cause de la crise sanitaire.
              Le collectif Art-A-Dom se mobilise pour permettre aux artistes de se produire à la demande.
              Chant, musique mais aussi magie ou bien encore du rire...
              Les artistes viennent chez vous, à domicile ou dans la rue selon votre souhait!
              Une initiative du collectif Art-A-Dom. Concrètement, il est possible de réserver uneprestation à domicile à condition d’habiter dans lepérimètre du Mans (Sarthe)et des communes limitrophes.
              Sinon des prestations en ligne sont possibles (prendre contact directement avec les artistes).
          </h6>
      </div>
<?php

      echo "<div class='slidershow'>";
      echo "<div class='slides'>";
        for($i=1;$i<= count($spectacles) ;$i++){
          if($i==1){
            echo "<input type='radio' name='r' id='r$i' checked>";
          }else{
            echo "<input type='radio' name='r' id='r$i'>";
          }
        }

        $control = 1;
        foreach($spectacles as $spec){
          $intitSpectacle = $spec['intitSpectacle'];
          $photoSpectacle = $spec['photoSpectacle'];
          $pseudoArtiste = $spec['pseudoArtiste'];
          $descSpectacle = $spec['descSpectacle'];

          if($control == 1){
            echo "<div class='slide s1'>";
            $control = 0;
          }else{
            echo "<div class='slide'>";
          }
          echo "  
            <div class='text'>
              <h3>$intitSpectacle</h3>
              <h4>$pseudoArtiste</h4>
              <p>$descSpectacle</p>
            </div>
          <img src='vue/image/imageSpectacle/$photoSpectacle'>
          </div>";
        }

        echo "</div>";
        echo "<div class='navigation'>";
        for($i=1;$i<=count($spectacles);$i++){
          echo "<label for='r$i' class='bar'></label>";
        }

        echo "</div>";
      ?>
    </center>
  </div>

<?php
    include_once 'vue/vue_footer.php';
?>
