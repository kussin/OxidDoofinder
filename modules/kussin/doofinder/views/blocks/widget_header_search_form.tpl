[{* REPLACES ALL SEARCH BOX EXTENSIONS BY DOOFINDER *}]
[{if $oView->showSearch()}]
    <form class="form search kussin-doofinder" role="form" action="#" method="get" name="search">
        <div class="input-group">
            <input class="form-control" type="text" id="searchParam" name="searchparam" value="[{$oView->getSearchParamForHtml()}]" placeholder="[{oxmultilang ident="SEARCH"}]">

            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary" title="[{oxmultilang ident="SEARCH_SUBMIT"}]">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
[{/if}]