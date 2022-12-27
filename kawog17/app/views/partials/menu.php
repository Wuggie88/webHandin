<nav>
    <div>Menu
        <?php if(isset($_SESSION['logged_in'])) : ?>
            <a href="/user/userlist">User list</a>
            <a href="/home/uploadpage">Upload</a>
            <a href="/home/dashboard">Dashboard</a>
            <a href="/user/logout">Logout</a>
            
        <?php else : ?>
            <a href="/user/register">Register</a>
            <a href="/user/login">login</a>
        <?php endif; ?>
    </div>
</nav>
<?php