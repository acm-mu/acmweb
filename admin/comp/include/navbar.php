<div class="ui pointing menu" id="admin_navbar">
    <a class="nav_item item" id="index" href="/admin/comp">
        Feed
    </a>
    <a class="nav_item item" id="teams" href="/admin/comp/teams">
        Teams
    </a>
    <a class="nav_item item" id="schools" href="/admin/comp/schools">
        Schools
    </a>
    <a class="nav_item item" id="accommodations" href="/admin/comp/accommodations">
        Accomm. / Concerns
    </a>
    <a class="nav_item item" id="shirts" href="/admin/comp/shirts">
        Shirts
    </a>
    <a class="nav_item item" id="invoices" href="/admin/comp/invoices">
        Invoices
    </a>
    <a class="nav_item item" id="settings" href="/admin/comp/settings">
        Settings
    </a>
    <div class="right menu">
        <div class="item">
            <form class="ui transparent icon input" action="/admin/comp/search.php" method="GET">
                <input name="search" type="text" placeholder="Search..."
                    value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>">
                <i class="search link icon"></i>
            </form>
        </div>
    </div>
</div>