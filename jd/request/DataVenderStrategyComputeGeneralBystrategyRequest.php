<?php
class DataVenderStrategyComputeGeneralBystrategyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.strategy.compute.general.bystrategy";
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
                                                        		                                    	                        	                        	                   			private $strategy;
    	                        
	public function setStrategy($strategy){
		$this->strategy = $strategy;
         $this->apiParas["strategy"] = $strategy;
	}

	public function getStrategy(){
	  return $this->strategy;
	}

                        	                   			private $strategyParam;
    	                                                            
	public function setStrategyParam($strategyParam){
		$this->strategyParam = $strategyParam;
         $this->apiParas["strategy_param"] = $strategyParam;
	}

	public function getStrategyParam(){
	  return $this->strategyParam;
	}

                        	                   			private $pinType;
    	                                                            
	public function setPinType($pinType){
		$this->pinType = $pinType;
         $this->apiParas["pin_type"] = $pinType;
	}

	public function getPinType(){
	  return $this->pinType;
	}

                        	                   			private $partition;
    	                        
	public function setPartition($partition){
		$this->partition = $partition;
         $this->apiParas["partition"] = $partition;
	}

	public function getPartition(){
	  return $this->partition;
	}

                                                    	}





        
 

