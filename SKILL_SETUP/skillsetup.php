<?php
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Skill Setup</title>
    </head>
    <body>
        <h2>Skill Setup</h2>
        <h3>Select IT Field</h3>
        <form action="skills.php" method="POST">
            <?php
                $query = "SELECT * FROM job_positions";
                $result = mysqli_query($conn, $query);
                if($result)
                {
                    ?>
                        <select name="itFields" value="Position Desired">
                            <?php 
                                foreach($result as $result)
                                {
                                    ?>
                                        <option><?php echo $result['positionName']?></option>
                                    <?php
                                }   
                            ?>
                        </select>
                    <?php
                }
            ?>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>