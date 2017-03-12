<?php
$admin_url = $_SERVER["REQUEST_URI"];
$admin_urls = array(
	"/some_admin/admin" => "admin/content.php",
);
?>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="admin.css">
</head>

<body>
	<?php include $admin_urls[$admin_url]; ?>
</body>