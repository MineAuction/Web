<?php
require_once '../../init.inc.php';

class Paginator{
  private $perPage = 5;
	private $resultsCount;
	private $pagesCount;
	private $sql;
  private $showPage;
  
  public function __construct($perPage){
    if($perPage > 0){
      $this -> perPage = $perPage;
    }
  }
  
  public function setSQL($sql){
    $this->sql = $sql;
  }
	
	/**
	 * Get number of actually show page
	 */
	private function getPosition(){
			
	}
	
	public function getResultsCount(){
		$result = preg_replace('/SELECT.*?\FROM|/', '', $this -> sql);	
		$result = "SELECT COUNT(*) AS count FROM " . $result;
		
		$res = DB::assoc(DB::query($result));
    
		$this -> resultsCount = $res['count'];
    $this->pagesCount = ceil($this->resultsCount / $this->perPage);
    
		return $res['count'];
	}
  
	/**
	 * Get array which contains array to navigate in paginator
	 */
  public function getNavBar(){
    $nav = array();
    
    # start
    $nav[] = array(
      'title' => "<<", 
      'get' => 1, 
      'disabled' => "", 
    );
    $nav[] = array(
      'title' => "<", 
      'get' => ($this->showPage - 1), 
      'disabled' => "",
    );
    
    
    # middle
    $nav[] = array(
      'title' => $this->showPage, 
      'get' => $this->showPage, 
      'disabled' => "disabled",
    );
    

    # end
    $nav[] = array(
      'title' => ">", 
      'get' => ($this->showPage + 1), 
      'disabled' => "",
    );
    $nav[] = array(
      'title' => ">>", 
      'get' => $this->pagesCount, 
      'disabled' => "",
    );
    
    foreach($nav as $row){
      echo " |<a href='".$row['get']."'>".$row['disabled']."_".$row['title']."</a>| ";
    }
    echo "<br>";
    
		return $nav;
  }
  
  public function getPage($pageIndex){
    $pageIndex = ($pageIndex > $this->pagesCount) ? $this->pagesCount : $pageIndex; // fix out of range
    $this->showPage = $pageIndex;
  
		$limitFrom = ($pageIndex - 1) * $this->perPage;
		$limitTo = $this->perPage;
		
		$i = 1;
		$res = DB::query($this->sql . " LIMIT $limitFrom, $limitTo");
		while($row = DB::assoc($res)){
			echo $i++ . " " .$row['name']."<br>";		
		}
  }
    
}

$p = new Paginator(5);
$p->setSQL("SELECT * FROM ma_items_list WHERE itemSubID != -1 AND itemId != -1 ORDER BY itemID, itemSubID");
$p->getResultsCount();
$p->getPage(1);
$p->getNavBar();
