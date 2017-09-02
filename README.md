# Redis for codeigniter

You can easily integrate [Predis](https://github.com/nrk/predis) flexible redis client in codeigniter 

# Initialisation redis server

open file `libraries/Redis.php` and set your redis server details

```php
$client = new Predis\Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379 // redis default port
        ]);
```

# Usage
You should load redis `library` and initialise `config` method in your application like this 

```php
$this->load->library('redis');
$redis = $this->redis->config();


// Set data 
$redis->set('text','Hello Redis');

// Get data
$redis->get('text'); //Output: Hello Redis
```
# More info about Predis usage
Please visit [Predis](https://github.com/nrk/predis)
