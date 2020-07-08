<?php
class PopCrmTradePoints2TokenRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.crm.tradePoints2Token";
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
                                    	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $exchangeId;
    	                        
	public function setExchangeId($exchangeId){
		$this->exchangeId = $exchangeId;
         $this->apiParas["exchangeId"] = $exchangeId;
	}

	public function getExchangeId(){
	  return $this->exchangeId;
	}

}





        
 

