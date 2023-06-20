{foreach $threads as $thread}
    <div  class="py-3 row border-bottom">           
        <div class="col-lg-6 row">
            <strong class="mb-1">{$thread["topic"]}</strong>
            <div class="col-8 mb-1 small ">{$thread["username"]} rozpoczął: {$thread["creation_date"]}</div>
        </div>
        <div class="col-lg-6 row">

            <div class="col-6 mb-1 small ">Aktywność: {$thread["update_date"]} </div>
            <div class="col-4 mb-l small">Wiadomości: {$thread["message_count"]}</div>
        </div>

    </div>   
{/foreach}
