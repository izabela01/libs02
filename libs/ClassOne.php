<?php


namespace these;
// this is a parent class

echo "is it even updating";
Class Person {
    
    
    // Visibility chosen is protected due to the sensitive nature of the data such as names NOT PRIVATE AS 
    // the next class gets inherited by it. 
    protected $firstName;
    protected $secondName;
    protected $DOB;
    protected $username;
    protected $password;

    // this is a constructor method allowing us to pass different parameters into object instances rather than hard
    // coding
    public function __construct($firstName, $secondName, $DOB, $username, $password) {
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->DOB = $DOB;
        $this->username = $username;
        $this->password = $password;
    }

    // As our properties are private visibility, we need a function/method in order to display the name property
    public function getfirstName() {
        return "$this->firstName is a library member";
    }

}

Class Member extends Person {

    private $LibraryCardNumber;    
    // We are taking all the information from the parent class, and then just adding in the LibraryCardNumber 

    public function __construct($firstName, $secondName, $DOB, $username, $password, $LibraryCardNumber) {
        $this->LibraryCardNumber = $LibraryCardNumber;
        parent::__construct($firstName, $secondName, $DOB, $username, $password);
    }

    public function Login() {
        echo "Welcome $this->username";
    }

    public function Logout() {
        echo "You've been logged out $this->username";
    }

}

class Librarian extends Person {

    private $staffNumber;

    public function __construct($firstName, $secondName, $DOB, $username, $password, $staffNumber) {
        $this->staffNumber = $staffNumber;
        parent::__construct($firstName, $secondName, $DOB, $username, $password);
    }

    public function LoanBook() {
        return $this->staffNumber;
    }

    public function returnBook() {
        return $this->staffNumber;
    }

    public function contactMember() {
        return $this->staffNumber;
    }

}

class Books {
    
    public $title;
    public $author;
    public $yearPublished;
    public $genre;
            
  public function __construct($title, $author, $yearPublished, $genre) {
      $this-> title = $title ;
      $this-> author = $author;
      $this-> yearPublished = $yearPublished;
      $this-> genre = $genre;
              
  }        
    
  // ALL I NEEDED WAS $THIS->title  
  public function Searchbook($attempt){
            if ($attempt == $this->title){
                echo "We have the book";
            }
            else {
            echo "No sorry";          
  }
  }
  public function SearchBookByAuthor($name){
          if ($name == $this->author){
          echo $this->title ;   
          }
}

public function UpdatingDetails($password, $pass, $cor){
    if ($password == $pass){
        echo PHP_EOL . "You are in, please enter the value you would like to change this to" . PHP_EOL;
        $numberone = stream_get_line(STDIN, 100, "\n");
        $this->$cor = $numberone ;
        if ($numberone != null) {
            echo "You are updating the book property **$this->$cor** with the value of **$numberone**";
        }
}    
    else{
        PHP_EOL . die ("Sorry, wrong password!! try again");
    }  
}
//    public function ShowMeBook(){
//    echo $this->title;
//    }

}

$pass = 34 ;

$a = 'title';
$b = 'author';
$c = 'yearPublished';
$d = 'genre';
        

//   if ($cor == 'yearPublished' && int $numberone){
//   
//        }

        
        



//$this->firstName = $firstName;
//$this->secondName = $secondName;
//$this->DOB = $DOB;
//$this->username = $username;
//$this->password = $password;
