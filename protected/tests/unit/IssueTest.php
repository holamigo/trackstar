<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class IssueTest extends CDbTestCase{
    
    public function testGetTypes() {
        $options = Issue::model()->typeOptions;
        $this->assertTrue(is_array($options));
        $this->assertTrue(3 == count($options));
        $this->assertTrue(in_array('Bug',$options));
        $this->assertTrue(in_array('Feature', $options));
        $this->assertTrue(in_array('Task', $options));
    }
}
?>
