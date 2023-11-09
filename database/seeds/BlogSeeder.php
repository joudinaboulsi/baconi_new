<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Shipping remains off target in bid to resolve the zero-carbon conundrum',
                'date' => '2023-11-09',
                'by'=>"Lloyd's List",
                'text_blog' => '<p>Shipping remains only partially on track to reach its near term ambitions and industry executives remain deeply concerned about the lack of available fuels</p>
                <p>THE shipping industry is not moving fast enough towards zero-carbon ships or fuels to meet current targets, risking further regulation and a more costly transition as a result.</p>
                <p>According to an annual study which assesses the industry&rsquo;s progress towards the milestone target of at least 5% scalable zero emission fuel being used by 2030, the industry remains off track across a series of crucial metrics.</p>
                <p>Despite significant progress at the regulatory level within the&nbsp;<a class="click-utag" href="https://www.seasearcher.com/company/53333/overview" target="_blank" rel="noopener noreferrer">International Maritime Organization</a>, which successfully revised carbon reduction targets for 2050 in July this year, industry demand signals and scaling of fuel projects have not kept pace with the scale of regulatory ambition.</p>',
                'image' => '16995455261698146702.png',
                'alt_image' => 'Alt Image',
               'title1'=>'Sustainability',
               'title2'=>'Environment',
               'title3'=>'Political and Trade',
               'title4'=>NULL,
               'title5'=>NULL,
               'title6'=>NULL,
               'title7'=>NULL,
               'title8'=>NULL,

                'meta_title' => 'Meta title',
                'meta_description' => '<p>Meta Description</p>',
                'meta_keywords' => '<p>Meta keywords</p>',
                'og_image' => '16995459811698146702.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
