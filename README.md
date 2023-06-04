# Stake2 PHP

![PHP 7.4.26](https://img.shields.io/badge/PHP-7.4.26-brightgreen.svg)
[![Contributors](https://img.shields.io/github/contributors/Stake2/Websites.svg)](https://github.com/Stake2/Websites/graphs/contributors)

The PHP files for my [Websites](https://thestake2.netlify.app/)<br>
The HTML files are generated using the ``/generate`` route on the [Index.php](https://github.com/Stake2/PHP/blob/main/Index.php) file.<br>
They stay here on the [Websites Repository](https://github.com/Stake2/Websites)<br>
Made by me, [Stake2](https://github.com/Stake2)

## License
Using [MIT License](https://github.com/Stake2/PHP/blob/main/LICENSE)<br>

## COC
Read [Code of Conduct](https://github.com/Stake2/PHP/blob/main/CODE_OF_CONDUCT.md)<br>

## Contribute
[How to Contribute](https://github.com/Stake2/PHP/blob/main/CONTRIBUTING.md)<br>

## Websites
The websites files, configuration, and style, are loaded from the files inside the [Websites](https://github.com/Stake2/PHP/tree/main/Websites/) folder.<br>

## Loading websites
1. Change the ``Document Root`` folder of your server to the folder where you cloned the repository
2. Start your server
3. You can open the ``/select`` route like ``http://localhost/select`` to select a website using the HTML form<br>
Or type the localhost URL with the website and language you want to use<br>
URL parameters:
```
http://localhost/select?website=[Website title here]&language=English
website: website name
language: language of the website
```
- A list of website names in English and Portuguese can be found in [Websites.json](https://github.com/Stake2/PHP/blob/main/JSON/Websites.json)
- Currently supported languages:
```
English
Portuguese
```

## How websites are loaded
1. The [Index.php](https://github.com/Stake2/PHP/blob/master/Index.php) file gets the website variables like the title and language from the GET or POST, and stores them in the ``$_SESSION`` and ``$website["method"]`` variables
2. It then defines the website files, configuration, style, and other variables for the website
3. Then loads the website dependencies, PHP files, and tab templates if they exist

## How websites are generated
1. The [Index.php](https://github.com/Stake2/PHP/blob/master/Index.php) file gets the website variables like the title and language from the GET or POST, and stores them in the ``$_SESSION`` and ``$website["method"]`` variables
2. It then defines the website files, configuration, style, and other variables for the website
3. Then loads the website dependencies, PHP files, and tab templates if they exist
4. Then the ``/generate`` route exports the website content into a HTML file inside the specific website folder which exists inside the [Websites folder](https://github.com/Stake2/Websites), exporting the file to the correct language folder (``en/`` for English and ``pt/`` for Portuguese)