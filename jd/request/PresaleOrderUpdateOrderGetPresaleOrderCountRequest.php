<?php
class PresaleOrderUpdateOrderGetPresaleOrderCountRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.presale.order.updateOrder.getPresaleOrderCount";
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
                                                        		                                    	                   			private $userPin;
    	                        
	public function setUserPin($userPin){
		$this->userPin = $userPin;
         $this->apiParas["userPin"] = $userPin;
	}

	public function getUserPin(){
	  return $this->userPin;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderStatusItem;
                              public function setOrderStatusItem($orderStatusItem ){
                 $this->orderStatusItem=$orderStatusItem;
                 $this->apiParas["orderStatusItem"] = $orderStatusItem;
              }

              public function getOrderStatusItem(){
              	return $this->orderStatusItem;
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

                        	                   			private $skuID;
    	                        
	public function setSkuID($skuID){
		$this->skuID = $skuID;
         $this->apiParas["skuID"] = $skuID;
	}

	public function getSkuID(){
	  return $this->skuID;
	}

                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                            }





        
 

