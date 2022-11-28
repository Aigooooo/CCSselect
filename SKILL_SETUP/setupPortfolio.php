<?php
    include $_SERVER["DOCUMENT_ROOT"]."/CCSselect/CONNECTION/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setup Portfolio</title>
        <link rel="stylesheet" href="../header.css">
        <link rel="stylesheet" href="setupPortfolioo.css">
        <link rel="stylesheet" href="../multipleSelect/chosen.min.css">
        <script type="text/javascript" src="../multipleSelect/multipleSelect.js"></script>
        <script type="text/javascript" src="../multipleSelect/chosen.jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            //this jquery is for the multiple select function
            $(document).ready(function(){
                $('#skills').chosen();
            });
        </script>
        <script>
            CKEDITOR.replace('description');
        </script>
    </head>
    <body>
        <div class="header">
            <img src="../images/ccsselectlogo.png" alt="CCSselect Logo">

        </div>
        <div class = "container">
            <div class="formContainer">
                <h3>Setup Portfolio</h3>
                <form name="skillForm" action="../SKILL_SETUP/skills.php" method="POST">
                    <span class="label"><b>Upload CV:</b></span><br>
                        <input type="file" name="resume" placeholder="" required><br/>
                    <span class="label"><b>Desired Position: </b></span><br>
                        <?php
                            $query = "SELECT * FROM job_positions ORDER BY positionName ASC";
                            $result = mysqli_query($conn, $query);
                            if($result)
                            {
                                ?>
                                    <select id="positions" name="itFields" value="Position Desired">
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
                        ?><br>
                    <span class="label"><b>Skills/Programming Languages: </b></span><br> 
                        <?php
                            $skillQuery = "SELECT * FROM skill_list ORDER BY skill_name ASC";
                            $skillResult = mysqli_query($conn, $skillQuery);
                            if($skillResult)
                            {
                                ?>
                                    <select id="skills" multiple="multiple">
                                        <?php 
                                            foreach($skillResult as $skillResult)
                                            {
                                                ?>
                                                    <option><?php echo $skillResult['skill_name']?></option>
                                                <?php
                                            }   
                                        ?>
                                    </select>
                                <?php
                            }
                        ?> <br>
                        <span class="label"><b>Upload License or Certificate: </b></span><br>
                            <input type="file" name="certificate" placeholder="" required><br>
                        <span class="label"><b>Additional Information </b></span><br>
                            <textarea class="description" rows="4" cols="60" name="description" required></textarea><br>
                        <input type="submit" name="submit" value="Create Account">
                </form>
            </div>
            <div class="imgContainer">
                <img src="images/design2.svg" alt="">
            </div>
        </div>
    </body>
</html>