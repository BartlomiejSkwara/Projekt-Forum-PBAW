<nav class="navbar navbar-expand-lg fixed-top bg-dark-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="{url}/resources/yuumbread.svg" width="78" height="44" class="me-3" alt="">
        Forum
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        
    {*            
        \core\RoleUtils::inRole("admin");*}
      
      <ul class="navbar-nav ms-auto mb-2 mb-md-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kategorie</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">#</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#">#</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">#</a>
        </li>
        {if \core\RoleUtils::inRole("user")}
            <li class="nav-item">
                <a class="nav-link " href="">{\core\SessionUtils::load("username",true)}</a>
            </li>
            
            <li class="nav-item">
                <a type="button" class="btn btn-outline-danger" href = "{url action='logout'}" >Wyloguj</a>
            </li>
        {else}
            <li class="nav-item {*me-1*}">
               <a type="button" class="btn btn-outline-primary" href = "{url action='login'}">Zaloguj</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href=""></a>
            </li>
            
            <li class="nav-item">
                <button type="button" class="btn btn-success">Zarejestruj</button>
            </li>
            
            
        {/if}
        
        

    </ul>
        

       
    </div>
  </div>
</nav>