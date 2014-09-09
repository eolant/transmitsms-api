## TransmitSMS-API for Laravel

Provides an implementation for the TransmitSMS-API as used by BurstSMS (burstsms.com.au)

Original class was developed by BurstSMS and this is just a package of their class and is not an official module it is something I packaged up to make it easier for using their system.  

##  Documentation

To send a message you will require an account with a provider using the TransmitSMS API such as BurstSMS.  Use the following syntax to initialise and send a message in Laravel 4.

	 $sms = new \Abreeden\TransmitsmsApi\TransmitsmsApi("API_KEY",'API_Secret');
	 $result=$sms->sendSms("Message goes here","Destination Number","From");

