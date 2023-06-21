
<form id="pagination-form" class = "mx-auto mb-1" onsubmit="ajaxPostFormPagination('pagination-form','{$conf->action_root}{$actionURL}','threadlist'); return false;">
    {block name = passedParams}{/block}
    <nav class="mx-auto mt-3  align-self-end" aria-label="Page navigation example">
    <ul class="pagination">
      {if $pagData->currentPage != 0}
      <li class="page-item">

        <button type="submit" class="page-link"  name="page" value="0" aria-label="Pierwsza strona">
          <span aria-hidden="true">&laquo;</span>
        </button>

      </li>
      <li class="page-item">
          <button class="page-link" type="submit" name="page" value="{$pagData->currentPage-1}" aria-label="Poprzednia strona">
              {$pagData->currentPage-1}
          </button>
      </li>
      {/if}

      <li class="page-item">
          <button class="page-link active" type="submit" value="{$pagData->currentPage}">
              {$pagData->currentPage}
          </button>      
      </li>

      {if $pagData->lastPage>$pagData->currentPage}
          <li class="page-item">
              <button class="page-link" type="submit" name="page" value="{$pagData->currentPage+1}" aria-label="Kolejna strona" >
                  {$pagData->currentPage+1}
              </button>
          </li>

      <li class="page-item">
        <button class="page-link" type="submit"  name="page" value="{$pagData->lastPage}" aria-label="Ostatatnia strona">
          <span aria-hidden="true">&raquo;</span>
        </button>
      </li>
      {/if}
    </ul>
  </nav>
</form>

