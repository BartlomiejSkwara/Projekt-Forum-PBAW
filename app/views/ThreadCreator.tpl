
{extends file="templates\main.tpl"}
{block name = "main"}

<div class = "d-flex w-100 h-100 p-3 flex-column ">

    <div class= "text-center  mt-auto dark ">
        
        <h1 class="h3 mb-5 fw-normal display-5"><b>{$title}</b></h1>

        <form id = "threadCreateForm" class = "mx-auto text-center  w-100 p-2 mt-2 mb-0" onsubmit="ajaxPostForm('threadCreateForm','{$conf->action_root}addThread/{$categoryID}','errorMessages'); return false;" method="post">
            <div class="mb-3 mx-auto  col-lg-7 col-12">
                    <label for="threadName" class="form-label">Nazwa wątku</label>
                    <input type="text" class="form-control" name="threadName" id="threadName" maxlength="45">
                    <div id="threadNameHelp" class="form-text">Maksymalnie 45 znaków</div>
            </div>
            <div class="mb-3 mx-auto col-lg-7 col-12">
                    <label for="message" class="form-label">Pierwsza wiadomość</label>
                    <textarea class="form-control no-scroll " name="message" id="message" rows="4" maxlength="180"></textarea>
                    <div id="messageHelp" class="form-text">Maksymalnie 180 znaków</div>
            </div>
            <button type="submit" class="btn btn-primary">Stwórz</button>
        </form>

    </div>
    <div id="errorMessages" class= "text-center mb-auto  mx-auto dark ">
        {include file="components/messages.tpl"}  
    </div>    


</div>

{/block}
