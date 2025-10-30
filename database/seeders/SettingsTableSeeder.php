<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name'  => 'site_name',
                'value' => 'CBBSH',
            ],
            [
                'name'  => 'site_logo',
                'value' => 'upload/setting/logo/logo.jpg',
            ],
            [
                'name'  => 'site_favicon',
                'value' => 'upload/setting/favicon/logo.jpg',
            ],
            [
                'name'  => 'site_footer_logo',
                'value' => 'upload/setting/logo/logo.jpg',
            ],
            [
                'name'  => 'site_contact_logo',
                'value' => 'upload/setting/contact/logo.png',
            ],
            [
                'name'  => 'site_company_logo',
                'value' => 'upload/setting/company/banner.png',
            ],
            [
                'name'  => 'phone',
                'value' => '02333347087',
            ],
            [
                'name'  => 'phone2',
                'value' => '02333347087',
            ],
            [
                'name'  => 'email',
                'value' => 'cbbsh_cox@yahoo.com',
            ],
            [
                'name'  => 'email2',
                'value' => 'delowar.cbbsh@gmail.com',
            ],
            [
                'name'  => 'business_name',
                'value' => 'Cox’s Bazar Baitush Sharaf Hospital Bd',
            ],
            [
                'name'  => 'business_address',
                'value' => 'Baitush Sharaf Complex, Baitush Sharaf Road, Coxs Bazar.',
            ],
            [
                'name'  => 'business_hours',
                'value' => '9:00 AM - 4:30 PM',
            ],
            [
                'name'  => 'copy_right',
                'value' => 'Cox’s Bazar Baitush Sharaf Hospital',
            ],
            [
                'name'  => 'developed_by',
                'value' => 'AVA TECHNOLOGIES LTD',
            ],
            [
                'name'  => 'developer_link',
                'value' => 'https://snazrul.speakupbd.com/',
            ],
            [
                'name'  => 'breaking_news',
                'value' => 'অনলাইনে আবেদেনের শেষ সময় ১৬ অক্টোবর, ২০২৫ দুপুর ২টা পর্যন্ত। ROP Screening time: Sunday to Wednesday 9:00 am to 11:00 am.Our Service Time Saturday to Wednesday (9:00 am to 4:30 pm), Thursday (9:00 am to 1:30 pm),Friday (Closed).',
            ],
            [
                'name'  => 'about',
                'value' => 'Cox’s Bazar Baitush Sharaf Hospital Bd.',
            ],
            [
                'name' => 'facebook_url',
                'value' => 'https://www.facebook.com/',
            ],
            [
                'name'  => 'messenger_url',
                'value' => 'https://www.messenger.com/',
            ],
            [
                'name'  => 'twitter_url',
                'value' => 'https://www.twitter.com/',
            ],
            [
                'name'  => 'linkedin_url',
                'value' => 'https://www.linkedin.com/',
            ],
            [
                'name' => 'youtube_url',
                'value' => 'https://www.youtube.com/',
            ],
            [
                'name'  => 'instagram_url',
                'value' => 'https://www.instagram.com/',
            ],
            [
                'name'  => 'pinterest_url',
                'value' => 'https://www.pinterest.com/',
            ],
            [
                'name'  => 'whatsapp_url',
                'value' => 'https://www.whatsapp.com/',
            ],
            [
                'name'  => 'meta_title',
                'value' => 'travel delma',
            ],
            [
                'name'  => 'meta_keyword',
                'value' => 'Cox’s Bazar Baitush Sharaf Hospital Bd',
            ],
            [
                'name'  => 'meta_description',
                'value' => 'Cox’s Bazar Baitush Sharaf Hospital Bd.',
            ],
            [
                'name'  => 'top_banner',
                'value' => '',
            ],
            [
                'name'  => 'top_banner1',
                'value' => '',
            ],
            [
                'name'  => 'middle_banner',
                'value' => '',
            ],
            [
                'name'  => 'middle_banner1',
                'value' => '',
            ],
            // ... add entries for other types
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['name' => $setting['name']], $setting);
        }
    }
}
