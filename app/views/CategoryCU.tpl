{extends file = "templates/main.tpl"}



{block name = "main"}
        <div class = "d-flex w-100 h-100 p-3 mx-auto flex-column">

        <div class= "text-center mx-auto mt-auto dark ">
          <form action="{url action='loginValidate'}" method="post" >
           
            <h1 class="h3 mb-3 fw-normal">{$title}</h1>

            <div class="form-floating">
                <textarea type="text" class="form-control" name='nameInput' maxlength="45" id="categoryNameInput" placeholder="Nazwa"></textarea>
                <label for="nameInput">Nazwa</label>
            </div>
            
            <div class="form-floating">
                <textarea type="text" class="form-control" name='descriptionInput' maxlength="90" id="categoryDescriptionInput" placeholder="Nazwa"></textarea>

                <label for="descriptionInput">Opis</label>
            </div>
            

           
            <button class="w-100 btn btn-lg btn-primary" type="submit">Zaloguj</button>
            
          </form>
           
        </div>
        <div class= "text-center mb-auto  mx-auto dark ">
            {include file="components/messages.tpl"}  
        </div>    
        
        
    </div>
{/block}
