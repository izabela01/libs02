<?php




class email{
    private $email;
    private $name;
    
    public function __construct($email, $name){
        $this->email= $email;
        $this->name=$name ;
    }
    
        public function checkEmail(){
            if (strpos($this->email, "@") > 10){
        
            
            echo $this->email;}
        }

          public function CountRight(){
              alert(temp.count("@")) 
              
          }  
            
}

$userone = new email('izdog@sky.com', 'poppy');
$userone->checkEmail();
        