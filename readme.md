# Greetings Shortcode

This plugin adds a shortcode for displaying personalized greetings for logged in users or guests in multiple languages, using the Polylang plugin. 

## Installation

1. Download the plugin from GitHub.
2. In your WordPress dashboard, go to Plugins > Add New.
3. Click the "Upload Plugin" button, and select the downloaded zip file.
4. Click the "Install Now" button.
5. Once the installation is complete, click the "Activate Plugin" button.

## Usage

To use the shortcode, simply add `[greetings]` to any post or page. 
The greeting will be displayed based on the current time and the current language, as determined by the Polylang plugin.

If the Polylang plugin is not installed or active, the greeting will be displayed in English.

## License

This plugin is licensed under the GPLv2 or later.

## FAQ

**Q: Can I use this plugin with other languages besides English?**

Yes, you can use this plugin with other languages besides English! The plugin includes support for the Polylang plugin, which allows you to translate the greeting into multiple languages.

To use the plugin with other languages, you will need to install and activate the Polylang plugin. 
Then, you can use the Polylang plugin to translate the greeting text into the desired language.

**Q: Can I use this plugin to display greetings for logged out users?**

Yes, you can use this plugin to display greetings for logged out users as well as logged in users. 
If the user is not logged in, the greeting will be displayed as "Good morning/afternoon/evening, dear Guest!".

## Donations

If you find this plugin useful and would like to support its development, you can donate through PayPal or Ko-Fi:

- PayPal: https://paypal.me/hmdqr/
- Ko-Fi: https://ko-fi.com/hmdqr/

## Changelog

### 1.2

- Updated the plugin to version 1.2 which includes a new feature that allows you to customize the default nickname for non-logged-in users. The plugin now uses the value of the nickname field to change the visitor name for visitor, friend, or guest as a default, as you wish. With this update, you can now set "Visitor" as the default nickname for non-logged-in users instead of "Guest".

### 1.1
- Added a check to ensure that the plugin is not accessed directly by verifying that the ABSPATH constant has been defined. This helps to prevent potential security vulnerabilities by blocking access to the plugin's files from external sources. This change helps to improve the overall security of the plugin.

### 1.0
- Initial release of the plugin.
