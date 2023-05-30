{extends file = "templates/main.tpl"}



{block name = "main"}
    <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="{url action='addCategory'}" method="post" >
           
            <h1 class="h3 mb-5 fw-normal display-5">{$title}</h1>

            <div class="mb-3 ">
              <label for="categoryName" class="form-label">Nazwa Kategorii</label>
              <input type="text" class="form-control" name="categoryName" id="categoryName"  maxlength="45" aria-describedby="categoryNameHelp" {if isset($lastValues->name)}value="{$lastValues->name}"{/if} >
              <div id="categoryNameHelp" class="form-text">Tak będzie nazywała się kategoria.</div>
            </div>
            
           {* <div class="mb-3 ">
              <label for="categoryDescription" class="form-label">Opis Kategorii</label>
              <input type="text" class="form-control" name="categoryDescription" id="categoryDescription"  maxlength="90" aria-describedby="categoryDescriptionHelp" value="{isset($lastValues->description)}">
              <div id="categoryDescriptionHelp" class="form-text">Taki opis będzie widniał pod nazwą kategorii.</div>
            </div>*}
            
            <div class="mb-3">
                <label for="categoryDescription" class="form-label">Opis Kategorii</label>
                <textarea class="form-control" name="categoryDescription" id="categoryDescription" maxlength="90" aria-describedby="categoryDescriptionHelp" rows="3">{if isset($lastValues->description)}{$lastValues->description}{/if}</textarea>
                <div id="categoryDescriptionHelp" class="form-text">Taki opis będzie widniał pod nazwą kategorii.</div>
            </div>
           
            <button class="w-50 btn btn-lg btn-primary mt-5" type="submit">Zapisz</button>
            
          </form>
           
        </div>
        <div class= "text-center mb-auto  mx-auto dark ">
            {include file="components/messages.tpl"}  
        </div>    
        
        
    </div>
{/block}
