<?php    
    
    class Constructor
        
    {
        
    //constructor
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    
    //Hydrate function will initiate all the attributes
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    }
?>