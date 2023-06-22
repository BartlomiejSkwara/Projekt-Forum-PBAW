{extends file = "templates/main.tpl"}
{block name = "main"}
{include file="components/messages.tpl"}










<div class=" w-100 text-center ">
    <h1 class ="mx-auto">
        Przeglądasz właśnie kategorię<br>
        <b class="text-primary">{$title}</b>
        <br>
        
        <small class="h5 w-50">{$categoryData["description"]}</small>
    </h1>
 </div>
 
<div class = "d-flex flex-row-reverse">
          
    <button class="btn btn-primary border-primary-subtle  rounded-pill " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
        <img class=" mx-auto " " src="{url}/resources/icons/filter.svg" alt="" width="16" height="16"> 
        <span class="visually-hidden">Filtrowanie</span>
    </button>
    {if \core\RoleUtils::inRole("user")}
    <button class="btn btn-primary border-primary-subtle  rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#adding" aria-expanded="false" aria-controls="collapseFilter">
        <img class=" mx-auto " " src="{url}/resources/icons/plus.svg" alt="" width="16" height="16"> 
        <span class="visually-hidden">Filtrowanie</span>
    </button>
{*        <a class="btn btn-primary border-primary-subtle  rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false">
            <span class="btn btn-primary border-primary-subtle  rounded-pill">
                <img class=" mx-auto " " src="{url}/resources/icons/plus.svg" alt="" width="16" height="16" style="fill: red;"> 
                <span class="visually-hidden">Dodaj kategorię</span>
            </span>
        </a>*}
    {/if}
    

</div>   

    

    
 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header ">
          <h5 class="modal-title">Czy na pewno chcesz <b class = "text-danger">usunąć</b> wątek ?  </b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>Zrobienie tego będzie skutkowało <b class = "text-danger">skasowaniem wszystkich </b> wiadomości zawartych w wątku
              <b class="modal-category-name-title text-primary"></b> 
               i jest nieodwracalne. 
              <b class = "text-danger">Jesteś pewien </b> że chcesz to zrobić ?</p>
      </div>
      <div class="modal-footer justify-content-center">
        <a type="button" class="modal-button-accept btn btn-danger" href="" >Tak</a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Nie</button>
      </div>
    </div>
  </div>
</div>
    
    


<div class="collapse" id="adding">
    <div class="text-center card card-body ju" >

    123
    </div>
</div>


  <div class="collapse" id="collapseFilter">
    <div class="text-center card card-body ju" >
        
        <form id="filter-form" onsubmit="ajaxPostForm('filter-form','{$conf->action_root}categoryFilterThreadList/{$categoryData["idCategory"]}','threadlist'); return false;">
           <label for="sortBy" class = " mb-2"><h5>Sortuj Według</h5></label>
            <select name="sortBy" id="sortBy" class="form-select w-50 mx-auto " aria-label="Typ sortowania">
                <option value="update_date" checked >Ostatnia aktywność</option>
                <option value="creation_date" >Data powstania</option>
                <option value="message_count" >Ilość Wiadomości</option>
                <option value="topic" >Alfabetycznie</option>

            </select>


            <label for="sortDirection" class = "mb-2 mt-3"><h5>Typ Sortowania</h5></label>
            <br>
            <div id="sortDirection" class="btn-group" role="group" aria-label="Basic radio toggle button group">
                
                <input type="radio" class="btn-check " name="sortDirection" id="btnradio2MAL" autocomplete="off"  checked value="DESC">
                <label class="btn btn-outline-primary" for="btnradio2MAL">Malejąco</label>
                
                <input type="radio" class="btn-check " name="sortDirection" id="btnradio1ROS" autocomplete="off"  value="ASC">
                <label class="btn btn-outline-primary" for="btnradio1ROS">Rosnąco</label>


            </div>
            <br>
            <label for="filter" class = "mb-2 mt-3 "><h5>Filtr nazwy</h5></label>
            <input type="text" class="form-control w-50 mx-auto" name='filter' maxlength="45" id="filter" placeholder="Filtr">
           
            <button class="mt-3 btn btn-lg btn-primary" type="submit">Szukaj</button>
        </form>
        
    </div>
  </div>






<div id="threadlist" class="list-group list-group-flush border-bottom border-top mt-2 w-90 mx-auto">


{include file="components/threadlist.tpl"}
{include file="components/paginationCategory.tpl"}


</div>








<script src="{$conf->app_url}/js/myJS/customDeleteModal.js"></script>
<script src="{$conf->app_url}/js/myJS/functions.js"></script>
{/block}


