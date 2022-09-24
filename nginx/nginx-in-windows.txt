### How to install and run nginx server in windows mechine

1. Download nginx server and extract it. Then move it to the C drive
http://nginx.org/en/download.html

2. Open cmd in that folder and run
>> start nginx

3. Now the server will start at localhost. Type local hos in your browser.

4. Other command for nginx -

*** fast shutdown
>> nginx -s stop

*** graceful shutdown
>> nginx -s quit

*** changing configuration, starting new worker processes with a new configuration, graceful shutdown of old worker processes
>> nginx -s reload

*** re-opening log files	
>> nginx -s reopen



### How to run php in nginx server (https://www.nginx.com/resources/wiki/start/topics/examples/phpfastcgionwindows/)
https://dev.to/ilhamsabir/windows-10-nginx-php-2oef

1. Open nginx.conf file located in nginx/conf folder
2. Scroll down and edit the following - 

        location / {
            root   html;
            index  index.php index.html index.htm;
        }


        # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
        #
        location ~ \.php$ {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }

3. Open php.ini file and enable the following configurations and save it
    extension_dir = "ext" 
    enable_dl = On 
    cgi.force_redirect = 1 
    fastcgi.impersonate = 1 
    cgi.rfc2616_headers = 1 
    extension=php_gd2.dll 
    extension=php_mbstring.dll 
    extension=php_exif.dll 
    extension=php_mysql.dll 
    extension=php_mysqli.dll 
    extension=php_pdo_mysql.dll

4. nginx uses php fastcgi deamon to communicate with php on windows. open cmd on php binary folder and run 

>> php-cgi.exe -b 127.0.0.1:<port>

5. Now run nginx server and create a php file inside the root (html) directory
6. Open your browser and type localhost.
