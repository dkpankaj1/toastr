# Toastr Package for Laravel

A simple Laravel package to display Toastr notifications using Blade components.

## Installation

### 1. Install via Composer

Run the following command to install the package:

```sh
composer require dkpankaj1/toastr
```

### 2. Publish Assets & Views

Run the following command to publish the necessary assets and views:

```sh
php artisan vendor:publish --tag=toastr
```

This will copy the views and assets to your Laravel application:

- Views: `resources/views/components/toaster.blade.php`
- Assets(css & js): `public/assets/toastr/`

### 3. Register Service Provider (if not auto-discovered)

If your Laravel version does not support auto-discovery, add the service provider manually in `bootstrap/providers.php`:

```php
'providers' => [
    Dkpankaj1\Toastr\ToastrServiceProvider::class,
];
```

### 4. Include Assets in Your Layout

Add the following line to your main layout file (e.g., `resources/views/layouts/app.blade.php`):

```html
<link rel="stylesheet" href="{{asset('assets/toastr/toastr.min.css')}}" />
<script src="{{asset('assets/toastr/toastr.min.js')}}"></script>
```

## Usage

### 1. Include Toastr in Your Blade Template

Add the following line to your main layout file (e.g., `resources/views/layouts/app.blade.php`):

```html
<x-toastr />
```

### 2. Display Notifications in Controller

You can use Laravel's session to flash messages that will be shown via Toastr:

```php
use Dkpankaj1\Toastr\Services\ToasterService;

ToasterService::success('success message');
ToasterService::error('error message');
ToasterService::warning('warning message');
ToasterService::info('info message');
```

### 3. Customizing Toastr Options

Modify `resources/views/components/toaster.blade.php` to customize the notification settings:

## Credits

Developed by **Dkpankaj1**.

## License

This package is open-source and licensed under the **MIT License**.
