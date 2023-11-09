<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1699532756partner-4 (1).png',
                'alt_image' => 'image',
                'logo'=>'1699532756favicon.png',
                'link'=>'info@baconigroup.com',
                'text' => '<p>Understanding local market dynamics and broader geopolitical developments is an essential element in ensuring future growth. Baconi Group Holding offers the insight needed to deal with the turmoil in the region, particularly in the field of energy and natural resources, and assists both public and private clients to enhance their readiness to safeguard their interests.</p>',
                'image1'=>'1699532756partner-22.png',
                'alt_image1'=>'Alt Image',
                'logo1'=>'1699532756favicon_ultra.png',
                'text1'=>'<p>Ultra Maritime Services (UMS) is a fully integrated Liner &amp; Logistics company representing some of the most prominent brands in the industry. UMS is the exclusive agent of Wan Hai Lines in Jordan. UMS also acts as a Global Transportation logistics provider covering the entire shipping and logistics spectrum. UMS was established in 1994 and expanded regionally in accordance with its vision with offices in every major city and gateway in the Levant Region. UMS grew its operations into three major divisions: liner, logistics and vessel marine and husbandry services. <br>As a leader in the logistics field, UMS has captured a significant market base and created a reputable professional image. It built itself a strong record in the forwarding &amp; logistics field with support from many international well known forwarders such as Seko Worldwide, Logwin, and a member of the WCA global network. UMS is also the husbandry service provider for Maersk Line.</p>',
                'link1'=>'info@ultra-maritime.com',
                'image2'=>'1699532756partner-1_2.png',
                'alt_image2'=>'Alt Image1',
                'logo2'=>'1699532756favicon_sea.png',
                'text2'=>'<p>Seanautics is the proud agent of ONE Line. ONE line is among the top container lines worldwide spanning oceans and continents as well as cultures and industries. ONE Line reflects the new world standard, by taking pride in its core values, including agility, teamwork, commitment and best practice.<br>>The Seanautics team renders the highest caliber of professionalism to provide the best possible services, standards and expertise, which ensure a consistent level of performance and personalized services to both our customers and our principal. This dedication is a reflection of the management&rsquo;s extensive knowledge in the transportation industry, with experience of more than 40 years.<br>Kindly check below link for a full range of ONE services and trade routes.</p>',
                'link2'=>'www.one-line.com  info@seanautics.com',

                'image3'=>'1699532757partner-3.png',
                'alt_image3'=>'Alt Image1',
                'logo3'=>'1699532757favicon_pandi.png',
                'text3'=>'<p>One of the first companies established to be fully dedicated as P&amp;I club correspondents&rsquo; network in the entire Levant region, Pandi was founded in 1986 with services that cover the Middle East. Delivering the highest quality standards with exceptional reliability, Pandi safeguards the best interests of members, minimizing the impact of incidents and securing the best outcomes for claims. Pandi represents several clubs:</p>
                <ul>
                <li>West of England Ship-owners Insurance Services Ltd. UK.</li>
                <li>North of England P&amp;I Association, With Newcastle P&amp;I, UK.</li>
                <li>Britannia Steamship Insurance Association Ltd. &ndash; UK</li>
                <li>Gard</li>
                <li>The American P&amp;I Club</li>
                <li>London Steam-Ship Owners Mutual Insurance Association Ltd.</li>
                <li>Japan Ship-owners Mutual P&amp;I Association, Japan</li>
                <li>Ship-owners Mutual P&amp;I Association, UK</li>
                <li>China Ship-owners Mutual Assurance Association, China</li>
                </ul>',
                'link3'=>'info@jordanpandi.com',
               
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
