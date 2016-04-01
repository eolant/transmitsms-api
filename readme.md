## TransmitSMS-API for Laravel

Provides an implementation for the TransmitSMS-API as used by BurstSMS (burstsms.com.au)

Original class was developed by BurstSMS and packaged by abreeden for use in Laravel 4. This package have been update for **Laravel 5**. 

## Installation

Once you have installed this package, you will need to add the service provider to the `providers` array in `app.php` config file:

    Abreeden\TransmitsmsApi\TransmitsmsApiServiceProvider
or

    Abreeden\TransmitsmsApi\TransmitsmsApiServiceProvider::class

Next, you may want to add the TransmitSMS facade. To do that, you will need to add under the `aliases` array, also in the `app.php` config file:

    'TransmitSMS' => Abreeden\TransmitsmsApi\Facades\TransmitsmsApiFacade
or

    'TransmitSMS' => Abreeden\TransmitsmsApi\Facades\TransmitsmsApiFacade::class
    
Finally, you will need to publish the config file using the following command:

    $ php artisan vendor:publish --provider="Abreeden\TransmitsmsApi\TransmitsmsApiServiceProvider"
    
**Remember to set your API and secret keys in the config file or .env file!**

##  Documentation

To send a message you will require an account with a provider using the TransmitSMS API such as BurstSMS.  Use the following syntax to initialise and send a message in Laravel 5.

Without facade:

    $sms = new \Abreeden\TransmitsmsApi\TransmitsmsApi("API_KEY", "SECRET");
    $result = $sms->sendSms("Message goes here", "Destination Number", "From");
    
With facade:
	
    $result = \TransmitSMS::sendSms("Message goes here", "Destination Number", "From");

