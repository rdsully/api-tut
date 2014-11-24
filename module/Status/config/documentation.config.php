<?php
return array(
    'Status\\V1\\Rpc\\Ping\\Controller' => array(
        'GET' => array(
            'description' => 'Ping the API for availability and receive a timestamp for acknowledgement/',
            'request' => null,
            'response' => '{
   "ack": "Acknowledge the request with a timestamp"
}',
        ),
        'description' => 'Ping the API for availability.',
    ),
    'Status\\V1\\Rest\\Status\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'description' => 'Retrieve a paginated list of status messages.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/status"
       },
       "first": {
           "href": "/status?page={page}"
       },
       "prev": {
           "href": "/status?page={page}"
       },
       "next": {
           "href": "/status?page={page}"
       },
       "last": {
           "href": "/status?page={page}"
       }
   }
   "_embedded": {
       "status": [
           {
               "_links": {
                   "self": {
                       "href": "/status[/:status_id]"
                   }
               }
              "message": "A status message of no more than 140 characters",
              "user": "The user submitting the status message.",
              "timestamp": "The timestamp when the status message was last modified."
           }
       ]
   }
}',
            ),
            'PUT' => array(
                'description' => null,
                'request' => null,
                'response' => null,
            ),
            'PATCH' => array(
                'description' => null,
                'request' => null,
                'response' => null,
            ),
            'DELETE' => array(
                'description' => null,
                'request' => null,
                'response' => null,
            ),
            'description' => 'Manipulate lists of status messages.',
            'POST' => array(
                'description' => 'Create a new status messages.',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => null,
            ),
        ),
        'entity' => array(
            'GET' => array(
                'description' => 'Retrieve a status message.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/status[/:status_id]"
       }
   }
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
            ),
            'POST' => array(
                'description' => null,
                'request' => null,
                'response' => null,
            ),
            'PUT' => array(
                'description' => 'Replace a status message.',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => null,
            ),
            'PATCH' => array(
                'description' => 'Update a status message.',
                'request' => '{
   "message": "A status message of no more than 140 characters",
   "user": "The user submitting the status message.",
   "timestamp": "The timestamp when the status message was last modified."
}',
                'response' => null,
            ),
            'DELETE' => array(
                'description' => 'Delete a status message',
                'request' => null,
                'response' => null,
            ),
        ),
        'description' => 'Create, manipulate, and retrieve status messages.',
    ),
);
