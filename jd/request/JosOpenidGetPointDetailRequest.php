<?php
class JosOpenidGetPointDetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.openid.getPointDetail";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $openId;
    	                        
	public function setOpenId($openId){
		$this->openId = $openId;
         $this->apiParas["openId"] = $openId;
	}

	public function getOpenId(){
	  return $this->openId;
	}

                        	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $startRowKey;
    	                        
	public function setStartRowKey($startRowKey){
		$this->startRowKey = $startRowKey;
         $this->apiParas["startRowKey"] = $startRowKey;
	}

	public function getStartRowKey(){
	  return $this->startRowKey;
	}

                            }





        
 

