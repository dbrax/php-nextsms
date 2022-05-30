[![Latest Version on Packagist](https://img.shields.io/packagist/v/epmnzava/nextsms.svg?style=flat-square)](https://packagist.org/packages/epmnzava/nextsms)
[![Total Downloads](https://img.shields.io/packagist/dt/epmnzava/nextsms.svg?style=flat-square)](https://packagist.org/packages/epmnzava/nextsms)

## Installation

You can install the package via composer:

```bash
composer require epmnzava/nextsms
```

## Usage

```php
use Epmnzava\Nextsms;

public function send_sms_to_one_destination(){

    $sms=new Nextsms("https://messaging-service.co.tz", "Storewid", "3434");
    $response=$sms->sendSms("hellow world", "STOREWID", "255679079774");
}

public function send_sms_to_multiple_destination(){

    $sms=new Nextsms("https://messaging-service.co.tz", "Storewid", "3434");

    $response=$sms->send_sms_mutipledestination("hellow world", "STOREWID", ["255679079774","255768172016"]);
}

//getting all delivery reports

public function getAllDeliveryReports(){
    $sms=new Nextsms("https://messaging-service.co.tz", "Storewid", "3434");
    $response=$sms->getAllDeliveryReports();
}

//getting single message delivery report


public function getSingleMessageDeliveryReport(){
    $messageId="28089492984101631440";
    $sms=new Nextsms("https://messaging-service.co.tz", "Storewid", "3434");

        $reponse=$sms->getMessageDeliveryReport($messageId);

}


//get your  sms balance

public function getBalance(){
    $sms=new Nextsms("https://messaging-service.co.tz", "Storewid", "3434");

        $reponse=$sms->getSmsBalance();
}

```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email epmnzava@gmail.com instead of using the issue tracker.

## Credits

- [Emmanuel Mnzava](https://github.com/epmnzava)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
