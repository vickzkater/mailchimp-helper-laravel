<p align="center"><img src="https://hosting.kiniditech.com/mailchimp-helper-laravel.png" width="200" alt="Mailchimp API Helper - Laravel Library (MailchimpHelper)"></p>

# Mailchimp API Helper - Laravel Library (MailchimpHelper)

Mailchimp API Helper - Laravel Library (MailchimpHelper)

Worked on Mailchimp API v3

## Packages Used (Outside of Laravel)
- [nztim/mailchimp](https://github.com/nztim/mailchimp)

## Feature

- Get List
- Check the status of a contact
- Subscribe a user to your list with merge fields and double-opt-in confirmation disabled
- View Tags
- Add New Tag
- Add a tag to a contact
- View tags in a contact

## How-to-Use

Set Mailchimp configurations in `.env` file
```
...
MC_KEY=xxx
MC_LIST_ID=xxx
MC_TAG_DEFAULT=xxx
...
```

- MC_KEY = Mailchimp API key
- MC_LIST_ID = Mailchimp List ID
- MC_TAG_DEFAULT = Mailchimp Tag ID as default

Copy `MailchimpHelper.php` to your Laravel project - for sample copy then paste in `app/Libraries`

In your Controller file, please include the MailchimpHelper library
```
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// USE LIBRARIES
use App\Libraries\MailchimpHelper;

class XxxController extends Controller
{
    ....
```

How to call the function in MailchimpHelper library
```
public function mailchimp_subscribe(Request $request)
{
    // SET THE PARAMETERS
    $email_address = $request->input('email');
    $result = MailchimpHelper::add_subscribe($email_address);

    dd($result);
}
```

For sample, please check `DevController.php`

## Contributing

Thank you for considering contributing to the MailchimpHelper.

## Bugs, Improvements & Security Vulnerabilities

If you discover a bug or security vulnerability within MailchimpHelper, please send an email to Vicky Budiman at [vicky@kiniditech.com](mailto:vicky@kiniditech.com). All requests will be addressed promptly.

## Issues

If you come across any issue/bug please [report them here](https://github.com/vickzkater/mailchimp-helper-laravel/issues).

## License

MailchimpHelper is open-sourced software built by KINIDI Tech and contributors and licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Credits

- Vicky Budiman (https://github.com/vickzkater)
- NZTim (https://github.com/nztim/mailchimp)

<p align="center">Brought to you by</p>
<p align="center"><img src="https://hosting.kiniditech.com/kiniditech_logo.png" width="200" alt="KINDI Tech"></p>
<p align="center">KINIDI Tech</p>
