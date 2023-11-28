<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('hote.dashboard') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Tableau de bord</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Propriétés</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('propriete.ajouter') }}">Ajouter une propiété</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('propriete.liste') }}">Liste des propriétés</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Mon profil</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('hote.information') }}"> Mes informations </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('hote.cni') }}"> Pièce d'identité </a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('hote.logout') }}">
          <i class="icon-head menu-icon ti-power-off"></i>
          <span class="menu-title">Déconnexion</span>
        </a>
      </li>
    </ul>
  </nav>