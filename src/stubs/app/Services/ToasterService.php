<?php

namespace Dkpankaj\Toastr\Services;

class ToasterService
{
    public static function success(string $message): void
    {
        session()->flash('message', $message);
        session()->flash('type', 'success');
    }

    public static function error(string $message): void
    {
        session()->flash('message', $message);
        session()->flash('type', 'error');
    }

    public static function warning(string $message): void
    {
        session()->flash('message', $message);
        session()->flash('type', 'warning');
    }

    public static function info(string $message): void
    {
        session()->flash('message', $message);
        session()->flash('type', 'info');
    }
}
