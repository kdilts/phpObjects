<html>
	<head>
		<title>PHP Objects</title>
	</head>
	<body>
		<?php
		echo "<h1>PHP Objects</h1>";
		$user1 = new User("bill", "asdf",date("m/d/Y"));
		print_r($user1);
		echo "<br>";
		$user1 = null;
		print_r("print_r on null object: " . $user1);
		echo "<br><br>";
		$subscriber1 = new Subscriber("Jeff","jkl;",date("m/d/Y"), "555-5555", "jeff@fake.net");
		print_r($subscriber1);
		echo "<br>";
		$subscriber1 = null;

		class User
		{
			public $name, $password, $createdOn;

			function __construct($name,$password,$date){
				$this->name = $name;
				$this->password = $password;
				$this->createdOn = $date;
				$this->display();
			}

			function __destruct() {
				echo "Destructing $this->name<br>";
			}

			function display()
			{
				echo "name: $this->name password: $this->password Created on: $this->createdOn<br>";
			}
		}

		class Subscriber extends User
		{
			public $phone, $email;

			function __construct($name, $password, $date, $phone, $email)
			{
				$this->phone = $phone;
				$this->email = $email;
				parent::__construct($name, $password, $date);
			}

			function display()
			{
				parent::display();
				echo "phone: $this->phone email: $this->email<br>";
			}

			function __destruct() {
				parent::__destruct();
			}
		}
		?>
	</body>
</html>