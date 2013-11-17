<html>
    <body>
        <?php
        $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
        mysql_select_db('db_name');
        $result = mysql_query('SELECT name FROM employee');
        echo mysql_result($result, 2);
        ?>
    </body>
</html>