<?php namespace Novembre;
/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author Djb
*/

class Input
{
    public function debug( $data )
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}
