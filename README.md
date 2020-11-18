# Google Analytics 4 integration plugin

> ⚠️ WARNING - This plugin is not finished - waiting for Google to finish coding the sdK ⚠️ 
>
> Going to re-code everything from the ground up and add lots of new features
>
> This is a hard fork

This Plugin adds GA4 to the backend dashboard and some custom components. The plugin uses the new API's:

### Google Analytics Admin API (GA4):

https://developers.google.com/analytics/devguides/config/admin/v1

### Google Analytics Data API (GA4):

https://developers.google.com/analytics/devguides/reporting/data/v1

## Configuration

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

## Optional Components

### Tracking Code for Desktop Websites

To add the plugin's tracking code to your website add the component into the `<head>` section, using the following tag:

```php
{% component 'gaTracker' %}
```

### Tracking Code for Mobile Websites

To add the plugin's tracking code to your mobile website add this code line into the `<head>` section of your website:

```php
<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
```

Then add the plugin's tracking code to your mobile website just after the `<body>` element, using the following tag:

```php
{% component 'gaAmpTracker' %}
```

## Troubleshooting

### Fix for Windows / XAMPP

**cURL error 60: SSL certificate problem: unable to get local issuer certificate**

1. Follow this link: http://curl.haxx.se/ca/cacert.pem and save it in a file called `cacert.pem`.

1. Open your `php.ini` file insert or edit the following line: 
    ```
    curl.cainfo = "[pathtothisfile]\cacert.pem"
    ```

1. Restart Apache
