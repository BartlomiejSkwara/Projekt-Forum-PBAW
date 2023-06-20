{extends file = "templates/main.tpl"}
{block name = "main"}
{include file="components/messages.tpl"}


<div class=" w-100 text-center ">
    <h1 class ="mx-auto">
        Witamy w kategorii<br>
        <b class="text-primary">{$title}</b>
        <br>
        
        <small class="h5 w-50">{$categoryData["description"]}</small>
    </h1>
 </div>

<button class="btn btn-primary ms-auto border-primary-subtle  rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
    <img class=" mx-auto " " src="{url}/resources/icons/filter.svg" alt="" width="16" height="16"> 
    <span class="visually-hidden">Filtrowanie</span>
</button>


{*<span class=" bg-primary rounded-circle border-primary-subtle btn " style = "width: px; height: 16px">
    <img class="  " " src="{url}/resources/icons/filter.svg" alt="" width="16" height="16" style="fill: red;"> 
</span>*}

<div style="">
  <div class="collapse" id="collapseFilter">
    <div class="text-center card card-body ju" >
        
        <form id="filter-form" onsubmit="ajaxPostForm('filter-form','{$conf->action_root}categoryFilterThreadList/{$categoryData["idCategory"]}','threadlist'); return false;">
{*        <form action="{url action='sus23'}" method="post" >*} 
           <label for="sortBy" class = " mb-2"><h5>Sortuj Według</h5></label>
            <select name="sortBy" id="sortBy" class="form-select w-50 mx-auto " aria-label="Typ sortowania">
                <option value="update_date" {if true }checked {/if}>Ostatnia aktywność</option>
                <option value="creation_date" {if false }checked {/if}>Data powstania</option>
                <option value="message_count" {if false }checked {/if}>Ilość Wiadomości</option>
                <option value="topic" {if false  }selected{/if}>Alfabetycznie</option>

            </select>


            <label for="sortDirection" class = "mb-2 mt-3"><h5>Typ Sortowania</h5></label>
            <br>
            <div id="sortDirection" class="btn-group" role="group" aria-label="Basic radio toggle button group">
                
                <input type="radio" class="btn-check " name="sortDirection" id="btnradio2MAL" autocomplete="off"    {if true}checked{/if} value="DESC">
                <label class="btn btn-outline-primary" for="btnradio2MAL">Malejąco</label>
                
                <input type="radio" class="btn-check " name="sortDirection" id="btnradio1ROS" autocomplete="off"    {if false}checked{/if}value="ASC">
                <label class="btn btn-outline-primary" for="btnradio1ROS">Rosnąco</label>


            </div>
            <br>
            <label for="filter" class = "mb-2 mt-3 "><h5>Filtr nazwy</h5></label>
            <input type="text" class="form-control w-50 mx-auto" name='filter' maxlength="45" id="filter" placeholder="Filtr">
           
            <button class="mt-3 btn btn-lg btn-primary" type="submit">Szukaj</button>
        </form>
        
    </div>
  </div>
</div>






<div id="threadlist" class="list-group list-group-flush border-bottom border-top mt-2 w-90 mx-auto">
{*      <a href="#" class="list-group-item list-group-item-action active py-3 lh-sm" aria-current="true">
    <div class="d-flex w-100 align-items-center justify-content-between">
      <strong class="mb-1">List group item heading</strong>
      <small>Wed</small>
    </div>
    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
  </a>

    *}

{include file="components/threadlist.tpl"}


</div>




<nav class="mx-auto mt-3 align-self-end" aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>    


    
<script src="{$conf->app_url}/js/myJS/functions.js"></script>
{/block}