<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->insert([
            'question' => 'Q: How can you print a document from your laptop at hz?',
            'answer' => ' <li>Go to the website <a href="http://print.hz.nl">http://print.hz.nl</a></li>
    <li>Type in your HZ username and password and click on Login</li>
    <li>Click on Choose File and select the file you want to print.
    </li>
    <li>Click on Next. Repeat the previous step if you want to add more documents.</li>
    <li> Wait until the document has been processed and then tick the Advanced option to state whether you want
      double-sided or black & white printing.
    </li>
    <li>Click on the HZ printer or HZ plotter to print your document(s) .</li>
    <li>Once the print job has been requested you must register using your HZ pass on the TouchID next to the
      multifunctional printer. Next, select printer option Print / Afdrukken.<br>&nbsp;&nbsp;&nbsp;&nbsp; In the menu,
      select the multifunctional printer to where the job has been sent.
      Next, you can see which printer job i ready to be printed.<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The print job is the
      completed provided there is sufficient credit on your printing account. When the printing is completed, press Stop
      on the TouchID, followed by Logout.</li>
    </p>
    <br>
    <p>',
            'link' => 'http://print.hz.nl',
            'updated_at' => now(),
        ]);

        DB::table('faq')->insert([
            'question' => 'Q: What do you need to do when are sick / show symptoms of corona virus?',
            'answer' => 'A: Stay at home,
            and contact a teacher you will not be coming that day. If you have symptoms relating to the
    coronavirus, get tested.',
            'link' => '',
            'updated_at' => now(),
        ]);

        DB::table('faq')->insert([
            'question' => 'Q: How can you scan a document and send it to your laptop at hz?',
            'answer' => '<li>Ensure you have at least €0.07 credit. Although scanning is free, you must have
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this amount of credit on your HZ pass.</li>
    <li>Register using your HZ pass on the TouchID next to the multifunctional printer.</li>
    <li>In the TouchID menu, select option Scanning - Scan.</li>
    <li> Lay the original sheet on the feeder or glass plate.</li>
    <li> Press Scan and Send.</li>
    <li>Press Scan to me.</li>
    <li>Press Yes.</li>
    <li>Press the Start button.</li>
    <li>The following screen appears for scanning via the glass plate. Press the green<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start button on the printer to scan page by page. Once this is ready, press Start
      Sending.
    </li>
    <li> When scanning is completed, press Stop on the TouchID, followed by Logout.</li>',
            'link' => '',
            'updated_at' => now(),
        ]);

        DB::table('faq')->insert([
            'question' => 'Q: What are the instructions if you want to park your car at the hz parking lot?',
            'answer' => 'A: You have to park your car across the road at the parking lot of the former PEZM. ',
            'link' => '',
            'updated_at' => now(),
        ]);

        DB::table('faq')->insert([
            'question' => 'Q: How can you book a project room in one of the wings?',
            'answer' => ' A: Head to the selfservice section of <a href="https://portal.hz.nl/">https://portal.hz.nl/</a>, click "book a
    project room" and follow the given instructions.</p>
    <br>',
            'link' => 'href="https://portal.hz.nl/',
            'updated_at' => now(),
        ]);




//        DB::table('faq')->insert([
//            'question' => 'Q:',
//            'answer' => '',
//            'link' => '',
//            'updated_at' => now(),
//        ]);


    }
}
