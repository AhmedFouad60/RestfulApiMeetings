# Restful web service for Meeting 


### [project Statement](#)  

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
    - [X] <a>post</a>  /api/v1/meeting
        * Request
            ```json
            {
                "Title":"title",
                "Description":"description",
                "Time":"15/2/2017",
                "User_ID":"2"
            }
            ```
        * Response 
            ```json 
            {
                "Summary": "This is good Meeting",
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__",
                "URL":"__URL___"
                "Users":"__USERS__"
            }
            ```
    > ##### Update Meeting 
    - [X] <a>PATCH</a>  /api/v1/meeting
        * Request
            ```json
            {
                "User_ID":   "__USERID__"
                "Meeting_ID" :       "user@example.com",
                "Meeting_data":     {
                    "Title":"title",
                    "Description":"description",
                    "Time":"15/2/2017",
                    "User_ID":"2"
                }
            }
            ```
        * Response 
            ```json 
            {
                "Summary": "This is good Meeting",
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__",
                "URL":"__URL___"
                "Users":"__USERS__"
            }
            ``` 
            > ##### Delete Meeting
    - [X] <a>DELETE</a>  /api/v1/meeting
        * Request
            ```json
            {
                "User_ID":   "__USERID__",
                "Meeting_ID" :       "__MeetingID__"   
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__"
                
            }
            ``` 
            > ##### Register Meeting
    - [X] <a>post</a>  /api/v1/meeting/register
        * Request
            ```json
            {
                "User_ID":   "__USERID__",
                "Meeting_ID" :       "__MeetingID__" 
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__",
                "user":{
                        "first_name":   "ahmed"
                         "email" :       "user@example.com",
                },
                "URL":"__URL__"
            }
            ``` 
            > ##### UnRegister Meeting
    - [X] <a>DELETE</a>  /api/v1/meeting/unregister
        * Request
            ```json
            {
                "User_ID":   "__USERID__",
                "Meeting_ID" :       "__MeetingID__" 
            }
            ```
        * Response 
            ```json 
            {
                "msg": "__MESSAGE_TEXT__",
                "error": "___ERROR_VALUE__",
                "user":{
                        "first_name":   "ahmed"
                         "email" :       "user@example.com",
                },
                "URL":"__URL__"
            }
            ```             
            > ##### Get List of  Meetings
    - [X] <a>GET</a>  /api/v1/meeting
        * Request
            ```json
            {
                null
            }
            ```
        * Response 
            ```json 
            {
                List of all Meeting,
                URL
            }
            ```                 
            
            > ##### Get Meeting
    - [X] <a>post</a>  /api/v1/users/signin
        * Request
            ```json
            {
                "Meeting_ID" :       "__MeetingID__" 
            }
            ```
        * Response 
            ```json 
            {
                Meeting_info,
                URL
            }
            ```                 
            
                        
