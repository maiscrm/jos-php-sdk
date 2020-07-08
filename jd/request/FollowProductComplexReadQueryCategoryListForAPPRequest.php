<?php
class FollowProductComplexReadQueryCategoryListForAPPRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.follow.product.complex.read.queryCategoryListForAPP";
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
                                    	                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                                            		                                    	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $tagId;
    	                        
	public function setTagId($tagId){
		$this->tagId = $tagId;
         $this->apiParas["tagId"] = $tagId;
	}

	public function getTagId(){
	  return $this->tagId;
	}

                        	                   			private $isBuy;
    	                        
	public function setIsBuy($isBuy){
		$this->isBuy = $isBuy;
         $this->apiParas["isBuy"] = $isBuy;
	}

	public function getIsBuy(){
	  return $this->isBuy;
	}

                        	                   			private $productName;
    	                        
	public function setProductName($productName){
		$this->productName = $productName;
         $this->apiParas["productName"] = $productName;
	}

	public function getProductName(){
	  return $this->productName;
	}

                        	                   			private $isReduce;
    	                        
	public function setIsReduce($isReduce){
		$this->isReduce = $isReduce;
         $this->apiParas["isReduce"] = $isReduce;
	}

	public function getIsReduce(){
	  return $this->isReduce;
	}

                        	                   			private $isSale;
    	                        
	public function setIsSale($isSale){
		$this->isSale = $isSale;
         $this->apiParas["isSale"] = $isSale;
	}

	public function getIsSale(){
	  return $this->isSale;
	}

                        	                   			private $isStock;
    	                        
	public function setIsStock($isStock){
		$this->isStock = $isStock;
         $this->apiParas["isStock"] = $isStock;
	}

	public function getIsStock(){
	  return $this->isStock;
	}

                        	                   			private $areaNo;
    	                        
	public function setAreaNo($areaNo){
		$this->areaNo = $areaNo;
         $this->apiParas["areaNo"] = $areaNo;
	}

	public function getAreaNo(){
	  return $this->areaNo;
	}

                        	                   			private $order;
    	                        
	public function setOrder($order){
		$this->order = $order;
         $this->apiParas["order"] = $order;
	}

	public function getOrder(){
	  return $this->order;
	}

                        	                   			private $customerCategoryId;
    	                        
	public function setCustomerCategoryId($customerCategoryId){
		$this->customerCategoryId = $customerCategoryId;
         $this->apiParas["customerCategoryId"] = $customerCategoryId;
	}

	public function getCustomerCategoryId(){
	  return $this->customerCategoryId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $firstCategoryId;
                              public function setFirstCategoryId($firstCategoryId ){
                 $this->firstCategoryId=$firstCategoryId;
                 $this->apiParas["firstCategoryId"] = $firstCategoryId;
              }

              public function getFirstCategoryId(){
              	return $this->firstCategoryId;
              }
                                                                                                                                        	                   			private $hasStock;
    	                        
	public function setHasStock($hasStock){
		$this->hasStock = $hasStock;
         $this->apiParas["hasStock"] = $hasStock;
	}

	public function getHasStock(){
	  return $this->hasStock;
	}

                        	                   			private $hasNoStock;
    	                        
	public function setHasNoStock($hasNoStock){
		$this->hasNoStock = $hasNoStock;
         $this->apiParas["hasNoStock"] = $hasNoStock;
	}

	public function getHasNoStock(){
	  return $this->hasNoStock;
	}

                        	                   			private $isOffline;
    	                        
	public function setIsOffline($isOffline){
		$this->isOffline = $isOffline;
         $this->apiParas["isOffline"] = $isOffline;
	}

	public function getIsOffline(){
	  return $this->isOffline;
	}

                        	                   			private $isFullCut;
    	                        
	public function setIsFullCut($isFullCut){
		$this->isFullCut = $isFullCut;
         $this->apiParas["isFullCut"] = $isFullCut;
	}

	public function getIsFullCut(){
	  return $this->isFullCut;
	}

                        	                   			private $isGiveaway;
    	                        
	public function setIsGiveaway($isGiveaway){
		$this->isGiveaway = $isGiveaway;
         $this->apiParas["isGiveaway"] = $isGiveaway;
	}

	public function getIsGiveaway(){
	  return $this->isGiveaway;
	}

                        	                   			private $isCoupon;
    	                        
	public function setIsCoupon($isCoupon){
		$this->isCoupon = $isCoupon;
         $this->apiParas["isCoupon"] = $isCoupon;
	}

	public function getIsCoupon(){
	  return $this->isCoupon;
	}

                        	                   			private $platForm;
    	                        
	public function setPlatForm($platForm){
		$this->platForm = $platForm;
         $this->apiParas["platForm"] = $platForm;
	}

	public function getPlatForm(){
	  return $this->platForm;
	}

                        	                   			private $isOfflineDown;
    	                        
	public function setIsOfflineDown($isOfflineDown){
		$this->isOfflineDown = $isOfflineDown;
         $this->apiParas["isOfflineDown"] = $isOfflineDown;
	}

	public function getIsOfflineDown(){
	  return $this->isOfflineDown;
	}

                        	                   			private $isNoStockDown;
    	                        
	public function setIsNoStockDown($isNoStockDown){
		$this->isNoStockDown = $isNoStockDown;
         $this->apiParas["isNoStockDown"] = $isNoStockDown;
	}

	public function getIsNoStockDown(){
	  return $this->isNoStockDown;
	}

                            }





        
 

