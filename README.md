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


### March 19

# Multiple Input

[  name_input , rate_input, quantity_input ]
[  name_input , rate_input, quantity_input ]
[  name_input , rate_input, quantity_input ]
[  name_input , rate_input, quantity_input ]
[  name_input , rate_input, quantity_input ]

<input type="text" name="name_input" />

<input type="text" name="name_input[]" />

<?php

$name = $_POST['name_input']; // GET name

// in case of multiple

$names = $_POST['name_input'];

// Select 

$users = ...;

$selectedUserId = $_GET['user_id'];

?>

<select name="user_id">
	<?php foreach($users as $user): 
		$selected = $user['id'] == $selectedUserId ? 'selected' : '';
	?>
		<option value="<?= $user['id'] ?>" <?= $selected ?>>
			<?= $user['name'] . ' - ' . $user['mobile'] ?>
		</option>
	<?php endforeach; ?>
</select>




## 2023-03-23


1. User registration
	
	$password = $_POST['password']; // plain password
	
	$hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Encrypted password
	
	// Ensure our password column is long enough
	
	// Prepare query and insert
	
	INSERT INTO user (username, password) values (:username, :password);
	INSERT INTO user (username, password) values (?,?);

	
	->bindParam("username", $username)
	->bindParam("password", $hashedPassword)
	
	->bindParam('ss', $username, $hashedPassword);
	
2. User authentication
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$user = GetUserByUserName($username);
	
	if($user == null) {
		// Incorrect username
	}
	
	// Verify that database password and user provided password match
	
	$passwordMatched = password_verify($password, $user['password']);
	\
	
	
	
	
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div>
      <label for="Name">Name </label>
      <input type="text" class="name" name="name" />
      <label for="Name">Rate </label>
      <input type="text" class="rate" name="name" />
      <label for="Name">Quantity </label>
      <input type="text" class="quantity" name="name" />
      <label for="Name">Amount </label>
      <input type="text" class="amount" name="name" />

      <button type="button" id="add-btn">Add</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Rate</th>
          <th>Quantity</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody id="table-items"></tbody>
    </table>

    <template id="table-row-template">
      <tr>
        <td>
          <input type="hidden" name="product[]" class="product" />
          <span class="product_name"></span>
        </td>
        <td>
          <input type="hidden" name="rate[]" class="rate" />
          <span class="product_rate"></span>
        </td>
        <td>
          <input type="hidden" name="quantity[]" class="quantity" />
          <span class="product_quantity"></span>
        </td>
        <td>
          <input type="hidden" name="amount[]" class="amount" />
          <span class="product_amount"></span>
        </td>
      </tr>
    </template>

    <?php

    $products = $_POST['product'];
    $rates = $_POST['rate'];
    $quantities = $_POST['quantity'];
    $amounts = $_POST['amount'];

    start transaction

    for($i = 0; $i < count($products); $i ++) {
        $product = $products[$i];
        $rate = $rate[$i];
        $quantity = $quantities[$i];
        $amount = $amounts[$i];
        // insert
    }


    commit

    ?>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const addButton = document.querySelector("#add-btn");

        const nameElm = document.querySelector(".name");
        const rateElm = document.querySelector(".rate");
        const qtyElm = document.querySelector(".quantity");
        const amountElm = document.querySelector(".amount");

        const templateRef = document.querySelector("#table-row-template");

        const tableItems = document.querySelector("#table-items");

        addButton.addEventListener("click", (e) => {
            const cloneNode = templateRef.content.cloneNode(true);

            cloneNode.querySelector('.product').value = nameElm.value;
            cloneNode.querySelector('.product_name').textContent = nameElm.value;
            cloneNode.querySelector('.product_rate').textContent = rateElm.value;
            cloneNode.querySelector('.rate').value = rateElm.value;
            cloneNode.querySelector('.product_quantity').textContent = qtyElm.value;
            cloneNode.querySelector('.quantity').value = qtyElm.value;
            cloneNode.querySelector('.product_amount').textContent = amountElm.value;
            cloneNode.querySelector('.amount').value = amountElm.value;

            tableItems.appendChild(cloneNode);

        });
      });
    </script>

    <style>
      table {
        width: 100%;
      }
    </style>
  </body>
</html>









1. check_in
	-> .. RoomNo
	
	
	Form
		-> Room No -> input type text
			-> select
				$rooms = GetRooms();
				foreach ($room in $rooms) {
					<option value="$room['id']"> <?= $room['name'] ?> </option>
				}
				
			if is post
				-> $roomNo = $_POST['room'];
					-> $roomId = $_POST['room_id']
			
			// Db table
				... RoomNo
					->Change To RoomId
					
	Report -> inner join room 
		$check_in['roomNo']
		
		
		
		select c.*, r.RoomName RoomName from check_in c inner join room r on c.roomId = r.id
		
		$check_in['RoomName']
		
	Edit
		-> Same as before
		-> Room No	-> Same as New
						-> Mark as selected
							foreach ($room in $rooms) {
								$selected = $room['id'] == $check_in['roomId'] ? 'selected' : '';
								
								<option value="$room['id']" <?= $selected ?> > <?= $room['name'] ?> </option>
								
								
								<option value="$room['id']" <?= $room['id'] == $check_in['roomId'] ? 'selected' : '' ?> > <?= $room['name'] ?> </option>
							}

