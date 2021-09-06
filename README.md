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