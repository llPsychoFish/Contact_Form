
# Contact Form

This project is a simple contact form built with PHP and PHPMailer. It allows users to send messages via email from a web form.

## Features
- Responsive HTML contact form (`form.html`)
- Email sending via PHPMailer (`send-email.php`)
- Success page (`sent.html`)
- Uses Gmail SMTP (can be customized)


## Setup

### 1. Clone the Repository
Open your terminal or command prompt and run:
```shell
git clone https://github.com/your-username/Contact_Form.git
cd Contact_Form
```

### 2. Install Composer
If you don't have Composer installed, download and install it from [getcomposer.org](https://getcomposer.org/download/).

#### Windows:
- Download and run Composer-Setup.exe
- Follow the installation instructions

#### macOS/Linux:
- Run the following command:
	```shell
	curl -sS https://getcomposer.org/installer | php
	sudo mv composer.phar /usr/local/bin/composer
	```

### 3. Install PHPMailer and Dependencies
Run the following command in the project directory:
```shell
composer require phpmailer/phpmailer
```
This will install PHPMailer and any other required libraries as defined in `composer.json`.

### 4. Configure SMTP Credentials
Open `send-email.php` and update the following lines with your Gmail address and App Password:
```php
$mail->Username = "your-gmail@gmail.com";
$mail->Password = "your-app-password";
```
**Important:** Never commit your real credentials to version control. Use environment variables or a config file for production.

### 5. Deploy to a PHP-enabled Server
You can use XAMPP, WAMP, MAMP, or any Apache/Nginx server with PHP support. Place the project folder in your server's root directory (e.g., `htdocs` for XAMPP).

### 6. Test the Form
Open `form.html` in your browser, fill out the form, and submit. If successful, you will be redirected to `sent.html`.

## Usage
1. Open `form.html` in your browser.
2. Fill out the form and submit.
3. If successful, you will be redirected to `sent.html`.

## Security Note
- Never expose your real email password in code. Use environment variables or a secure config file for production.
- This example is for demonstration purposes only.

## License
See `LICENSE` for details.
