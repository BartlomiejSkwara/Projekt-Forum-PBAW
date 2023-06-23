<div class="container mt-4 bg-body-tertiary">
  {foreach $threadMessages as $threadMessage}
    <div class="row mb-4">
        <div class="{if \core\SessionUtils::load("username",true)==$threadMessage["username"]}col-lg-9 col-12 offset-lg-3 {else}col-lg-9 col-12{/if}">
            <div class="px-0 py-0 row shadow-lg rounded-end p-3 d-flex text-break border    border-secondary 
                 {if \core\SessionUtils::load("username",true)==$threadMessage["username"]}border-end-0{else}border-start-0{/if}">
                <div id="top" class="bg-light-subtle col-12 col-lg-2 text-center d-lg-block d-flex align-items-center">
                    <img class="d-lg-block d-none mx-auto img-thumbnail" src="{url}/resources/icons/person-fill.svg" alt="" width="64" height="64"></img>
                    <img class="d-lg-none  d-inline" src="{url}/resources/icons/person-fill.svg" alt="" width="32" height="32"></img>

                    <p class=" mb-0 text-center">{$threadMessage["username"]}</p>
                    
                    <span class="d-lg-none">:</span>
                    
                    
                        <div class="flex-grow-1 text-end text-secondary d-lg-none d-block align-self-baseline">
                            <div class = "d-sm-block d-none">
                            {$threadMessage["creation_date"]}                    
                            </div>
                        </div>
                    
                    
                </div>
                <div class="col-12 bg-dark-subtle col-lg-10 border-start-0 border-secondary position-relative">
                  {$threadMessage["content"]}
                  <div class="position-absolute bottom-0 end-0 p-2 text-end text-secondary d-none d-lg-block">
                    {$threadMessage["creation_date"]}
                  </div>
                </div>
            </div>
        </div>
    </div>
  {/foreach}
</div>


   
            
