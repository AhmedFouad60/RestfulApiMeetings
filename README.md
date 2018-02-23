# Restful web service for Meeting 


### [project Statement]()  

* `Users` should be able to `Create` ,`Update` And `delete` meetings.   
*  furthermore ,`other` users should be able to  `Register` and `unRegister` for any created Meeting 
* lately,it should be possible to `retrieve` a list of all Meetings or data about an `individual meeting`

API's
-
* Users
    > ##### Sign In  
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "email":"user@example.com",
                "password":"password"
            }
            ```
        * Response 
            ```json 
            {
                "token": "__TOKEN__ IF SUCCESS",
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ```
    > ##### Sign Up 
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                "password":     "password"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ```    
* Meetings
    > ##### Create Meeting  
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "email":"user@example.com",
                "password":"password"
            }
            ```
        * Response 
            ```json 
            {
                "token": "__TOKEN__ IF SUCCESS",
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ```
    > ##### Update Meeting 
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                "password":     "password"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ``` 
            > ##### Delete Meeting
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                "password":     "password"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ``` 
            > ##### Register Meeting
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                "password":     "password"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ``` 
            > ##### UnRegister Meeting
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                "password":     "password"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ```             
            > ##### Get List of  Meetings
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                "password":     "password"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ```                 
            
            > ##### Get Meeting
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                "password":     "password"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__"
            }
            ```                 
            
## Some Commands Used            
    
* #### Create controller with helper function 
    ```php
    >    php artisan make:controller MeetingController --resourse
    >    php artisan make:controller RegistrationController --resourse
    >    php artisan make:controller AuthController 
# hello
    
    
    
            
            
            
            
            
            
                        
