<div class="container">
{foreach $threads as $thread}
    <div  class="py-3 row row-cols-2 border-bottom ">           
        <div class="col-lg-6 row row-cols-2">
            <a href="{url action='thread'}/{$thread["idthread"]}" class="link-success mb-1  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><strong>{$thread["topic"]}</strong></a>
            <div class="col-8 mb-1 small ">{$thread["username"]} rozpoczął: {$thread["creation_date"]}</div>
        </div>
        <div class="col-lg-6 row row-cols-3">

            <div class="col-6 mb-1 small ">Aktywność: {$thread["update_date"]} </div>
            <div class="col-4 mb-l small">Wiadomości: {$thread["message_count"]}</div>
            {if \core\SessionUtils::load("username",true)==$thread["username"]|| \core\RoleUtils::inRole("admin")}
             
                

            <button class="col btn btn-danger border-danger-subtle  rounded-pill button-small ms-2" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" aria-expanded="false" aria-controls="collapseFilter" data-bs-url="{url action='deleteThread'}" data-bs-id="{$categoryData["idCategory"]}/{$thread["idthread"]}">
                <img class=" mx-auto " " src="{url}/resources/icons/trash.svg" alt="" width="16" height="16"> 
                <span class="visually-hidden">Filtrowanie</span>
            </button>
            {/if}
                
        </div>

    </div>  
{/foreach}
</div>


