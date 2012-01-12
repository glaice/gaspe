<?php

include "../sessao.php";

cabecalho('Celebração em Paiol');

?>
 
<center>
<div style="width: 80%">

    <h2>Celebração em Paiol, agosto de 2009</h2>
</div>

<!Criando a tabela de fotos:>

    <div class="content">
        <div id="galleria">

            <img src="http://farm5.static.flickr.com/4149/5097812648_9497f351ff.jpg">
            <img src="http://farm6.static.flickr.com/5012/5425614051_503861ed8a.jpg">
            <img src="http://farm5.static.flickr.com/4111/5097159789_803379a1c8.jpg">
            <img src="http://farm5.static.flickr.com/4124/5097811232_6468a9b0bf.jpg">
            <img src="http://farm5.static.flickr.com/4125/5097214457_3144b74f11.jpg">
            <img src="http://farm5.static.flickr.com/4103/5097154775_622b360129.jpg">
            <img src="http://farm5.static.flickr.com/4125/5097097307_104942c990.jpg">
            <img src="http://farm5.static.flickr.com/4106/5097090495_beee32ef24.jpg">
            <img src="http://farm5.static.flickr.com/4149/5097830008_c614fdfb9f.jpg">
        </div>
        
    </div>
    <script>
    
    // Load the classic theme
    Galleria.loadTheme('/paradaprafotos/galleria.classic.js');

    // Initialize Galleria
    $('#galleria').galleria();
    
    </script>


<?php

include "../rodape.php";

?>
