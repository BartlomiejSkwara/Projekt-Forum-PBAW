{extends file="templates\main.tpl"}
{assign var="title" value="Categories"}
{block name = "main"}
    
  
    
          
          <div class="px-4 py-5 mx-auto  my-5 text-center">
            <img class="d-block  mx-auto mb-4" src="{url}/resources/yuumsideview.svg" alt="" width="72" height="57">
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
        <div class= "text-center mx-auto mt-5 dark ">
            <div class ="d-flex flex-wrap justify-content-center container">
            

                
            {foreach $categories as $cat}
  
                <div class="card bg-dark-subtle m-2 " style="width: 18rem; height: 18rem;">
                    
                  {*Removing and adding categories !!! admin only !!! *}
                    {if \core\RoleUtils::inRole("admin")}
                        <a href="{url action='editCategory'}/{$cat["idcategory"]}">
                            <span class="position-absolute top-0 start-85 translate-middle p-2 bg-primary rounded-circle border-primary-subtle btn">
                                <img class=" mx-auto " " src="{url}/resources/icons/wrench.svg" alt="" width="16" height="16" style="fill: red;"> 
                                <span class="visually-hidden">Edit Category</span>
                            </span>
                        </a>
                        <a href="{url action='deleteCategory'}/{$cat["idcategory"]}">
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger rounded-circle border-danger-subtle btn">
                              <img class=" mx-auto " " src="{url}/resources/icons/trash.svg" alt="" width="16" height="16" style="fill: red;"> 
                              <span class="visually-hidden">Remove Category</span>
                            </span>
                        </a>
                    {/if}
                    
                    <a href = "{url action='category'}/{$cat["idcategory"]}" class=" stretched-link ">
                     <img src="{url}/resources/yuumbread.svg" class="card-img-top border-bottom" alt="...">
                    </a>
                    <div class="card-body bg-dark-subtle">
                      <h5 class="card-title ">{$cat["name"]}</h5>
                      <p class="card-text ">{$cat["description"]}</p>
                      
                    </div>
                    

                </div>

            {/foreach}
            
            {if \core\RoleUtils::inRole("admin")}
                <a href = "{url action='addCategoryView'}"   > 
                    <div class="card bg-dark-subtle m-2 border-dots" style="width: 18rem; height: 18rem;"> 
                        <img class="w-50 m-auto custom-icon"  src="{url}/resources/icons/plus.svg" alt=""  >              
                    </div>
                </a>
            {/if}
            
            
           
            </div>
 
            
        </div>
        
        
    


{/block}
