<?php
namespace php\Controller;

use \php\Types\ProjectPostType;

class Lead{
    
    public function renderLead(){
        $current_lead = get_queried_object();
        
    
        $args['car'] = get_post($current_lead->post_parent);
        
        return $args;
        
    }
    
}
?>