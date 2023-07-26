<link rel="stylesheet" href="decorate.css">
<body>
<p class="index1">
    <br/> REGISTER 
</p>
<div class="container">
    <form action="member_insert.php" method="post" enctype="multipart/form-data">

        <label for="firstname">First name :</label><br>
        <input type="text" name="firstname" class="input" />

        <label for="lastname">last name :</label><br>
        <input type="text" name="lastname" class="input" />

        <label for="email">Email :</label><br>
        <input type="email" name="email" class="input" />

        <label for="password">Password :</label><br>
        <input type="password" name="password" class="input" />

        <label for="phone">Phone :</label><br>
        <input type="text" name="phone" class="input" />

        <label for="address">Address :</label><br/>
        <textarea name="address" class="input" /> </textarea>

        <label for="photo">Photo :</label><br/>
        <input type="file" name="photo" class="box_photo" />

        <input type="submit" value="Sign in" class="button" />

    </form>
</div>
</body>