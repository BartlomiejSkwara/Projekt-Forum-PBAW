{extends file = "templates/main.tpl"}



{block name = "main"}
    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark">
          <form action="{strip}
                
                {url action=$selectedAction}
                {if $selectedAction == "editCategory"}
                    /{$editedID}
                {/if}
                
                {/strip}" method="post" >
           
                    <h1 class="h3 mb-5 fw-normal display-5">{$title}<br><b class="text-primary">{if isset($editedID)}{$editedID}{/if}</b></h1>

            <div class="mx-auto mb-3 " style="width: 21rem;">
              <label for="categoryName" class="form-label">Nazwa Kategorii</label>
              <input type="text" class="form-control" name="categoryName" id="categoryName"  maxlength="45" aria-describedby="categoryNameHelp" value="{strip}
                    {if isset($lastValues->name)}
                        {$lastValues->name}
                    {else if isset($category["name"])}
                        {$category["name"]}
                    {/if}"{/strip}>
              <div id="categoryNameHelp" class="form-text">Tak będzie nazywała się kategoria.</div>
            </div>
            
            
            <div class="mx-auto mb-3 " style="width: 21rem;">
                <label for="categoryDescription" class="form-label">Opis Kategorii</label>
                <textarea class="form-control  no-scroll" name="categoryDescription" id="categoryDescription" maxlength="90" aria-describedby="categoryDescriptionHelp" rows="3">{strip}
                    {if isset($lastValues->description)}
                            {$lastValues->description}
                    {else if isset($category["description"])}
                            {$category["description"]}
                    {/if}
                {/strip}</textarea>
                <div id="categoryDescriptionHelp" class="form-text">Taki opis będzie widniał pod nazwą kategorii.</div>
            </div>
           
            <button class="btn btn-lg btn-primary mt-5" type="submit" style="width: 13rem;" >Zapisz</button>
            
          </form>
           
        </div>
        <div class= "text-center mb-auto  mx-auto dark ">
            {include file="components/messages.tpl"}  
        </div>    
        
        
    </div>
{/block}
