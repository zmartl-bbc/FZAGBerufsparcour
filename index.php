<?php
$name = "";
$vorname = "";
if (isset ( $_POST ['name'] )) {
	$name .= $_POST ['name'];
}

if (isset ( $_POST ['nachname'] )) {
	$conn = new MySQLi ( "localhost", "root", "", "test" );
	$sql = "select vorname from kunde where nachname ='" . $_POST ['nachname'] . "'";
	$res = $conn->query ( $sql );
	while ( $rec = $res->fetch_assoc () ) {
		$vorname .= '<div class="row">';
		$vorname .= $rec ['vorname'];
		$vorname .= "</div>";
	}
}
?>

<!DOCTYPE html>
<html lang="ch-DE">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="FZAGBerufsparcour">
<meta name="author" content="Luca Marti | FZAG | Bootstrap">

<title>Clean Blog</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/clean-blog.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link
	href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link
	href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Part |
					Applikationsentwicklung</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://www.flughafen-zuerich.ch/" target="_blank">Flughafen
							Z&uuml;rich AG</a></li>
					<li><a href="http://lernende.flughafen-zuerich.ch/" target="_blank">Lernende
							Flughafen Z&uuml;rich AG</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Header -->
	<!-- Set your background image for this header on the line below. -->
	<header class="intro-header"
		style="background-image: url('img/home-bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="site-heading">
						<h1>Flughafen Z&uuml;rich AG</h1>
						<hr class="small">
						<span class="subheading">Berufsparcour - Informatiker/-in</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-12">
					<h1>Cross Site Scripting</h1>
				</div>
			</div>
			<div class="row">
				<div class="form-horizontal">
					<form class="form-horizontal"
						action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="form-group">
							<label for="username" for="name" class="control-label col-sm-2">Vorname:</label>
							<div class="col-sm-10">
								<input type="text" id="name" name="name" class="form-control"
									placeholder="Vorname eingeben" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-md-2">
								<input type="submit" class="btn btn-default" value="Anmelden" />
							</div>
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3>Nachricht:</h3>
					</div>
					<div class="col-md-12  col-md-offset-1">
						<p><?php echo $name ?></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<h1>SQL Injection</h1>
				</div>
			</div>
			<div class="row">
				<div class="form-horizontal">
					<form class="form-horizontal"
						action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="form-group">
							<label for="username" for="nachname"
								class="control-label col-sm-2">Nachname:</label>
							<div class="col-sm-10">
								<input type="text" id="nachname" name="nachname"
									class="form-control" placeholder="Nachname eingeben" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-md-2">
								<input type="submit" class="btn btn-default" value="Anmelden" />
							</div>
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3>Nachricht:</h3>
					</div>
					<div class="col-md-12 col-md-offset-1">
						<p><?php echo $vorname ?></p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<h1>Unterschied $_GET und $_POST</h1>
					</div>
				</div>
				<div class="row">
					<div class="form-horizontal">
						<form class="form-horizontal"
							action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div class="form-group">
								<label for="username" for="nachname"
									class="control-label col-sm-2">Nachname:</label>
								<div class="col-sm-10">
									<input type="text" id="nachname" name="nachname"
										class="form-control" placeholder="Nachname eingeben" />
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-md-2">
									<input type="submit" class="btn btn-default" value="Anmelden" />
								</div>
							</div>
						</form>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h3>Nachricht:</h3>
						</div>
						<div class="col-md-12 col-md-offset-1">
							<p><?php echo $vorname ?></p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<hr>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<ul class="list-inline text-center">
							<li><a href="#"> <span class="fa-stack fa-lg"> <i
										class="fa fa-circle fa-stack-2x"></i> <i
										class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</span>
							</a></li>
							<li><a href="#"> <span class="fa-stack fa-lg"> <i
										class="fa fa-circle fa-stack-2x"></i> <i
										class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
							</a></li>
							<li><a href="#"> <span class="fa-stack fa-lg"> <i
										class="fa fa-circle fa-stack-2x"></i> <i
										class="fa fa-github fa-stack-1x fa-inverse"></i>
								</span>
							</a></li>
						</ul>
						<p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- JQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

</body>

</html>
