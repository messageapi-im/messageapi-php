# messageapi.im

> [Documentaion](http://messageapi-doc.azurewebsites.net/)

> To authorize, use this code:

```php
require_once ('messageapi.php');
$messageapi=new \messageapi\messageapi('<YOUR_APP_SECRET>');
```


## Quick example:
#### Create Integration
```php
$result=$messageapi->integrations->Create('{
    "type":"line",
    "bot_id":"<BOT_ID>",
    "access_token":"<ACCESS_TOKEN>"
}');
```

#### Create Customer
```php
$result=$messageapi->customers->Create('{
    "email":"email@domain.com",
    "line":{"user_id":"225451339750443406022273244"}
}')
```


#### Send message
```php
$result=$messageapi->messaging->SendMessage('{
    "_customer_id":"customer_id",
    "messengerType":"line",
    "message":{
        "type":"text",
        "content":"your text"
    }
}')
```

#### Add Webhook
```php
$result=$messageapi->webhooks->Create('{
    "event":"received_message",
    "webhook_url":"http://yourpath.com/path"
}')
```


# More Examples:
### Integrations
##### Get

```php
$messageapi->integrations->Get('<ID_INTEGRATION>');
```
```php
$messageapi->integrations->GetAll();
```
##### Create
```php
$messageapi->integrations->Create('{
    "type":"line",
    "bot_id":"<BOT_ID>",
    "access_token":"<ACCESS_TOKEN>"}');
```

##### Update
```php
$messageapi->integrations->Update('<ID_INTEGRATION>','{
    "type":"line",
    "bot_id":"<BOT_ID>",
    "access_token":"<ACCESS_TOKEN>"}');
```
##### Delete
```php
 $messageapi->integrations->Remove('<ID_INTEGRATION>');
```

### Customers
##### Get

```php
$messageapi->customers->Get('<ID_CUSTOMER>');
```
```php
$messageapi->customers->GetAll();
```

##### Create
```php
$messageapi->customers->Create('{
    "email":"email@domain.com",
    "line":{"user_id":"<USER_ID_OF_LINE>"}}');
```

##### Update
```php
$messageapi->customers->Create('<ID_CUSTOMER>','{
    "email":"email@domain.com",
    "line":{"user_id":"<USER_ID_OF_LINE>"}}');
```
##### Delete
```php
$messageapi->customers->Remove('<ID_CUSTOMER>');
```