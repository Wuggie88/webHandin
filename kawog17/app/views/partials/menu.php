<nav>
    <div>Menu
        <a href="/home/restricted">restricted</a>
        <a href="/user/register">register</a>

        <?php if(isset($_SESSION['logged_in'])) : ?>
            <a href="/user/logout">logout</a>
            
        <?php else : ?>
            <a href="/user/login">login</a>
        <?php endif; ?>
    </div>
</nav>
<?php