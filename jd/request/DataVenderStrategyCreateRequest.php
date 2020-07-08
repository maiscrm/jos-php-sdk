<?php
class DataVenderStrategyCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.strategy.create";
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
                                                        		                                    	                        	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $description;
    	                        
	public function setDescription($description){
		$this->description = $description;
         $this->apiParas["description"] = $description;
	}

	public function getDescription(){
	  return $this->description;
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

                        	                   			private $applicationDomain;
    	                                                            
	public function setApplicationDomain($applicationDomain){
		$this->applicationDomain = $applicationDomain;
         $this->apiParas["application_domain"] = $applicationDomain;
	}

	public function getApplicationDomain(){
	  return $this->applicationDomain;
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





        
 

