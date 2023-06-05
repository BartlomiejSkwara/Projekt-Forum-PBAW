<html data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{$conf->app_url}/css/extended-bootstrap.css">
       
        <link rel="icon" type="image/x-icon" href="{url}/resources/yuumicon.png">

    </head>
    <body>
        
        
        {if $onlyBody|default: true == true}
            {include file="header.tpl"}
            <div class = "d-flex pt-5 mt-5 mx-auto   w-75 flex-column main-content">
        {/if}
            
        
        
        {block name = main} pustka :> {/block}
            
        
        
        
        {if $onlyBody|default: true == true}
            </div>
            {include file="footer.tpl"}
        {/if}
        
        
        <script src="{$conf->app_url}/js/bootstrap.bundle.min.js"></script>
    
     
    </body>
</html>

