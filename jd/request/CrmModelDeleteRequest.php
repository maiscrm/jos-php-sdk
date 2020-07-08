<?php
class CrmModelDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.model.delete";
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
                                    	                        	                   			private $modelId;
    	                                                            
	public function setModelId($modelId){
		$this->modelId = $modelId;
         $this->apiParas["model_id"] = $modelId;
	}

	public function getModelId(){
	  return $this->modelId;
	}

}





        
 

