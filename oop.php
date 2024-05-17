<?php
class Book {
 // TODO: Add properties as Private

 private $title, $availableCopies;
 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
     $this->title = $title;
     $this->availableCopies = $availableCopies;
     }

// TODO: Add getTitle method

    function getTitle() {
        echo $this->title;
    }

 // TODO: Add getAvailableCopies method
 
    function getAvailableCopies() {
        echo "Available Copies of '{$this->title}': {$this->availableCopies}";
    }


 // TODO: Add borrowBook method
 
    function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

 // TODO: Add returnBook method
    
    function returnBook() {
        $this->availableCopies++;
    }
}


class Member {
 // TODO: Add properties as Private

 private $name;

 public function __construct($name) {
      // TODO: Initialize properties
      $this->name=$name;
     }



 // TODO: Add getName method

    function getName() {
        echo $this->name;
    }
 
 // TODO: Add borrowBook method
 
    function borrowBook($book) {
        if ($book->borrowBook()) {
            // echo "Borrowed book successfully";
        } else {
            // echo "Book not available";
        }
    }


 // TODO: Add returnBook method
 
    function returnBook($book) {
        $book->returnBook();
    }
}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

$Book1= new Book("The Great Gatsby", 5);
$Book2= new Book("To Kill a Mockingbird", 3);



// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith

$Member1= new Member("John Doe");
$Member2= new Member("Jane Smith");


// TODO: Apply Borrow book method to each member

$Member1->borrowBook($Book1);
$Member2->borrowBook($Book2);


// TODO: Print Available Copies with their names:

$Book1->getAvailableCopies();
echo "\n";
$Book2->getAvailableCopies();

