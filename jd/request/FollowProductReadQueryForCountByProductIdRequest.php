<?php
class FollowProductReadQueryForCountByProductIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.follow.product.read.queryForCountByProductId";
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
                                    	                        	                   			private $productId;
    	                        
	public function setProductId($productId){
		$this->productId = $productId;
         $this->apiParas["productId"] = $productId;
	}

	public function getProductId(){
	  return $this->productId;
	}

}





        
 

