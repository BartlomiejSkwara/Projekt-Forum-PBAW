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
        {include file="header.tpl"}
        
        {block name = main} pustka :> {/block}
        
        {include file="footer.tpl"}
        
        
        <script src="{$conf->app_url}/js/bootstrap.bundle.min.js"></script>
    
     
    </body>
</html>

