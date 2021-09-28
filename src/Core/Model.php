<?php
    namespace MVC\Core;
    class Model
    {
        public function getPropertise()
        {   
            // Tra gia tri ve mang lien hop ( ko truyen doi so se tra ve null )
            $propertise = get_object_vars($this);
            return $propertise;
        }
    }
