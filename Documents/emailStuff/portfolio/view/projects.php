<?php
session_start();
echo 'Session ID = ' . session_id() . '<br>';
if (isset($_SESSION["personId"])) {
    echo 'personId = ' . $_SESSION["personId"];
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Projects Form</title>
        <meta charset="utf-8">
        <meta name="theme-color" content="#99ffd6"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Keywords" content="HTML,  CSS, SQL, JavaScript, How to, PHP, Java, C++, jQuery, Bootstrap, Colors, Programming, Web Development, Training, Learning, Quiz, Courses, Lessons, References, Examples, Source code">
        <meta name="Description" content="Well organized and easy to understand Web building tutorials to use HTML, CSS, JavaScript, SQL, PHP, Bootstrap, XML and more.">
        <link rel="stylesheet" href="css/projects.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" crossorigin="anonymous">
        </script><script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" crossorigin="anonymous">
        </script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="js/projectsValidation.js"></script>
    </head>
    <body>
    <body class="body">
        <div class="jumbotron text-center">
            <h1>Projects Form</h1>
            <p>Fill all the details and submit</p>
        </div>
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <form id="userProjectsform" name="userProjectsform" onsubmit="return test()"  method="POST" action="adapters/ControllerProjectsAdapter.php" >
                    <input name="personId" id="personId" class="form-control" type="hidden"  value=<?php echo $_SESSION["personId"]; ?> >
                    <tr class="success">
                        <td>
                            <div id="projectName_div" class="form-group">
                                <label for="projectName">Project Name (*)</label>
                                <input name="projectName" id="projectName" class="form-control" type="text" placeholder="Project Name" value="" >
                                <div class="input_error" id="projectName_error"></div>
                            </div>
                        </td>
                        <td>
                            <div id="projectLink_div" class="form-group">
                                <label for="projectLink">Project Link(*)</label>
                                <input name="projectLink" id="projectLink" class="form-control" type="text" placeholder="Project Link" value="" >
                                <div class="input_error" id="projectLink_error"></div>
                            </div>
                        </td>
                        <td>
                            <div id="projectDescription_div" class="form-group">
                                <label for="projectDescription">Project Description(*)</label>
                                <input name="projectDescription" id="projectDescription" class="form-control" type="text" placeholder="Project Description not more than 99 characters." value="" >
                                <div class="input_error" id="projectDescription_error"></div>
                            </div>
                        </td>

                    </tr>

                    <tr class="success">

                        <td colspan="2">
                            <div id="projectDetails_div" class="form-group">
                                <label for="projectDetails">Project Details</label>
                                <textarea rows="5" name="projectDetails" id="projectDetails" class="form-control" type="url" placeholder="Details about Project not more than 250 characters."></textarea>
                                <div class="input_error" id="projectDetails_error"></div>
                            </div>
                        </td>
                        <td>
                            <div id="submit_div" class="form-group">
                                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <button id="addNewProject" name="addNewProject" type="submit" value="Submit" form="userProjectsform" class="btn btn-lg btn-info ">Add More Projects</button>
                                <button id="submit" name="submitted" type="submit" value="Submit" form="userProjectsform" class="btn btn-lg btn-success ">Next</button>
                                <div class="input_error" id="submit_error"></div>
                            </div>
                        </td>
                    </tr>                                     
                </form>
                </tbody>

            </table>

        </div>

    </body>
</html>
<?php
//}
?>