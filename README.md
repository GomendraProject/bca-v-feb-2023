# bca-v-feb-2023

### Useful links

> [Virtual Host Setup](https://github.com/GomendraProject/bca-v-feb-2023/discussions/1)

### Scratch Pad

```md

1. Php [index.php, routing]
	-> file based
		// Directory: :root/home/start.php :root/admin/index.php
		// URL: domain/home/start.php       domain/admin/ or domain/admin/index.php
2. Php tag
	> open: <?php
	> close: ?>
	> short hand echo: <?= $variable ?>
3. function
	> function functionName($a,$b) {
		
		// body
	}
	
	// int functionName(int v) {
	
		return x;
	}
	
	// getUsers
	
	// changeStatus($userId)
	
	// toggleUserStatus
	
	// activateUser / deactivateUser
4. array
	-> $userIds = [1,2,3,4,5, "6"]
	-> associative array
		->arrays with keys.
		$user = [
			"id" => 1,
			"name" => "User"
		];
		
		$users = [
			[
				"id" => 1,
				"name" => "User 0"
			],
			$user
		]
		
		$userZero = $users[0];
		
		echo $userZero["name"]
		
		
		
		$user["id"] $students[0]

5. PHP and HTML
	> write html with php echo
	> write html, enhance with php

c#
int x;
Console.WriteLine(45);

// js
const user = { // literal object
	id: 1,
	name: "hola"
};

const userArr = [
	1,2,3,4,"5"
];

user.id or user["id"]
user.name or user["name"]


## New Changes



1. Web
	-> Http server (PHP)
		-> Stateless [Does not recognize user]
		
	-> Solution
		-> Somehow identify a user with the server
			-> JWT Login
			-> Http basic authentication
			-> Session Login
				-> Store related data about a user in the server
					-> Cookie
					
	
	HTTP Server
		-> User sends a request
			-> session start
				-> Creates a unique cookie on the user's machine [By sending response]
				-> Associates the cookie value with a data in server
				->
				
				
				
		$_SESSION["user_id"] = 5;
		
		$_SESSION["user_id"] // returns 5
		
		
	1. Login Page
		-> User posts username and password
			-> Validate
				-> If success
					-> $_SESSION["user_id"] = $user['id']
		
		
	-> Check Authentication
		-> Use session
			-> Check if $_SESSION["user_id"] exists or not
			
			function checkAuth() {
				$userIdExists = isset($_SESSION['user_id'];
				$userId = $_SESSION["user_id"];
				// Get current url | $_SERVER
				$currentUrl = $_SERVER['URL'];
				if(!$userIdExists) {
					header("Location: /login.php?returnUrl=" . $currentUrl);
				}
			}
			
			// In login page
			
			$redirectUrl = $_GET["returnUrl"];
			
			header("Location: /admin.php");
			
			
1. How to start a session
2. Where to start a session
3. How to store a data in a session
4. Authentication: what to store
5. How to redirect if not logged in
