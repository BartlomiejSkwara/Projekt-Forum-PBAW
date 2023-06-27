<div class="container ">
{foreach $threads as $thread}
    <div  class="py-3 row border-bottom  ">           
        <div class="col-12 col-lg-6">
            <a href="{url action='thread'}/{$thread["idthread"]}" class="link-success mb-1  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><strong>{$thread["topic"]}</strong></a>
            <p class="">
                <b>Stworzył:</b> <span class="text-info">{$thread["username"]}</span>
                dnia: {$thread["creation_date"]}</p>
        </div>
        
        <div class="me-1 small col">Aktywność: {$thread["update_date"]} </div>
            <div class="me-l small col pe-0 position-relative" >
                
                <span >
                Wiadomości: {$thread["message_count"]}
                </span>
                {if \core\SessionUtils::load("username",true)==$thread["username"]|| \core\RoleUtils::inRole("admin")}


                    <button class=" position-absolute top-0 start-80 btn btn-toolbar ms-auto mb-auto btn-danger border-danger-subtle  rounded-pill button-small " type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" aria-expanded="false" aria-controls="collapseFilter" data-bs-url="{url action='deleteThread'}" data-bs-id="{$categoryData["idCategory"]}/{$thread["idthread"]}">
                        <img class=" mx-auto " src="{url}/resources/icons/trash.svg" alt="" width="16" height="16"> 
                        <span class="visually-hidden">Filtrowanie</span>
                    </button>

                {/if}
            
            </div>
       

            

                
       

    </div>  
{/foreach}
</div>











