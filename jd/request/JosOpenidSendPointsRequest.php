<?php
class JosOpenidSendPointsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.openid.sendPoints";
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
                                                        		                                    	                   			private $sourceType;
    	                        
	public function setSourceType($sourceType){
		$this->sourceType = $sourceType;
         $this->apiParas["sourceType"] = $sourceType;
	}

	public function getSourceType(){
	  return $this->sourceType;
	}

                        	                   			private $openId;
    	                        
	public function setOpenId($openId){
		$this->openId = $openId;
         $this->apiParas["openId"] = $openId;
	}

	public function getOpenId(){
	  return $this->openId;
	}

                        	                        	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                        	                   			private $sourceComment;
    	                        
	public function setSourceComment($sourceComment){
		$this->sourceComment = $sourceComment;
         $this->apiParas["sourceComment"] = $sourceComment;
	}

	public function getSourceComment(){
	  return $this->sourceComment;
	}

                        	                   			private $points;
    	                        
	public function setPoints($points){
		$this->points = $points;
         $this->apiParas["points"] = $points;
	}

	public function getPoints(){
	  return $this->points;
	}

                            }





        
 

