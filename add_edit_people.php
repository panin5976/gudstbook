<form action="save_add_people.php" method="post">
    First Name:<input type="text" name="fname"><br>
    Last Name:<input type="text" name="lname"><br>
    Age:<input type="text" name="age"><br>
    Sex:<select name="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br>
    Marry Status:<select name="marry_status">
            <option value="S">Single</option>
            <option value="M">Married</option>
        </select><br>
    <input type="submit" value="add">
</form>