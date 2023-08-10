<?php 
	//Keep these consts -- we'll need them for your local env
	DEFINE('DB_HOSTNAME', 'localhost');
    DEFINE('DB_DATABASE', 'market_app');
    DEFINE('DB_USERNAME', 'root');
    DEFINE('DB_PASSWORD', 'root');

	$PlanetScaleDatabaseUrl = getenv("PLANETSCALE_DATABASE_URL");

	if($PlanetScaleDatabaseUrl){
	//If using PLANET SCALE
        $DbServer = getenv("DB_HOST");
        $DbUser = getenv("DB_USER");
        $DbPassword = getenv("DB_PASS");
        $DbName = getenv("DB_NAME");
	} else {
		$DbServer = DB_HOSTNAME;
		$DbUser = DB_USERNAME;
		$DbPassword = DB_PASSWORD;
		$DbName = DB_DATABASE;
	}

	$dsn = "mysql:host=".$DbServer.";port=8889;dbname=".$DbName.";charset=utf8";
    $opt = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_SSL_CA => "/etc/ssl/cert.pem",
    );
    $pdo = new PDO($dsn, $DbUser, $DbPassword, $opt);
    
	function dbQuery($query, $values=array()){
	  global $pdo;
	
	  $stmt = $pdo->prepare($query);
	  $stmt->execute($values);
	  return $stmt;
	    //To get data out, use ->fetch() for one row or ->fetchAll() for all rows
	}