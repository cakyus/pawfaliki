<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <link href="pawfaliki/pawfaliki.css" rel="stylesheet" media="screen" />
        <title><?php echo htmlentities($this->title); ?></title>
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
          <a class="brand" href="#Index">Pawfaliki</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#!RecentChanges">Recent Changes</a></li>
              <li><a href="#!Edit">Edit Page</a></li>
              <li><a href="#!History">History</a></li>
            </ul>
            <form class="navbar-form pull-right form-search">
              <input class="span4 input-medium search-query" type="text" placeholder="Search">
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
