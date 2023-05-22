{extends file="templates\main.tpl"}
{assign var="title" value="Categories"}
{block name = "main"}
    
  
    <div class = "d-flex pt-5 mt-5 mx-auto  flex-column">
        
          <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="{url}/resources/yuumsideview.svg" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae diam aliquet, convallis nunc id, tincidunt urna. 
                    Duis tempor justo nisl, sed feugiat massa suscipit at. Etiam non placerat nulla. Aliquam euismod odio vitae est imperdiet facilisis. 
                    Proin sollicitudin metus in neque semper, et consequat ipsum consequat. Ut nec pellentesque leo. Quisque aliquet turpis quis metus pretium venenatis. 
                    Aliquam cursus justo sapien, vitae laoreet augue tincidunt quis. Vivamus massa est, accumsan in ipsum sit amet, finibus elementum justo. 
                    Nam erat tellus, commodo at justo eget, molestie ultrices erat. Sed quis ultrices velit. Cras tempor massa volutpat dapibus pretium. Ut id felis ac nisl maximus rhoncus.
                    Vivamus nulla erat, rhoncus vitae nunc elementum, elementum rhoncus odio. Etiam quis felis risus. Nulla ultrices porttitor rhoncus.
                </p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
              </div>
            </div>
        </div>
        
        
        
        
        
        {*Display all of the categories taken from db*}
        <div class= "text-center mx-auto mt-auto dark ">
            <div class ="d-flex flex-wrap justify-content-center container">
            {for $i = 0 to 10}
                    
               
                <div class="card bg-dark-subtle m-2 " style="width: 18rem;">
                    
                  {*Removing and adding categories !!! admin only !!! *}
                    {if \core\RoleUtils::inRole("admin")}
                        <span class="position-absolute top-0 start-85 translate-middle p-2 bg-primary rounded-circle ">
                            <img class=" mx-auto " " src="{url}/resources/icons/wrench.svg" alt="" width="16" height="16" style="fill: red;"> 
                            <span class="visually-hidden">Edit Category</span>
                        </span>
                        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger  rounded-circle">
                            <img class=" mx-auto " " src="{url}/resources/icons/trash.svg" alt="" width="16" height="16" style="fill: red;"> 
                          <span class="visually-hidden">Remove Category</span>
                        </span>
                    {/if}
                    
                    <img src="{url}/resources/yuumbread.svg" class="card-img-top border-bottom" alt="...">
                    
                    <div class="card-body bg-dark-subtle">
                      <h5 class="card-title ">Kategoria</h5>
                      <p class="card-text ">Dana kategoria jest poświęcona bla bla bla.</p>
                      {*<a href="#" class="btn btn-primary stretched-link visually-hidden-focusable"></a>*}
                    </div>
                    {*<ul class="list-group list-group-flush ">
                      <li class="list-group-item bg-dark-subtle">An item</li>
                      <li class="list-group-item bg-dark-subtle">A second item</li>
                      <li class="list-group-item bg-dark-subtle">A third item</li>
                    </ul>
                    <div class="card-body ">
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>*}
                </div>

            {/for}
            </div>
 
            
        </div>
        
        
    </div>


{/block}
