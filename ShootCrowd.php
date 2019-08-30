<?php
 
/** 
* Title: Single linked list
* Description: Implementation of a single linked list in PHP 
* @author Sameer Borate | codediesel.com
* @version 1.0.1 Updated: 16th August 2012
*/
 
class ListNode
{
    /* Data to hold */
    public $data;
 
    /* Link to next node */
    public $next;
 
 
    /* Node constructor */
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
 
}
 
 
class LinkList
{
    /* Link to the first node in the list */
    private $firstNode;
 
    /* Link to the last node in the list */
    private $lastNode;
 
    /* Total nodes in the list */
    private $count;
 
 
 
    /* List constructor */
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
 
 
    public function insertFirst($data)
    {
        $link = new ListNode($data);
        
        $this->firstNode = &$link;
        $link->next = $this->firstNode;
 
        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if($this->lastNode == NULL)
            $this->lastNode = &$link;
 
        $this->count++;
    }
 
    public function insertLast($data)
    {
        if($this->firstNode != NULL)
        {
            $link = new ListNode($data);
            $this->lastNode->next = $link;
            $link->next =  $this->firstNode; //circular list
            $this->lastNode = &$link;
            $this->count++;
        }
        else
        {
            $this->insertFirst($data);
        }
    }

    public function killWithGun()
    {
        if($this->firstNode != NULL)
        {
                //kill  them all
                $gun = $this->firstNode; //iskay pass bandok h bc            
                     while($this->count > 1){
                         //lets start shooting
                        if($this->count == 2){ //last 2 people
                            $gun->next = $gun; //kill other bastard and end this shit
                            $this->firstNode = $gun;
                            $this->lastNode = $gun;
   
                        }else {
                            $gun->next = $gun->next->next;  //kill next, then next 2 next

                        }
                        $gun = $gun->next; //pass the gun bsdk
                        $this->count--; //1 ded
                    }      
            
        }else{
        throw new Exception("No One To kill");
         //no one to kill
        }
    }

    public function lastManStanding()
    {        
            return "\n ----------- \n Person Number: ".$this->firstNode->data."  is your Surviver \n ----------- \n";
    }    
}

//problem solution
Echo("\n Enter the number of People in Circle: ");
$number = stream_get_line(STDIN, 1024, PHP_EOL);
$list = new LinkList;
 try{
    for($i=1;$i <= $number;$i++){
        $list->insertLast($i);
    }

    $list->killWithGun();

    echo $list->lastManStanding() ;
 }catch (Exception $e){
     echo "\n ----------- \n Error Triggered:  **** ".$e->getMessage()." \n ----------- \n";
 }
?>
