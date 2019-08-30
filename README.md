# ShootCrowd
A Competitive Programing Question's solution using Linked List in PHP and others.

Quetion:
  There are 100 People (N People) standing in a circle. The first person has a Gun, He/She will shoot the next person and pass the            gun to next alive person. This will continue until there is only 1 surviver left. You have to tell who will survive.
  
Answer:
  if there are 100 people then 73rd person will survive.
  
Solution:
  I have used the circular linked list to solve this problem, I just changed the pointer of a node to next alive person node unless and untill only one node is left.
  
  I innitially made this in PHP, taking Linked list refrence from  @author Sameer Borate | codediesel.com . I know PHP is not a typical language for competitive but see it works.
  
  The same Problem is solved by @prateektakoria using C++ , his code is also provided in case if you wonder. Please feel free to add solutions in other languages too :)
  
Instruction(s):

  PHP:
    This php file is ment to be run in terminal rather than in a web browser. just open terminal in the same directory and execute "php ShootCrowd.php" then enter the value of N (numberof people in circle) and then you will get your answer.
