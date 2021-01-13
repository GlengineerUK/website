<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Portfolio Website',
            'slug' => 'portfolio-website',
            'summary' => '<p>The application poweri<span class="ql-font-monospace">ng this website. P</span>roviders a complete CRUD application to manage project and blog posts.</p><p><strong><u>More content</u></strong></p><pre class="ql-syntax" spellcheck="false">$v = $a + 1</pre><h1><strong><u>More content</u></strong></h1><p><br></p>',
            'content' => '<p>Some content</p><p><br></p><p><span class="ql-size-large">More content</span></p><p><br></p><p><strong><u>More content</u></strong></p><pre class="ql-syntax" spellcheck="false">$v = $a + 1</pre><h1><strong><u>More content</u></strong></h1>',
            'tags' => 'Laravel, Tailwindcss, Canvas, Apline.js, HTML5, CSS3, Javascript',
            'link_url' => '',
            'image_url' => '',
            'published' => 1,
        ]);

        Project::create([
            'title' => 'Staff Planner',
            'slug' => 'staff-planner',
            'summary' => '<p>A web application used to plan shifts and staffing levels.</p>',
            'content' => '<p>Some content</p>',
            'tags' => 'Laravel, Tailwindcss, HTML5, CSS3, Javascript, Vue.js',
            'link_url' => '',
            'image_url' => '',
            'published' => 1,
        ]);
    }
}
