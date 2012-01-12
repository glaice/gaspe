<?php

include "../sessao.php";

cabecalho('Fotos da despedida do Pe. Mauricio');

?>


<center>
<div style="width: 80%">

    <h2> Despedida do Pe. Maurício</h2>
</div>

<!Criando a tabela de fotos:>

    <div class="content">
        <div id="galleria">
             
            <img src="http://farm5.static.flickr.com/4112/5091578073_1dd50a9fc1.jpg">
            <img src="http://farm5.static.flickr.com/4145/5091583443_2822dfde6d.jpg">
            <img src="http://farm5.static.flickr.com/4152/5092183000_6fe879d1bd.jpg">
            <img src="http://farm5.static.flickr.com/4111/5091582747_06d1192094.jpg">
            <img src="http://farm5.static.flickr.com/4088/5092179858_e4137d75c5.jpg">
            <img src="http://farm5.static.flickr.com/4088/5092187080_c13faca1f7.jpg">
            <img src="http://farm5.static.flickr.com/4091/5092184176_aaff202254.jpg">
            <img src="http://farm5.static.flickr.com/4089/5092421857_99df317198.jpg">
            <img src="http://farm5.static.flickr.com/4083/5091581957_b73acd0337.jpg">
            <img src="http://farm5.static.flickr.com/4089/5091585201_bd2cb55084.jpg">

            <img src="http://farm5.static.flickr.com/4103/5092421715_a744eeb527.jpg">
            <img src="http://farm5.static.flickr.com/4111/5093019522_7ba894d4a0.jpg">
            <img src="http://farm5.static.flickr.com/4133/5091586889_957f792b0c.jpg">
            <img src="http://farm5.static.flickr.com/4131/5092178920_eeab393684.jpg">
            <img src="http://farm5.static.flickr.com/4112/5092422069_8c68eb6154.jpg">
            <img src="http://farm5.static.flickr.com/4130/5091649873_d04c76aa3e.jpg">
            <img src="http://farm5.static.flickr.com/4152/5092421587_88e6397e6c.jpg">
            <img src="http://farm5.static.flickr.com/4124/5091586753_676c7c855e.jpg">
            <img src="http://farm5.static.flickr.com/4088/5092183266_e47e17b993.jpg">
            <img src="http://farm5.static.flickr.com/4107/5091588041_9725654579.jpg">

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
