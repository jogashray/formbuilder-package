<?php
namespace Jray\Formbuilder;
class FormBuilder{
    /*
    * List of supported input types
    * @var Array
    */
    private $allowed_type = ['text', 'select', 'checkbox', 'radio'];

    public function __construct(){    }

    /**
    * Create a from input field
    * @param associative_array $data
    * @return HTML Format String
    */
    public function input($data){

        /** 
         * Check whether input type is supported or not
        */
        if(in_array($data['type'], $this->allowed_type)){

            // Get the attributes data such as - field name, class, id, value & custom info
            $attr = $this->setAttribute($data) ;

            //If the input type is "text"
            if($data['type'] == 'text'){
                
                return '<input '. $attr.' >';

            //If the input type is "select"
            }else if($data['type'] == 'select'){

                // Get the options with attributes
                $options = $this->getOption($data) ;
                return '<select'. $attr . '>'.$options. '</select>';
            
            //If the input type is "radio"
            }else if($data['type'] == 'radio'){
                return '<input '. $attr.' >';

            //If the input type is "checkbox"
            }else if($data['type'] == 'checkbox'){
                return '<input '. $attr.' >';
            }
        }else{
            return "Unsupported Input Type.";
        }

    }

    /**
     * Build a HTML attribute string from an associative_array.
     *
     * @param array $attributes
     *
     * @return string
     */
    public function setAttribute($attributes)
    {
        $attrs = [];
        /**
         * If the value key is in array format, unset it. Pass only string format 
         * Array format only for "Select" field, which is seperated from here
         */
        if(is_array($attributes['value'])){
            unset($attributes['value']) ;
        }
        foreach ($attributes as $key => $value) {
            $element = $this->getAttrElement($key, $value);

            if (! is_null($element)) {
                $attrs[] = $element;
            }
        }
        return count($attrs) > 0 ? ' ' . implode(' ', $attrs) : '';
    }
            /**
     * Build a single attribute element.
     *
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    protected function getAttrElement($key, $value)
    {
        /** For numeric keys we will assume that the value is a boolean attribute
        * where the presence of the attribute represents a true value and the
        * absence represents a false value.
        * This will convert HTML attributes such as "required" to a correct
        * form instead of using incorrect numerics.
        **/
        if (is_numeric($key)) {
            return $value;
        }

        // Treat boolean attributes as HTML properties
        if (is_bool($value) && $key !== 'value') {
            return $value ? $key : '';
        }
        
        //if (is_array($value) && $key === 'class') {
        //    return 'class="' . implode(' ', $value) . '"';

        if (! is_null($value) && is_string($value)) {
            return $key . '="'. $value .'"';
        }
    }
    /**
     * Create a select option element
     * @param array $data
     * @return HTML format String
     */
    protected function getOption($data){
        if(! is_array($data['value'])){
            return '';
        }
        $options = '';
        $select_option = $data['selected'] ? $data['selected'] : null ;
        foreach($data['value'] as $key => $value){
            $is_select = ($select_option == $value) ? 'selected' : ''; 
            $options .= '<option '.$is_select.' value="' .$value. '" >'. $key . '</option>'; 
        }
        return $options ;
    }
}