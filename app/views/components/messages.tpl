{foreach $msgs->getMessages() as $msg}
 <div class="alert {if $msg->isInfo()}alert-success{/if}
                   {if $msg->isWarning()}alert-warning{/if}
                   {if $msg->isError()}alert-danger{/if}" role="alert">
    {$msg->text}
 </div>
{/foreach}