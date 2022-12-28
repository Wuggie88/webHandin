<h1>Register new user</h1>
<form method="post" action="/user/register">
    <div>    
        <label for="email">Email:</label>
        <br>
        <input id="email" name="email" type="email" pattern="\S+@\S+\.([a-z]|[A-Z]){1,5}">
    </div>

    <div>    
        <label for="name">Name:</label>
        <br>
        <input id="name" name="name" type="text">
    </div>
    
    <div>    
        <label for="username">Username:</label>
        <br>
        <input id="username" name="username" type="text">
    </div>
    
    <div>    
        <label for="password">password</label>
        <br>
        <input id="password" name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\S{7,31}">
    </div>

    <button type="submit">Submit</button>
</form>

