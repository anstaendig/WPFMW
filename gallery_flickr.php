<div class="container">
    <div>
        <form class="navbar-form navbar-left" role="search" onsubmit="#">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tag-Suche" id="tag" name="tag" onkeypress="return evalKeyForSubmit(event);">
            </div>
            <button type="button" class="btn btn-default" id="btnSearch" onclick="flickrSearch();">Los</button>
        </form>
    </div>

    <div class="defaulttxt" id="txt">
        Geben Sie im Suchfeld das gewünschte Tag ein.
    </div>

    <div id="photos"></div>
</div>
