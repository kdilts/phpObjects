<html>
	<head>
		<title>PHP Objects</title>
	</head>
	<body>
		<?php
		echo "<h1>PHP Objects</h1>";
		$user1 = new User("bill", "asdf");
		print_r($user1);
		echo "<br>";
		$user1 = null;
		print_r("print_r on null object: " . $user1);

		class User
		{
			public $name, $password;

			function __construct($name,$password){
				$this->name = $name;
				$this->password = $password;
				$this->display();
			}

			function __destruct() {
				echo "Destructing $this->name<br>";
			}

			function display()
			{
				echo "name: $this->name password: $this->password<br>";
			}
		}
		?>
	</body>
</html>