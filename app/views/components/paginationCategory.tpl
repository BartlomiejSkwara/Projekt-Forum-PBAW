{extends file="components/paginationParent.tpl"}
{assign var="actionURL" value="categoryFilterThreadList/{$categoryData["idCategory"]}"}
{block name = "passedParams"}
    <input type="hidden" name="sortBy" value="{$pagData->filter->column}">
    <input type="hidden" name="sortDirection" value="{$pagData->filter->direction}">
    <input type="hidden" name="filter" value="{$pagData->filter->filter}">
{/block}
    

