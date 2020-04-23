<?php

require_once 'libs/ClassOne.php';

use these\Person;
use these\Member;
use these\Librarian;
use these\Books;

echo "iz";

//  PEOPLE CLASS - Instansiating a new object instance
echo 'Person Class Code' . PHP_EOL;
$Person01 = new Person('Jimmy', 'Smith', '4/03/94', 'Jim_04', 'password123');
$Person02 = new Person('Liz', 'Harrington', '5/08/90', 'Liz03', 'opopo');
$Person03 = new Person('Ollie', 'Beaker', '4/05/92', 'Ols03', 'oeor');
echo $Person01->getfirstName();

//  echo $Person01-> getfirstName();  this allows us to access protected attributes as it is a public function 
// var_dump($Person01); prints all the data including the type regardless of the attributes visibility.
// this doesnt work if we apply privare visibility to the Person01 object -- echo $Person01->firstName; BUT does when 

// Member class
echo PHP_EOL . 'Member Class Code' . PHP_EOL;
$Member01 = new Member('tim', 'smith', '3/4/90', 'di', 'timiE', '89');
$Member02 = new Member('George', 'Den', '2/9/90','Georgie', 'Gdog', '67');
echo PHP_EOL . $Member01->Login();
echo PHP_EOL . $Member02->Logout();


// Librarian class objects 
echo 'Librarian Class Code' .PHP_EOL;
$librarian01 = new Librarian('Fatima', 'Al Ahmad', '24/12/93', 'Fatima1', 'ILoveOOP', '1');
echo $librarian01->LoanBook() . PHP_EOL;



// the books class code
echo 'Books Class Code'. PHP_EOL ;
$bookOne = new Books('Harry Potter', 'JK ROWLING', 1997, 'fantasy');
$bookOne->SearchBook('Harry Potter');
echo PHP_EOL;
$bookTwo = new Books("HappyFeet", 'Penguin', 1300, 'comic');

if ($bookOne->yearPublished > $bookTwo->yearPublished) {
    echo "DAMN HarryPots is young";
}


$bookOne->UpdatingDetails(34, $pass, 'author');





