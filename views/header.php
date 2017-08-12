<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="http://develop.course/twitter/style.css">
</head>

<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="http://develop.course/twitter/">Twitter</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?page=timeline">Your timelone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=yourtweets">Your tweets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=publicprofiles">Public Profiles</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">

            	<?php if ($_SESSION['id']) { ?>
					
					<a href="?function=logout" class="btn btn-outline-success" >Logout</a>

            	<?php } else { ?>

               		<button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#myModal">Login/Signup</button>

                <?php } ?>
            </div>
        </div>
    </nav>