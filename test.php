<?php

interface human{

   public function run($param);
}

class welCome implements human{

   private $init = "1";

   private $first = array('2','3','4','5','6','7','8','9');
   private $sec = array('1','2','3','4','5','6','7','8','9'); 

   function __construct($insa){
     echo $insa;
   }
  
   function gobsem(){

    foreach($this->first as $val1){

	    foreach($this->sec as $val2){

            $result = $val1 * $val2;
	    	echo $val1; 
	    	echo "*"; 
	    	echo $val2; 
	    	echo "="; 	
	    	echo $result ."<br>";
	    }

    	echo $val;
    }

   }
	public function run($param) {

        return 1;
	}

}

$start = new welCome("Hi2");

$start->run('1');

echo "<br><br>";
/**********************************/

class Setter{



  public $n;
  private $x  = array('a'=> 1, 'b'=> 2, 'c'=> 3);

  function __get($nm){

    print "Getting [$nm]<br>\n";

    if(isset($this->x[$nm])){
       $r = $this->x[$nm];
       print "Returning: $r<br/>\n";
       return 50;
    }else{

    	print "Nothing!<br/>\n";
    }
  }

  function __set($nm, $val){

    print "Setting [$nm] to $val<br/>\n";

    if(isset($this->x[$nm])){
       $this->x[$nm] = $val;
       print "OK!<br/>\n";
    }else{

        print "Not OK!<br/>\n";
    }

}




  }


$foo = new Setter();

$foo->n = 1;


$foo->a = 100;
$foo->a++;
$foo->z++;

?>
