<?php
// echo __DIR__.'/../database/config.php';
// die();
include_once __DIR__ . '../database/config.php';
class Cart extends config implements operations
{

    private $product_id;
    private $user_id;
    private $quntity;
 
    /**
     * Get the value of product_id
     */ 
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */ 
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of quntity
     */ 
    public function getQuntity()
    {
        return $this->quntity;
    }

    /**
     * Set the value of quntity
     *
     * @return  self
     */ 
    public function setQuntity($quntity)
    {
        $this->quntity = $quntity;

        return $this;
    }

        //================================ Functions Here =====================================================
        public  function create() {}
        public function update() {}
        public function read() {}
        public function delete()  {}  
}
