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
    <div class="card card-body ju" >
        
 
        <label for="sortBy" class = "mx-auto mb-2"><h5>Sortuj Według</h5></label>
        <div id="sortBy" class="btn-group" role="group" aria-label="Type sortowania">
            <input type="radio" class="btn-check " name="sortBy" id="btnradio1Alf" autocomplete="off"    {if false }checked{/if}>
            <label class="btn btn-outline-primary" for="btnradio1Alf">Alfabetycznie</label>

            <input type="radio" class="btn-check" name="sortBy" id="btnradio2DP" autocomplete="off"    {if false}checked{/if} >
            <label class="btn btn-outline-primary" for="btnradio2DP">Data powstania</label>

            <input type="radio" class="btn-check" name="sortBy" id="btnradio3OZ" autocomplete="off"     {if true }checked{/if}>
            <label class="btn btn-outline-primary" for="btnradio3OZ">Ostatnia zmiana</label>
        </div>
        
        <label for="sortDirection" class = "mx-auto mb-2 mt-3"><h5>Typ Sortowania</h5></label>
        <div id="sortDirection" class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check " name="sortDirection" id="btnradio1ROS" autocomplete="off"    {if true }checked{/if}>
            <label class="btn btn-outline-primary" for="btnradio1ROS">Rosnąco</label>

            <input type="radio" class="btn-check " name="sortDirection" id="btnradio2MAL" autocomplete="off"    {if false}checked{/if} >
            <label class="btn btn-outline-primary" for="btnradio2MAL">Malejąco</label>
        </div>
        
        
    </div>
  </div>
</div>






<div class="list-group list-group-flush border-bottom   w-90 mx-auto">
{*      <a href="#" class="list-group-item list-group-item-action active py-3 lh-sm" aria-current="true">
    <div class="d-flex w-100 align-items-center justify-content-between">
      <strong class="mb-1">List group item heading</strong>
      <small>Wed</small>
    </div>
    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
  </a>

    *}

    
    
    {for $var=0 to 2}
        <div class="py-3 row border-bottom">           
            <div class="col-lg-6 row">
                <strong class="mb-1">Nazwa wątku.</strong>
                <div class="col-8 mb-1 small ">Autor stworzył: 2023-06-17 <br>14:13:18</div>
            </div>
            <div class="col-lg-6 row">

                <div class="col-6 mb-1 small ">2023-06-17 <br>14:13:18</div>
                <p class="col-4">21</p>
            </div>

        </div>   
    {/for}
 








</div>
{/block}