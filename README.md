# Restful web service for Meeting 


### [project Statement]()  

1-`Users` should be able to `Create` ,`Update` And `delete` meetings.
2-furthermore ,`other` users should be able to  `Register` and `unRegister` for any created Meeting 
3-lately,it should be possible to `retrieve` a list of all Meetings or data about an `individual meeting`

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
