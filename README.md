## Simple HTML Form Builder Laravel Package
Form Builder is created by Jogash Ray. It is developed to minimize the HTML form input field info. It is supported only four types of input field such as - text, select ( For dropdown), radio & checkbox.
## Installation

Laravel FormMaker requires PHP 7+. This particular version supports Laravel 5.3 ++

To get the latest version you need only require the package via Composer.
```
composer require jray/formbuilder
```

## Configuration
To register the server provider, simply add it to the array in config/app.php file
```
'providers' => [
    // Other Service Providers

    Jray\Formbuilder\FormBuilderServiceProvider::class,
]
```

You also need to add aliases in config/app.php file
```
'aliases' => [
            
            'FormBuilder' => Jray\Formbuilder\Facades\Formbuilder::class,
            ]
```
## Usage
Call the input($param) method of FormBuilder facade in your blade template.
```
{!! FormBuilder::input($param) !!}
Where, $param = [
            'name' => 'first_name',  //Optional
            'id' => 'first_name',  //Optional
            'type' => 'text',    // Required
            'class' => ' class1, class2, class2 '  // Optional,
            'value' => 'test name',  // Optional
            **
            **
            **
            ]
      $param must be an associative array & $param['type'] is required.
```
### Text Field
```
            $param = [
                  'name' => 'surname',  // String
                  'id' => 'surname-id',  // String 
                  'type' => 'text',
                  'class' => 'class1, class2, class3 ...... classN', // String data, multiple class must be declared in comma-seperated
                  'value' => 'Test surname', // String 
                  'required' => true or false, // Bool type
                  'custom-data' => 'this is meta info', // String data
            ];
```
### Select Field (DropDown option)
```
            $param = [
                  'name' => 'surname',  // String
                  'id' => 'surname-id',  // String 
                  'type' => 'select',
                  'class' => 'class1, class2, class3 ...... classN', // String data, multiple class must be declared in comma-seperated
                  'value' => [                   // associative array format [key-pair]
                        'option1' => 'option1',
                        'option2' => 'option2',
                        'option3' => 'option3',
                        'option4' => 'option4',
                  ],
                  'selected' => 'option2',  // Default Select option if you need  //optional
                  'required' => true or false, // Bool type
                  'custom-data' => 'this is meta info', // String data
            ];
```

### Checkbox Field
```
            $param1 = [
                  'name' => 'test-checkbox',  // String
                  'type' => 'checkbox',  // String
                  'class' => 'class1, class2, class3 ...... classN', // String data, multiple class must be declared in comma-seperated
                  'value' => 'Test check box 1', // String 
                  'checked' => true or false, // Bool type
                  'custom-data' => 'this is meta info', // String data
                  
            ];
            $param2 = [
                  'name' => 'test-checkbox',  // String
                  'type' => 'checkbox',   // String
                  'class' => 'class1, class2, class3 ...... classN', // String data, multiple class must be declared in comma-seperated
                  'value' => 'Test check box 2', // String 
                  'custom-data' => 'this is meta info', // String data
                  'disabled' => true or false // bool type
                  
            ];
            
            {!! FormBuilder::input($param1) !!}
            {!! FormBuilder::input($param2) !!}
```
### Radio Field
```
            $param1 = [
                  'name' => 'test-radio',  // String
                  'type' => 'radio',  // String
                  'class' => 'class1, class2, class3 ...... classN', // String data, multiple class must be declared in comma-seperated
                  'value' => 'Test radio 1', // String 
                  'checked' => true or false, // Bool type
                  'custom-data' => 'this is meta info', // String data
                  
            ];
            $param2 = [
                  'name' => 'test-radio',  // String
                  'type' => 'radio',   // String
                  'class' => 'class1, class2, class3 ...... classN', // String data, multiple class must be declared in comma-seperated
                  'value' => 'Test radio 2', // String 
                  'custom-data' => 'this is meta info', // String data
                  'disabled' => true or false // bool type
                  
            ];
            
            {!! FormBuilder::input($param1) !!}
            {!! FormBuilder::input($param2) !!}
```
## Example :
Create a welcome.blade.php file in the resouces/views folder - Same as 
```
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                margin: 0px;
                padding: 0px;
            }
        </style>
    </head>
    <body>

    <nav class="navbar navbar-inverse" style="    border-radius: 0px">
        <h3 class="navbar-text">Simple Form Builder Laravel Package</h3>
    </nav>
  
    <div class="container">
        @php
            $text_data = [
                'id' => 'my_id', 
                'class' => 'form-control, class2, class3,form-control, primary, input-lg',
                'type' => 'text',
                'value' => '100',
                'required' => true

            ];

            // For select element, value must in associative_array format ['option_value' => 'option']
            $option_data = [
                'id' => 'select_option_id', 
                'class' => 'form-control',
                'type' => 'select',
                'value' => [
                    'option1' => 'option1',
                    'option2' => 'option2',
                    'option3' => 'option3',
                    'option4' => 'option4',
                    ],
                'required' => true,
                'selected' => 'option3'
            ];

            // For checkbox field
            $checkbox_data1 = [
                'name' => 'check_box', 
                'class' => '',
                'type' => 'checkbox',
                'value' => 'checkbox1',
            ];
            $checkbox_data2 = [
                'name' => 'check_box', 
                'class' => '',
                'type' => 'checkbox',
                'value' => 'checkbox1',
            ];
            $checkbox_data3 = [
                'name' => 'check_box', 
                'class' => '',
                'type' => 'checkbox',
                'value' => 'checkbox1',
                'checked' => true
            ];
            // For Radio field
            $radio_data1 = [
                'name' => 'radio_field', 
                'class' => '',
                'type' => 'radio',
                'value' => 'radio_val',
            ];
            $radio_data2 = [
                'name' => 'radio_field', 
                'class' => '',
                'type' => 'radio',
                'value' => 'radio_val',
            ];
            $radio_data3 = [
                'name' => 'radio_field', 
                'class' => '',
                'type' => 'radio',
                'value' => 'radio_val',
                'checked' => true
            ];
        @endphp
        <label for="select_ele">Text Input Field:</label>
        {!! FormBuilder::input($text_data) !!}
        <br><br>
        <label for="select_ele">Select Field:</label>
        {!! FormBuilder::input($option_data) !!}
        <br><br>
        <label for="select_ele">Checkbox Field:</label>
        <label class="checkbox-inline">  {!! FormBuilder::input($checkbox_data1) !!} Checkbox 1</label>
        <label class="checkbox-inline">  {!! FormBuilder::input($checkbox_data2) !!} Checkbox 2</label>
        <label class="checkbox-inline">  {!! FormBuilder::input($checkbox_data3) !!} Checkbox 3</label>
            
        <br><br>
        <label for="select_ele">Radio Field:</label>
        <label class="checkbox-inline">  {!! FormBuilder::input($radio_data1) !!} Radio 1</label>
        <label class="checkbox-inline">  {!! FormBuilder::input($radio_data2) !!} Radio 2</label>
        <label class="checkbox-inline">  {!! FormBuilder::input($radio_data3) !!} Radio 3</label>

    </div>

    </body>
</html>


```
