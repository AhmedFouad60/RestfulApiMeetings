# Restful web service for Meeting 


### [project Statement](#)  

* `Users` should be able to `Create` ,`Update` And `delete` meetings.   
*  furthermore ,`other` users should be able to  `Register` and `unRegister` for any created Meeting 
* lately,it should be possible to `retrieve` a list of all Meetings or data about an `individual meeting`

## Steps when writing Restful Service
* project statement from the customer of the Service
* Decomposite the statement to  api's parts 
* Writting API's  `{Request,Response}`
* GO TO LARAVEL project 
    * Writting the Routes
    * Writting controller's 
        * In controller :
            * `Test the API's`
                * extract the Inputs from the request 
                * Return Response
            * Validate the Inputs
            * Extract the inputs from the Request
            * Apply the business logic
            * Response Again


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
                "first_name":"ahmed"
                "email":"user@example.com",
                "password":"password"
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
    - [X] <a>post</a>  /api/v1/meeting?token=$Token
        * Request
            ```json
            {
                "Title":"title",
                "Description":"description",
                "Time":"time",
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__",
                "summary":"__SUMMARY__",
                "meeting_URL":"__MEETINGURL__",
                "partcipants":[
                    "ahmed","Ali","sayed" ...]
                
            }
            ```
    > ##### Update Meeting 
    - [X] <a>PATCH</a>  /api/v1/meeting?token=$Token
        * Request
            ```json
            {
                "Title": "title",
                "Description": "description",
                "Time":"time",
                "Meeting_ID":"meeting_id"
            }
            ```
        * Response 
            ```json 
            {
                 "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__",
                "summary":"__SUMMARY__",
                "meeting_URL":"__MEETINGURL__",
                "partcipants":[
                    "ahmed","Ali","sayed" ...]
            }
            ``` 
            > ##### Delete Meeting
    - [X] <a>DELETE</a>  /api/v1/meeting?token=$Token
        * Request
            ```json
            {
                "Meeting_ID":"meeting_id"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                
            }
            ``` 
            > ##### Register Meeting
    - [X] <a>post</a>  /api/v1/meeting/registration?token=$Token
        * Request
            ```json
            {
                "Meeting_ID":"meeting_id"
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "Meeting":[
                    "summary":"__SUMMARY__",
                    "meeting_URL":"__MEETINGURL__",
                    "partcipants":[
                                    "ahmed","Ali","sayed" ...]

                ],
                "User":[
                
                "first_name":   "ahmed"
                ],
                "UnRegisterLink":"__LINK__"
            }
            ``` 
            > ##### UnRegister Meeting
    - [X] <a>post</a>  /api/v1/meeting/unregistraion?token=$Token
        * Request
            ```json
            {
                "Meeting_ID":"meeting_id"
            }
            ```
        * Response 
            ```json 
            {
             "msg": "__MESSAGE_TEXT__",
                "Meeting_info":[
                    "summary":"__SUMMARY__",
                    "meeting_URL":"__MEETINGURL__",
                    "partcipants":[
                                    "ahmed","Ali","sayed" ...]

                ],
                "User_info":[
                
                "first_name":   "ahmed"
                "email" :       "user@example.com",
                
                ],
                "RegisterLink":"__LINK__"
            }
            ```             
            > ##### Get List of  Meetings
    - [X] <a>GET</a>  /api/v1/meeting
        * Request
            ```json
            {
                no-data
            }
            ```
        * Response 
            ```json 
            {
                "Meeting_info":MeetingInfo,
                "linkS_to_indivudal_meetin"
            }
            ```                 
            
            > ##### Get Meeting
    - [X] <a>GET</a>  /api/v1/meeting/{id}
        * Request
            ```json
            {
                "Meeting_ID":"meeting_id"

            }
            ```
        * Response 
            ```json 
            {
                "Meeting_info":MeetingInfo,
                "LINK_TO_LIST_OF_ALL_MEETINGS":"__link__"
            }
            ```                 
            
## Some Commands Used            
    
* #### Create controller with helper function 
    ```php
    >    php artisan make:controller MeetingController --resourse
    >    php artisan make:controller RegistrationController --resourse
    >    php artisan make:controller AuthController 
* #### Create Model with Migrations 
     ```php
        #To make model and migration tables
            >php artisan make:model Meeting -m
        #To migrate the tables to the DB
            >php artisan migrate 
    ```    

* #### Input Validation
```php
$this->validate($request,[	
		//$request is the collected data sent to the route
	‘Title’ => ‘required|max:120’, 			//rules
	‘content’=>’required’
]);
```

## Support Materials

### [Avaliable validation rules](https://laravel.com/docs/5.6/validation#available-validation-rules)
### [JWT Installation](https://github.com/tymondesigns/jwt-auth/wiki/Installation)
### [JWT Create token](https://github.com/tymondesigns/jwt-auth/wiki/Creating-Tokens)
## issues solutions
### [Generate random key for JWT](https://github.com/tymondesigns/jwt-auth/issues/1425)
### [Non-static method Tymon\JWTAuth\JWTAuth::attempt()](https://github.com/tymondesigns/jwt-auth/issues/182)
    
    
    
            
            
