<div class="container mt-4 ">
  {foreach $threadMessages as $threadMessage}
    <div class="row mb-4">
        <div class="{if \core\SessionUtils::load("username",true)==$threadMessage["username"]}col-lg-9 col-12 offset-lg-3 {else}col-lg-9 col-12{/if}">
            <div class="px-0 py-0 row shadow-lg rounded-end p-3 d-flex text-break border    border-secondary 
                 {if \core\SessionUtils::load("username",true)==$threadMessage["username"]}border-end-0{else}border-start-0{/if}">
                <div id="top" class="bg-light-subtle col-12 col-lg-2 text-center ">
                    <img class="d-lg-block d-none mx-auto img-thumbnail" src="{url}/resources/icons/person-fill.svg" alt="" width="64" height="64"></img>
                    <img class="d-lg-none  d-inline" src="{url}/resources/icons/person-fill.svg" alt="" width="48" height="48"></img>

                    <p class="d-block mb-1 d-inline">{$threadMessage["username"]}</p>
                </div>
                <div class="col-12 bg-dark-subtle col-lg-10 border-start-0 border-secondary position-relative">
                  {$threadMessage["content"]}
                  <div class="position-absolute bottom-0 end-0 p-2 text-end text-secondary d-none d-lg-block">
                    Bottom Right Text
                  </div>
                </div>
            </div>
        </div>
    </div>
  {/foreach}
</div>


   
            
