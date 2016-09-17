<html>
	<head>
		<title>PHP Objects</title>
	</head>
	<body>
		<?php
		echo "<h1>PHP Objects</h1>";
		print_r(new User("bill", "asdf"));

		class User
		{
			public $name, $password;

			function __construct($name,$password){
				$this->name = $name;
				$this->password = $password;
				$this->display();
			}

			function display()
			{
				echo "name: $this->name password: $this->password<br>";
			}
		}
		?>
	</body>
</html>