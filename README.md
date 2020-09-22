# PHP Beautiful ID Generator

This is a **unique** PHP ID generator package for customizing your invoice, order, and user ID.

## Installation
Use the [composer](https://getcomposer.org/) to install Beautiful ID Generator.

```bash
composer require dasundev/beautiful-id-generator
```


## Usage

```php
//import
use Dasundev\BeautifulIdGenerator\InvoiceIdGenerator;
use Dasundev\BeautifulIdGenerator\OrderIdGenerator;
use Dasundev\BeautifulIdGenerator\UserIdGenerator;

//get invoice id
$invoiceIdGenerator = new InvoiceIdGenerator();
$invoiceIdGenerator->generate();

//get order id
$orderIdGenerator = new OrderIdGenerator();
$orderIdGenerator->generate();

//get user id
$userIdGenerator = new UserIdGenerator();
$userIdGenerator->generate();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
This project is licensed under the [MIT](https://choosealicense.com/licenses/mit/) License.

## Buy Me A Coffee! :coffee:
If you can contribute with a donation or you want to, feel free to do it at [Buy me a coffee!](https://www.buymeacoffee.com/dasundev)☕, I will be really thankfull for anything even if it is a coffee or just a kind comment towards my work, because that helps me a lot. Whenever you contribute with a donation, I will read your message and it will be shown in my main site.



