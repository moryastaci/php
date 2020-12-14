<html>
<head>
 <title>Запись в БД через форму на php</title>
</head>
<body>
<?php
        include "./DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM docker_database.concerts");
        $stmt->execute();
        $concerts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
        <form action="db.php" method="post">
        <label>Id :</label>
        <input type="text" name="con_id" required="required" placeholder="Please Enter Id"/><br /><br />
        <label>City :</label>
        <input type="text" name="con_city" required="required" placeholder="Please Enter City"/><br/><br />
        <label>Date :</label>
        <input type="text" name="con_date" required="required" placeholder="Please Enter Date"/><br/><br />
        <label>Description :</label>
        <input type="text" name="con_description" required="required" placeholder="Please Enter Desciption"/><br/><br/>
        <input type="submit" value="Submit" name="submit"/><br />
        </form>
<p>
          <?php
          echo "<pre>";
          print_r($concerts);
          echo "</pre>";
          ?>
          </p>
</body>
</html>