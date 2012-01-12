<?php    

function menu(){  
    global $logado;
    global $usuarioLogado;
    global $admin;
 ?>
        <div id="area-menu-superior">
                <div id="menu">
                    <ul id="menu-ul" class="menu-ul"> 
                        <li class="menu-cinza"><a href="/Paginas_Fixas/contatos.php">Fale Conosco</a></li>
                        <li class="menu-cinza"><a href="/Paginas_Fixas/projetos.php ">Projetos</a></li>
                        <li class="menu-vermelho menu">
                            <a class="submenu">Fotos</a>
                            <ul>
                                <li><a href="/Paginas_Fotos/fotosRetiros.php">Retiros</a></li>
                                <li><a href="/Paginas_Fotos/fotosOutrosEventos.php">Outros eventos</a></li>
                            </ul></li>
                        <li class="menu-vermelho menu">
                            <a class="submenu">O Grupo</a>
                            <ul>
                                <li><a href="/Paginas_Fixas/historia.php">História</a></li>
                                <li><a href="/Paginas_Fixas/membros.php">Membros</a></li>
                            </ul></li>
                        <li class="menu-cinza"><a href="/Paginas_Fixas/mensagem_paroco.php">Mensagem do Pároco</a></li>
                        <li class="menu-cinza"><a href="/index.php ">Notícias</a></li>

                    </ul>
                </div> <!--/ Fechando menu /-->
            </div> <!--/ Fechando area-menu-superior /-->
            <div id ="area-lateral">
                <div id="area-menu-lateral" >
                <ul>
                    <li><a href="/Paginas_Fixas/paroquia.php">Paróquia</a></li>
<!--                    <li><a href="comunidade.php">Comunidade</a></li>-->
                    <li><a href="/Paginas_Fixas/agenda.php">Agenda 2011</a></li>
                </ul>
                <a href="/Paginas_Fixas/mensagem.php"style="line-height:1.5em; padding:28px 10px; font-weight:bold;">Reuniões e ensaios nos sábados as 17:00 horas, na Matriz. Venha nos visitar!!!</a>
                </div> <!--/ Fechando area-menu\-lateral /-->
                <div id="area-menu-lateral-login" >
                <ul>

<?php

 if($logado){    ?>

    <li class="menu-cinza"><a style="padding:18px 10px;font-weight: bold;"> Olá, <?=$usuarioLogado?>!</a></li>

<?  if($admin){    ?>

    <li class="menu-cinza"><a name = "login" href="/Paginas_Admin/cadastrarUsuario.php">Cadastrar Usuário</a></li> 
    <li class="menu-cinza"><a name = "login" href="/#login">Cadastrar Restirantes</a></li>
    <li class="menu-cinza"><a name = "login" href="/#login">Visualizar Restirantes</a></li>

<?     }//fechando if do admin   ?>

    <li class="menu-cinza"><a href="/desloga.php">Sair</a></li>
    </ul>

<?   } else {  ?>
    <li class="menu-cinza"><a name = "login" href="/#login">Entrar</a></li> 
    </ul>

<?php  include "login.php";  } ?>

    </div>
</div>
            
<script type="text/javascript"><!--//--><![CDATA[//><!--
startList = function() {
if (document.all&&document.getElementById) {
cssdropdownRoot = document.getElementById("menu-ul");
for (x=0; x<cssdropdownRoot.childNodes.length; x++) {
node = cssdropdownRoot.childNodes[x];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
}
node.onmouseout=function() {
this.className=this.className.replace(" over", "");
}
}
}
}
}


startList();

//--><!]]></script>
<? } ?>
