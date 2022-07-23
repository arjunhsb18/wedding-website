<header>
    <h2>
        <label for="nav-toggle">
            <span class="las la-bars">

            </span>
        </label>
    </h2>
    <!--<div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here...">
            </div>-->
    <div class="user-wrapper">
        <img src="<?=base_url();?>assets/img/avatar.png" alt="" width="50px" height="50px" class="src">
        <div>
            <h5 style="margin-bottom:-2px;"><?= $user['fullname'];?></h5>
            <span style="font-size:14px;"><a style="text-decoration:none;cursor:pointer;"
                    href="<?=base_url();?>admin/logout">Log Out</a></span>
        </div>
    </div>
</header>