
{if \core\SessionUtils::load("username",true)}
<form class = "mx-auto text-center  w-90 border p-2 mt-2 mb-0">

    <div class="mx-auto w-75">
            <label for="message" class="form-label">Wyślij Wiadomość</label>
            <textarea class="form-control no-scroll " id="message" rows="3" maxlength="180" placeholder="Enter your message" required></textarea>
        <div id="messageHelp" class="form-text">Maksymalnie 180 znaków</div>
    </div>
    <button type="submit" class="btn btn-primary">Wyślij</button>
</form>
{/if}



{*    <div class="mb-3">
            <label for="threadName" class="form-label">Thread Name</label>
            <input type="text" class="form-control" id="threadName" maxlength="45" placeholder="Enter thread name" required>
            <div id="threadNameHelp" class="form-text">Maximum 45 characters.</div>
    </div>*}