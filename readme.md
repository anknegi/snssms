Installation
The AWS Service Provider can be installed via Composer by requiring the aws/aws-sdk-php-laravel package in your project's composer.json.
{ "require": { "aws/aws-sdk-php-laravel": "~3.0" } }
Then run a composer install

Laravel
In Laravel find the providers key in your config/app.php and register the AWS Service Provider.
'providers' => array( // ... Aws\Laravel\AwsServiceProvider::class, )
Find the aliases key in your config/app.php and add the AWS facade alias.
'aliases' => array( // ... 'AWS' => Aws\Laravel\AwsFacade::class, )

Configuration
By default, the package uses the following environment variables to auto-configure the plugin without modification:
AWS_ACCESS_KEY_ID AWS_SECRET_ACCESS_KEY AWS_REGION (default = us-east-1)
