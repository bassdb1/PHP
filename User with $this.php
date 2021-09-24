class User {

 // The class properties.
 public $firstName;

 public $lastName;

 // '$this' keyword enables us to approach the class properties  

 // A method that says hello to the user.
 public function hello()
 {
   return "hello, " . $this -> firstName;
 }
}

// Create New Objects from the User Class
$user1 = new(user)

// Set the first and last name of the new User Object
$user1 -> firstName = "Jonnie";
$user1 -> lastName = "Roe";


//Say hello to the new object
echo $user1 -> hello();