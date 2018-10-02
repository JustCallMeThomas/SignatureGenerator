# SignatureGenerator
SignatureGenerator is a Mass E-Mail Signature Generator Tool. It is programmed with PHP and HTML. In order to use this Generator you also have to install [XAMPP](https://www.apachefriends.org/de/download.html) or [WAMP](http://www.wampserver.com/en/) (Web-Server software).

You are able to:
* Add/Remove Users with Name, Phone, E-Mail and Departments
* Change the HTML Signature Template with the available options **%name%**, **%departments%**, **%phone%** and **%email%**.
* Mass Generate Signatures
* Single Generate Signatures

When there are more departments for a user, seperate it with a comma. They will be displayed among themselves.

You can also change or expand the code for your needs.

## Paths ##
* `/config` -> `clients.txt` contains the users with all informations.
* `/config` -> `signature.txt` contains the template for the generated signature.
* `/signatures` the generated signatures will be generated in this folder.

### Paths for expansion ###
* `index.php` contains all fields and forms.
* `/pages` -> `addUser.php` adds user to file "clients.txt".
* `/pages` -> `generateSignatures.php` generates signatures for all users to folder "signatures".
* `/pages` -> `generateSinglesignature.php` generates one specific signature.
* `/pages` -> `removeUser.php` removes a user from file "clients.txt".

## Placeholders for Template ##
Placeholder | Description
------------ | -------------
**%name%** | When generated it will be replaced with the Name
**%departments%** | When generated it will be replaced with the Departments. Comma seperated departments will be displayed among themselves.
**%phone%** | When generated it will be replaced with the Phone Number
**%email%** | When generated it will be replaced with the E-Mail address
