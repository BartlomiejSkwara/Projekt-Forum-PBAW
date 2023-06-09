{extends file="templates\main.tpl"}
{assign var="title" value="Categories"}
{block name = "main"}
    
  


<div class="mx-auto  mb-5 text-center flex-grow-1">
  <img class="d-block  mx-auto mb-4" src="{url}/resources/yuumsideview.svg" alt="" width="72" height="57">
  <h1 class="display-5 fw-bold text-body-emphasis">Forum</h1>
  <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 w-100">
          
        Witamy na forum! To miejsce, gdzie możesz dyskutować z różnymi osobami na tematy, które Was interesują.<br> 
        Jednak pamiętaj, że ważne jest zachowanie kultury i nieprzesadzanie z nieuprzejmościami. <br>
        Bądź uprzejmy i szanuj innych uczestników rozmów. :><br>
      </p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      {*<button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>*}
    </div>
  </div>
</div>
        
<div class= "text-center mb-auto flex-shrink-1  mx-auto dark ">
    {include file="components/messages.tpl"}  
</div>    
        
    
            
            

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="delete category modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header ">
          <h5 class="modal-title">Czy na pewno chcesz <b class = "text-danger">usunąć</b> kategorię ?  </b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>Zrobienie tego będzie skutkowało <b class = "text-danger">skasowaniem wszystkich </b> wątków zawartych w kategorii 
              <b class="modal-category-name-title text-primary"></b> 
               i może okazać się nieodwracalne. 
              <b class = "text-danger">Jesteś pewien </b> że chcesz to zrobić ?</p>
      </div>
      <div class="modal-footer justify-content-center">
        <a type="button" class="modal-button-accept btn btn-danger" href="" >Tak</a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Nie</button>
      </div>
    </div>
  </div>
</div>
            
            



        {*Display all of the categories taken from db*}
        <div class= "text-center flex-grow-1 mx-auto  dark ">
            <div class ="d-flex flex-wrap justify-content-center container  p-0">
            

                
            {foreach $categories as $cat}
  
                <div class="card border-custom bg-dark-subtle m-2 " style="width: 18rem; height: 18rem;">
                    
                  {*Removing and adding categories !!! admin only !!! *}
                    {if \core\RoleUtils::inRole("admin")}
                        <a href="{url action='editCategoryView'}/{$cat["idcategory"]}">
                            <span class="position-absolute top-0 start-85 translate-middle p-2 bg-primary rounded-circle border-primary-subtle btn">
                                <img class=" mx-auto " " src="{url}/resources/icons/wrench.svg" alt="" width="16" height="16" style="fill: red;"> 
                                <span class="visually-hidden">Edit Category</span>
                            </span>
                        </a>
                                
                        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger rounded-circle border-danger-subtle btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-url="{url action='deleteCategory'}" data-bs-id="{$cat["idcategory"]}"> 
                          <img class=" mx-auto " " src="{url}/resources/icons/trash.svg" alt="" width="16" height="16" style="fill: red;"> 
                          <span class="visually-hidden">Remove Category</span>
                        </span>
                    {/if}
                    
                    <a href = "{url action='category'}/{$cat["idcategory"]}" class ="text-decoration-none text-reset" >
                        <img src="{url}/resources/yuumbread.svg" class="card-img-top border-bottom" alt="...">

                        <div class="card-body bg-dark-subtle">
                          <h5 class="card-title ">{$cat["name"]}</h5>
                          <p class="card-text ">{$cat["description"]}</p>
                        </div>
                    </a>

                </div>

            {/foreach}
            
            {if \core\RoleUtils::inRole("admin")}
                <a href = "{url action='addCategoryView'}"   > 
                    <div class="card bg-dark-subtle m-2 border-dots border-custom" style="width: 18rem; height: 18rem;"> 
                        <img class="w-50 m-auto custom-icon"  src="{url}/resources/icons/plus.svg" alt=""  >              
                    </div>
                </a>
            {/if}
            
            
           
            </div>
 
            
        </div>
        
        
    

<script src="{$conf->app_url}/js/myJS/customDeleteModal.js"></script>
{/block}
