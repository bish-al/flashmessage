# flashmessage


Helper composer package to display flash message on laravel projects.


Follow these simple steps to start:

1. Install package 
    ```terminal
        composer require bishal/flashmessage
    ```
2. Install Tailwind CSS or simply add latest default configuration build via CDN:
    ```html
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    ```
3. Push flash message as shown below (Flash::display($message, $colourType)), I have just added on the Route web.php file to get started but it can be added anywhere else as required:
      
      ```php

          use Bishal\FlashMessage\App\Models\Flash;

          Route::get('/', function () {

              Flash::display('Your flash message here!', 'success');

              return view('welcome');
          });
      ```
      
      you have these 4 options for flashColourType:
      
        * success = green background colour 
        * danger = red background colour 
        * warning = orange background colour 
        * info = blue background colour 

4. Finally, just add html flash tag on your blade file as below:
    
    ```html
      <x-flashmessagecomponent-flash /> 
    ```
    This should display a flash message on your browser with correct background colour as required.

    ![Screenshot](success.png)
    ![Screenshot](warning.png)
    ![Screenshot](danger.png)
    ![Screenshot](info.png)

