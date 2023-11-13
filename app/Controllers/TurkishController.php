<?php

namespace App\Controllers;

use DateTime;
use IntlDateFormatter;

class TurkishController extends BaseController
{
    public function index(): string
    {
        $data = [
            'logo' => 'whiteLogo.png',
        ];
        return view('index', $data);
    }
    public function capabilities(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('capabilities', $data);
    }
    public function contact_us(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('contact-us', $data);
    }
    public function how_it_works(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('how-it-works', $data);
    }
    public function our_work(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('our-work', $data);
    }
    public function privacy_policy(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('privacy-policy', $data);
    }
    public function who_we_are(): string
    {
        $data = [
            'logo' => 'blackLogo.png',
        ];
        return view('who-we-are', $data);
    }

    public function blogs(): string
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM blog ORDER BY createdAt desc');
        $blogs = $query->getResult();

        foreach ($blogs as $row) {
            //tags string olduğundan array yap
            $row->tags = explode(',', $row->tags);
            //tarih formatı
            $dateTime = new DateTime($row->createdAt);
            $row->createdAt = $dateTime->format('d/m/Y');
        }

        $data['blogs'] = $blogs;
        $data['logo'] = 'blackLogo.png';
        return view('blog', $data);
    }
    public function blog_details($slug): string
    {
        $db = \Config\Database::connect();

        //blog
        $query = $db->query("SELECT * FROM blog WHERE slug='$slug'");
        $blog = $query->getResult()[0];
        //tags string olduğundan array yap
        $blog->tags = explode(',', $query->getResult()[0]->tags);
        $blog->readTime = ceil(str_word_count($query->getResult()[0]->content) / 200);
        //tarih formatı
        $dateTime = new DateTime($blog->createdAt);
        $locale = 'tr_TR';
        $formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'Europe/Istanbul', IntlDateFormatter::GREGORIAN);

        // Format the date
        $blog->createdAt
        = $formatter->format($dateTime->getTimestamp());

        //diğer bloglar
        $query = $db->query("SELECT * FROM blog WHERE slug!='$slug' ORDER BY createdAt desc LIMIT 10");
        $otherBlogs = $query->getResult();
        foreach ($otherBlogs as $row) {
            //tags string olduğundan array yap
            $row->tags = explode(',', $row->tags);
            //tarih formatı
            $dateTime = new DateTime($row->createdAt);
            $row->createdAt = $dateTime->format('d/m/Y');
        }

        $data['blog'] = $blog;
        $data['otherBlogs'] = $otherBlogs;
        $data['logo'] = 'blackLogo.png';
        return view('blog-details', $data);
    }
}
