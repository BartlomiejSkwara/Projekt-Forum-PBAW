
{extends file = "templates/main.tpl"}
{block name = "main"}










<div class=" w-100 text-center ">
    <h1 class ="mx-auto">
        Przeglądasz właśnie wątek<br>
        <b class="text-primary">{$title}</b>
        <br>
        
        {*<small class="h5 w-50">{$threadData["topic"]}</small>*}
    </h1>
 </div>
 
    

    




<div id="contentList" class=" list-group   list-group-flush  border-top border-white mt-2 col-lg-9 col-12 mx-auto  pb-0">

 

    
{include file="components/threadMessagesList.tpl"}
{include file="components/messages.tpl"} 
{include file="components/messagePostForm.tpl"}



<div class=" mx-auto">
{include file="components/paginationThread.tpl"}
</div>


</div>



<script src="{$conf->app_url}/js/myJS/customDeleteModal.js"></script>
<script src="{$conf->app_url}/js/myJS/functions.js"></script>
{/block}


