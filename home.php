    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Musik</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Album</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Xin chào <?php echo $Nom_User; ?></a></li>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" role="main">

      <div class="page-header">
        <h1>Album</h1>
      </div>
		<div class="row">
		<div class="col-xs-12">
		<table class="table">
            <thead>
              <tr>
                <th>Code Album</th>
                <th>Titre Album</th>
                <th>Année Album</th>
              </tr>
            </thead>
            <tbody>
		
<?php
try {
    $strConnection = 'sqlsrv:Server=INFO-SIMPLET;Database=Classique'; 
    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
    $pdo = new PDO($strConnection, 'ETD', 'ETD', $arrExtraParam); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
    }
$from = 10 * ($page - 1);
$query = "SELECT TOP 10 Code_Album, Titre_Album, Année_Album FROM Album WHERE Code_Album NOT IN (SELECT TOP $from Code_Album FROM Album);";
$req=$pdo->query($query);
while($row = $req->fetch()){
	echo "<tr>";
	echo "<td>" . $row[utf8_decode('Code_Album')] . "</td>";
	echo "<td>" . $row[utf8_decode('Titre_Album')] . "</td>";
	echo "<td>" . $row[utf8_decode('Année_Album')] . "</td>";
    echo "</tr>";
    }    
$req->closeCursor();
$pdo = NULL;
?>
	</tbody>
          </table>
		  <ul class="pagination">
			  <li><a href="?page=1">1</a></li>
			  <li class="active"><a href="?page=2">2</a></li>
			  <li><a href="?page=3">3</a></li>
			  <li><a href="?page=4">4</a></li>
			  <li><a href="?page=5">5</a></li>
			</ul>
	</div>
		</div>
    </div> <!-- /container -->
