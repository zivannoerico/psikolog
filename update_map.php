<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$setting = \App\Models\Setting::where('key', 'kontak_maps_url')->first();
if ($setting) {
    $setting->value = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15795.12260655762!2d114.3703249!3d-8.2074744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1450011c5799d%3A0xf39dd47429df5a03!2sPsikologi%20Banyuwangi%20An%20Moerty!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid';
    $setting->save();
    echo "Setting updated\n";
} else {
    echo "Setting not found\n";
}
