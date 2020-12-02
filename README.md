# Google Analytics 4 integration plugin

> ⚠️ WARNING - This plugin is not finished - waiting for Google to finish coding the PHP SDK ⚠️ 
>
> Going to re-code everything from the ground up and add lots of new features!
>
> This is a hard fork (to move somethings in a different direction and plenty of new and extra features)

<p><img src="https://github.com/ayumi-cloud/ga4/blob/master/assets/images/banner.png"></p>

GA4 is the latest version of Google Analytics. Since it is the 4th version, it is called as GA4.

- **The first version of Google Analytics (GA1)** is the Classic Google Analytics (uses the `ga.js` JavaScript library).
- **The second version of Google Analytics (GA2)** is the Universal Analytics (`analytics.js` JavaScript library).
- **The third version of Google Analytics (GA3)** is the (`gtag.js` JavaScript library).
- **The fourth version of Google Analytics (GA4)** also uses the `gtag.js` library but uses a new **measurement model** called `Event + Parameter` model (which is user-centric) instead of the traditional `Session + Pageviews` centric measurement model.

## Table of Contents 📑

- [October CMS and Summer CMS Support](#october-cms-and-summer-cms-support-)
- [GA API's](#ga-apis-%EF%B8%8F)
	- [Google Analytics 4 Admin API](#google-analytics-4-admin-api-%EF%B8%8F)
	- [Google Analytics 4 Data API](#google-analytics-4-data-api-%EF%B8%8F)
- [Deprecations and removals](#deprecations-and-removals-)
	- [Google Analytics Reporting API v4](#google-analytics-reporting-api-v4-%EF%B8%8F)
- [Vendor Packages](#vendor-packages-)
- [Enhancements](#enhancements-)
- [Installation](#installation-%EF%B8%8F)
	- [Step 1 - Create a client ID](#step-1---create-a-client-id)
	- [Step 2 - Configure Google Analytics](#step-2---configure-google-analytics)
	- [Step 3 - Configure the back-end area](#step-3---configure-the-back-end-area)
- [Optional Components](#optional-components-)
	- [Tracking Code for Desktop Websites](#tracking-code-for-desktop-websites-)
	- [Tracking Code for Mobile Websites](#tracking-code-for-mobile-websites-)
- [Adding Custom Charts](#adding-custom-charts-)
	- [Bar Charts](#bar-charts-)
	- [Pie Charts](#pie-charts-)
	- [Line Charts](#line-charts-)
- [Troubleshooting](#troubleshooting-)
	- [Fix for Windows / XAMPP](#fix-for-windows--xampp-)
- [Browser Support](#browser-support-)
- [Changelog](#changelog-)
- [Contributions, Feature Requests and Feedback](#contributions-feature-requests-and-feedback-)
	- [PSR](#psr-%EF%B8%8F)
- [Security](#security-)
- [License](#license-)

## October CMS and Summer CMS Support 🔥

This plugin will work out of the box with October CMS.

For Summer CMS this plugin will be upgraded to take full advantage of the extra features supported by the CMS, below is a brief list of some of these features:

- As the Summer CMS contains its own internal analytics, that is directly connected to the firewall module. GA4 will be a third-party analytics package.
- Access to a wide range of different chart types.
- The consent will be connected directly to the legal module.
- Connected to the import and export settings feature.
- Connected to the voice actions module.
- Connected to the machine learning help wizard and search module.
- Connected to the accessibility module.
- Access to all the internal backend themes, including dark and light modes.

(*) To keep this code clean, the summer cms plugin will be hosted on a different repo.

## GA API's 🛠️

This Plugin adds GA4 to the backend dashboard and some custom components. The plugin uses the new API's:

### Google Analytics 4 Admin API ⚙️

https://developers.google.com/analytics/devguides/config/admin/v1

### Google Analytics 4 Data API ⚙️

https://developers.google.com/analytics/devguides/reporting/data/v1

## Deprecations and removals ⛔

### Google Analytics Reporting API v4 ⚙️

https://developers.google.com/analytics/devguides/reporting/core/v4

> The Google Analytics Reporting API v4 **does not support GA4 properties!** Instead use the `Google Analytics 4 Data API`.
 

## Vendor Packages 🧰

- [Guzzle, PHP HTTP client](https://github.com/guzzle/guzzle)

**Installed version**: 7.2.0 or greater.

- [Google APIs Client Library for PHP](https://github.com/googleapis/google-api-php-client)

**Installed version**: 2.7.0 or greater.

## Enhancements ⭐

- This plugin has been optimized to work a long side modern browsers that support the **back/forward cache** (bfcache) api. To learn more about bfcache, see these resources:

    [Exploring a back/forward cache for Chrome](https://developers.google.com/web/updates/2019/02/back-forward-cache)
    
    [Browser Back/Forward Caches and their Benefit to Web Performance](https://dev.to/paulcalvano/browser-back-forward-caches-and-their-benefit-to-web-performance-4f4l)

## Installation ❤️

### Step 1 - Create a client ID

> This part will be re-written!

The settings and instructions for authorizing Google have been drastically simplified. For existing accounts, you will need to generate a new key file using these steps:

1. Log in to the [Google Developers Console](https://console.developers.google.com/home/dashboard) and do a search for `Service accounts` in the search box at the top.

2. If you need to create a new `Service Account`, click on the `Create Service Account` at the top and then add a `name` and click on `Create`, you can skip setting up the `description` and `roles`.

3. You should see an account in the **Service Accounts** list and under the `Actions` column is a hamburger menu. Open this hamburger menu and select `Create key`.

4. Choose the `Key type` of `JSON`.

5. Download the file to your computer and upload it to the October back-end settings form.

### Step 2 - Configure Google Analytics

> This part will be re-written!

1. In a new tab, navigate to the main [Google Analytics site](https://www.google.com/analytics/web/) and select the property you want to track.

1. Click the **Admin** main menu tab at the top. Select the **Property > User Management** menu item.

1. *Paste the email address from the clipboard* in to the field **Add permissions for** and make sure the permission is set to **Read & Analyse**. Click **Add**.

1. Click the **Admin** main menu tab again and select **View > View Settings** from the menu. *Copy to your clipboard* the Profile ID (should be a number).

### Step 3 - Configure the back-end area

> This part will be re-written!

1. Open your October back-end administration area and open **Settings > Google Analytics**.

1. *Paste the Account ID from the clipboard* in to the field **Analytics View/Profile ID number**.

1. Upload the previously downloaded `.json` private key file to the **Private key** field.

1. Specify the **Tracking ID** (eg `UA-12312312-3`) and **Domain name** values if you are going to use the plugin's built-in tracking component. To find this code, select **Admin > Property > Property Settings** from the Google Analytics menu.

1. If Tracking is not working initially, enter the value `auto` for the **Domain name** field. This is a fix for newborn Google Analytics accounts.

## Optional Components 📀

### Tracking Code for Desktop Websites 💻

To add the plugin's tracking code to your website add the component into the `<head>` section, using the following tag:

```php
{% component 'gaTracker' %}
```

### Tracking Code for Mobile Websites 📱

To add the plugin's tracking code to your mobile website add this code line into the `<head>` section of your website:

```html
{% if __SELF__.measurementId is not empty %}
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
{% endif %}
```

Then add the plugin's tracking code to your mobile website just after the `<body>` element, using the following tag:

```php
{% component 'gaAmpTracker' %}
```

## Adding Custom Charts 📈

For the full list of features to create custom charts, see here: [Dimensions & Metrics Explorer Tool](https://ga-dev-tools.appspot.com/dimensions-metrics-explorer/)

### Bar Charts 📊

Bar charts are great for comparing values against each other. In this example, we'll create a bar chart to show how many users are visiting our site in the 10 most common cities.

| Row                | Value      |
| :----------------- | :--------- |
| Widget Title       | Top Cities |
| Dimension          | ga:city    |
| Metric             | ga:users   |
| Results to display | 10         |

### Pie Charts ⭕

Pie charts are useful for displaying the make up of data as a whole. Here we'll create a pie chart comparing the number of returning visitors to first time visitors.

| Row                | Value         |
| :----------------- | :------------ |
| Widget Title       | Visitor Types |
| Dimension          | ga:userType   |
| Metric             | ga:sessions   |

### Line Charts 📉

A line chart is a graphical representation of an asset's historical price action that connects a series of data points with a continuous line. In this final example, we'll create a line chart to display how much of our website's traffic is coming from various device categories.

| Row                | Value             |
| :----------------- | :---------------- |
| Widget Title       | Device Overview   |
| Dimension          | ga:deviceCategory |
| Metric             | ga:visits         |
| Dimension Label    | Device            |
| Metric Label       | Visits            |

## Troubleshooting 🌀

### Fix for Windows / XAMPP 💊

**cURL error 60: SSL certificate problem: unable to get local issuer certificate**

1. Follow this link: http://curl.haxx.se/ca/cacert.pem and save it in a file called `cacert.pem`.

2. Open your `php.ini` file insert or edit the following line: 

    ```php
    curl.cainfo = "[pathtothisfile]\cacert.pem"
    ```

3. Restart Apache

## Browser Support ✅

The GA4 plugin has been tested in the following browsers:

<table>
  <tr>
    <td align="center">
      <img src="https://raw.githubusercontent.com/alrra/browser-logos/39.2.2/src/chrome/chrome_48x48.png" alt="Chrome"><br>
      ✔
    </td>
    <td align="center">
      <img src="https://raw.githubusercontent.com/alrra/browser-logos/39.2.2/src/firefox/firefox_48x48.png" alt="Firefox"><br>
      ✔
    </td>
    <td align="center">
      <img src="https://raw.githubusercontent.com/alrra/browser-logos/39.2.2/src/safari/safari_48x48.png" alt="Safari"><br>
      9+
    </td>
    <td align="center">
      <img src="https://raw.githubusercontent.com/alrra/browser-logos/39.2.2/src/edge/edge_48x48.png" alt="Edge"><br>
      ✔
    </td>
    <td align="center">
      <img src="https://raw.githubusercontent.com/alrra/browser-logos/39.2.2/src/archive/internet-explorer_9-11/internet-explorer_9-11_48x48.png" alt="Internet Explorer"><br>
      11
    </td>
    <td align="center">
      <img src="https://raw.githubusercontent.com/alrra/browser-logos/39.2.2/src/opera/opera_48x48.png" alt="Opera"><br>
      ✔
    </td>
  </tr>
</table>

## Changelog 🏆

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributions, Feature Requests and Feedback ✨

We are actively inviting new contributors! To start, please read the [contribution guide](CONTRIBUTING.md).

This project is only possible thanks to the work of many dedicated volunteers. Everyone is encouraged to help in ways large and small. Here are a few ways you can help:

- Read the current content and help us fix any spelling mistakes or grammatical errors.
- Choose an existing [issue](https://github.com/ayumi-cloud/ga4/issues) on GitHub and submit a pull request to fix it.
- Open a new issue to report an opportunity for improvement.

If you find any bugs in the code or have any improvements in mind then feel free to generate a pull request.

**Note:** Please use Unit Testing and Coding Best Practices in order to have a valid pull request 😉

Patches and pull requests are encouraged. All code should follow the [PSR-1](https://www.php-fig.org/psr/psr-1/) and [PSR-2](https://www.php-fig.org/psr/psr-2/) style guidelines. **Please include unit tests whenever possible!**

### PSR ♻️

This plugin uses some PSR standards to be the most interoperable possible:

- [PSR-6](https://www.php-fig.org/psr/psr-6/) Caching Interface.
- [PSR-7](https://www.php-fig.org/psr/psr-7/) Standard interfaces to represent http requests, responses and uris.
- [PSR-17](https://www.php-fig.org/psr/psr-17/) Standard factories to create PSR-7 objects.
- [PSR-18](https://www.php-fig.org/psr/psr-18/) Standard interface to send a http request and return a response.

## Security 💥

If you discover any security related issues, please open an issue! We will try and sort it out asap.

## License 📄

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[⬆ back to top](#table-of-contents-)

<p align="center"><img src="https://github.com/ayumi-cloud/ga4/blob/master/assets/images/luv.png"></p>
