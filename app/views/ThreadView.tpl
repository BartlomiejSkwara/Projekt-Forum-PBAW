
{extends file = "templates/main.tpl"}
{block name = "main"}
{include file="components/messages.tpl"}










<div class=" w-100 text-center ">
    <h1 class ="mx-auto">
        Przeglądasz właśnie wątek<br>
        <b class="text-primary">{$title}</b>
        <br>
        
        {*<small class="h5 w-50">{$threadData["topic"]}</small>*}
    </h1>
 </div>
 
    

    




<div id="threadlist" class="border-top border-white mt-2 w-90 mx-auto bg-body-tertiary pb-0">

{include file="components/threadMessagesList.tpl"}


{if \core\SessionUtils::load("username",true)}
<form>
    <div class="mb-3">
            <label for="threadName" class="form-label">Thread Name</label>
            <input type="text" class="form-control" id="threadName" maxlength="45" placeholder="Enter thread name" required>
            <div id="threadNameHelp" class="form-text">Maximum 45 characters.</div>
    </div>
    <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" maxlength="180" placeholder="Enter your message" required></textarea>
        <div id="messageHelp" class="form-text">Maximum 180 characters.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{/if}

{include file="components/paginationThread.tpl"}

</div>



<script src="{$conf->app_url}/js/myJS/customDeleteModal.js"></script>
<script src="{$conf->app_url}/js/myJS/functions.js"></script>
{/block}


