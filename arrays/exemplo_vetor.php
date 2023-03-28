<html>
   <body>
     
     <p>Exemplo declaração de variável sem array</p>

      <?php
         
         $nome1 = "Maria";
         $nome2 = "João";
         $nome3 = "Pedro";
         $nome4 = "Paulo";
         $nome5 = "Lucas";

         echo("$nome1<br/>$nome2<br/>$nome3 <br/>$nome4<br/>$nome5<br/>");

      ?>
      <p>Exemplo declaração de variável com array</p>
     
      <?php
         
         $nome = array("Maria","João","Pedro","Paulo","Lucas");

         echo "Os nomes no array</br>";

         foreach ($nome as $nomes) {
         	
         	echo "<br/>".$nomes;
         }

         echo "<br />";

         print_r($nome);

         array();

         $vetor = array("Maria","José","Pedro");

          echo "<br />";

         print_r($vetor);

         $vetor[0] = "Etec";
         $vetor[1] = "Irmã";
         $vetor[2] = "Agostina";

         echo "<br />";

         print_r($vetor);

         echo "<br />";

         echo $vetor[0] . "<br />";
         echo $vetor[1] . "<br />";
         echo $vetor[2] . "<br />";

         $vetor[] = "Maria";
         $vetor[] = "José";
         $vetor[] = "Pedro";

         echo "<br />";

         print_r($vetor);

         echo "<br />";

       
      ?>

   </body>
</html>