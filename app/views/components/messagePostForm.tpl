


{if \core\SessionUtils::load("username",true)}
<form id = "messagePostFormA" class = "mx-auto text-center  w-90 border p-2 mt-2 mb-0" onsubmit="ajaxPostFormPagination('messagePostFormA','{$conf->action_root}postMessage/{$threadData["idthread"]}','contentList'); return false;">

    <div class="mx-auto w-75">
            <label for="message" class="form-label">Wyślij Wiadomość</label>
            <textarea class="form-control no-scroll " name="message" id="message" rows="3" maxlength="180" placeholder="Enter your message" ></textarea>
        <div id="messageHelp" class="form-text">Maksymalnie 180 znaków</div>
    </div>
    <button type="submit" class="btn btn-primary"  value="{$pagData->lastPage}" >Wyślij</button>
</form>
{/if}



