<div class="ui pointing menu" id="admin_navbar">
    <a class="item" id="index_nav" href="/admin/">
        Feed
    </a>
    <a class="item" id="teams_nav" href="/admin/teams">
        Teams
    </a>
    <a class="item" id="schools_nav" href="/admin/schools">
        Schools
    </a>
    <a class="item" id="accommodations_nav" href="/admin/accommodations">
        Accomm. / Concerns
    </a>
    <a class="item" id="shirts_nav" href="/admin/shirts">
        Shirts
    </a>
    <a class="item" id="invoices_nav" href="/admin/invoices">
        Invoices
    </a>
    <div class="right menu">
        <div class="item">
            <form class="ui transparent icon input" action="/admin/search.php" method="GET">
                <input name="search" type="text" placeholder="Search..."
                    value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>">
                <i class="search link icon"></i>
            </form>
        </div>
    </div>
</div>