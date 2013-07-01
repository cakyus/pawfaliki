<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <title><?php echo htmlentities($this->title); ?></title>
        <style>

        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }

        </style>
    </head>
    <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Pawfaliki</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#about">Recent Changes</a></li>
              <li><a href="#about">Edit Page</a></li>
              <li><a href="#contact">History</a></li>
            </ul>
            <form class="navbar-form pull-right form-search">
              <input class="span4 input-medium search-query" type="text" placeholder="Search">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
