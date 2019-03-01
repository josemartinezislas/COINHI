<header>
  <nav class="navbar navbar-inverse navbar-fixed-top navbar" >
   <div class="container">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-target="#navbarMainCollapse" data-toggle="collapse">
      <span class="sr-only">Interruptor de Navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="http://www.hidalgo.gob.mx/" class="navbar-brand" title="Ir a la página inicial"><img alt="gob.mx" src="http://cdn.hidalgo.gob.mx/logo_gobhidalgo.svg" /></a>
  </div>
  <div id="navbarMainCollapse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="http://ruts.hidalgo.gob.mx/" target="_blank" class="" title="Trámites">Trámites y Servicios</a></li>
     <li><a href="http://gobierno.hidalgo.gob.mx/" class="" title="Gobierno">Gobierno</a></li>
     <li><a href="http://estado.hidalgo.gob.mx/" title="Estado">Estado</a></li>
     <li><a href="http://www.hidalgo.gob.mx/#buzon" title="Buzón Ciudadano">Buzón Ciudadano</a></li>
          <!--li>
            <form accept-charset="UTF-8" action="/busqueda" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
              <button id="goSearch" type="submit" class="btn" title="buscar" value="buscar" style="background-color: #092432" onmouseleave="this,style.background='#092432'" onmouseover="this.style.background='black'" onfocus="this.style.background='black'" >
                <img alt="Búsqueda" width="20" height="20" class="optical-adjust-search" src="https://framework-gb.cdn.gob.mx/assets/search.svg" />
              </button>
            </form>               
          </li-->
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-inverse navbar-fixed-top navbar zorambar">
    <div class="container">
      <div class="navbar-header">
        <a href="index.html" class="logo"><div class="logosecretaria"></div></a>
        <button type="button" class="navbar-toggle collapsed" data-target="#navbarMainCollapse2" data-toggle="collapse">
          <span class="sr-only">Interruptor de Navegación</span>
          <i class="fas fa-caret-down"></i>
        </button>
        <a href="index.html" class="navbar-brand nombresecretaria"><strong>Corporación Internacional Hidalgo</strong></a>
      </div>
      <div id="navbarMainCollapse2" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
    
          <li class="<?php echo $pagina == 'servicios' ? : ''; ?>"><a href="?p=servicios">ServiciosP</a></li>
          <li class="<?php echo $pagina == 'transparencia' ? : ''; ?>"><a href="?p=transparencia">TransparenciaP</a></li>
          <li class="<?php echo $pagina == 'armonizacionContable' ? : ''; ?>"><a href="?p=armonizacionContable">Armonización ContableP</a></li>
          <li class="<?php echo $pagina == 'inicio' ? : ''; ?>"><a href="?p=inicio">InicioP</a></li>
          
        </ul>
      </div>
    </div>
  </nav> 
 <!--li>
  <ul class="nav navbar-nav">
    <li class="<?php echo $pagina == 'cont_index' ? 'active' : ''; ?>"><a href="?p=cont_index">Inicio</a></li>
  </ul>
</li-->
</header>