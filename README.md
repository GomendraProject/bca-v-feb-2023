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
