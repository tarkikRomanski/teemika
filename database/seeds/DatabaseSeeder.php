<?php

use Illuminate\Database\Seeder;

use App\Service;
use App\About;
use App\Why;
use App\How;
use App\Help;
use App\Plan;
use App\Phone;
use App\Address;
use App\Email;
use App\Page;
use App\Type;
use App\Title;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(ServicesSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(WhySeeder::class);
        $this->call(HowSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(HelpSeeder::class);
        $this->call(PagesSeeder::class);

    }


}

class ServicesSeeder extends Seeder
{
    public function run(){
        DB::table('services')->delete();
        Service::create([
            'title' => 'SALES <br> ASSISTANT',
            'aliece' => 'sales',
            'descr' => 'Build databases of potential customers, send cold letters, schedule calls or meetings for your team, and answer FAQs about your services'
        ]);

        Service::create([
            'title' => 'MARKETING <br> ASSISTANT',
            'aliece' => 'marketing',
            'descr' => 'Build databases of potential customers, send cold letters, schedule calls or meetings for your team, and answer FAQs about your services'
        ]);

        Service::create([
            'title' => 'CUSTOMER <br> SUPPORT',
            'aliece' => 'support',
            'descr' => 'Build databases of potential customers, send cold letters, schedule calls or meetings for your team, and answer FAQs about your services'
        ]);
    }
}

class AboutSeeder extends Seeder{
    public function run()
    {
        DB::table('about')->delete();
        About::create([
            'id' => 1,
            'text' => 'Teemika was founded by a group of international enterprenus in order to help small and medium-sized businesses with seles, marketing and customer support requirements for a faction of the typical cost. We offer you your own remote, dedicated assistants and support staff from Ukraine'
            ]);
    }
}

class WhySeeder extends Seeder{
    public function run()
    {
        DB::table('why')->delete();
        Why::create([
            'title' => 'DEDICATED PERSON',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequuntur cum delectus deserunt, fugiat in laudantium nemo provident reiciendis tempore?'
            ]);

        Why::create([
            'title' => 'MULTILANGUAGE SUPPORT',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nihil non quaerat sunt tempore voluptates voluptatum.'
        ]);

        Why::create([
            'title' => 'MOTIVATED PEOPLE',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos nobis optio repellat.'
        ]);

        Why::create([
            'title' => 'FLEXIBILITY',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequuntur cum delectus deserunt, fugiat in laudantium nemo provident reiciendis tempore?'
        ]);

        Why::create([
            'title' => 'COST SAVING',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, molestiae.'
        ]);

        Why::create([
            'title' => 'DEDICATED PERSON',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequuntur cum delectus deserunt, fugiat in laudantium nemo provident reiciendis tempore?'
        ]);
    }
}

class HowSeeder extends Seeder{
    public function run()
    {
        DB::table('how')->delete();
        How::create([
            'text' => 'You have work which can be done remotely'
        ]);
        How::create([
            'text' => 'You have work which can be done remotely'
        ]);
        How::create([
            'text' => 'You have work which can be done remotely'
        ]);
        How::create([
            'text' => 'You have work which can be done remotely'
        ]);
        How::create([
            'text' => 'You have work which can be done remotely'
        ]);
        How::create([
            'text' => 'You have work which can be done remotely'
        ]);
    }
}

class PlanSeeder extends Seeder{
    public function run()
    {
        DB::table('plans')->delete();
        Plan::create([
            'title' => 'PAYMENT STANDART',
            'text' => 'Lorem ipsum dolor sit amet',
            'price' => 300,
            'display' => 1
        ]);
        Plan::create([
            'title' => 'PAYMENT STANDART',
            'text' => 'Lorem ipsum dolor sit amet',
            'price' => 500,
            'display' => 1
        ]);
        Plan::create([
            'title' => 'PAYMENT STANDART',
            'text' => 'Lorem ipsum dolor sit amet',
            'price' => 800,
            'display' => 1
        ]);
        Plan::create([
            'title' => 'PAYMENT STANDART',
            'text' => 'Lorem ipsum dolor sit amet',
            'price' => 100,
            'display' => 0
        ]);
    }
}

class ContactSeeder extends Seeder{
    public function run()
    {
        DB::table('phones')->delete();
        DB::table('addresses')->delete();
        DB::table('emailes')->delete();

        Phone::create([
            'title' => 'UK',
            'number' => '+44 20 3318 5068'
        ]);
        Phone::create([
            'title' => 'US',
            'number' => '+1 645 5132 555'
        ]);

        Email::create([
            'title' => 'info@mindy-supports.com'
        ]);

        Address::create([
           'title' => 'Novokonstantinovskaya Str. 2a Kiev 04080 Ukraine'
        ]);


    }
}

class TitleSeeder extends Seeder{
    public function run()
    {
        DB::table('title')->delete();
        Title::create([
            'id' => 1,
            'title' => 'SAVE TIME AND MONEYON ON <br> SALES AND MARKETING'
        ]);
    }
}

class TypesSeeder extends Seeder{
    public function run()
    {
        DB::table('types')->delete();
        Type::create([
            'id' => 1,
            'title' => 'Sales Assistants'
        ]);
        Type::create([
            'id' => 2,
            'title' => 'Customer Support'
        ]);
        Type::create([
            'id' => 3,
            'title' => 'Order Manager'
        ]);
        Type::create([
            'id' => 4,
            'title' => 'Marketing Assistants'
        ]);
        Type::create([
            'id' => 5,
            'title' => 'Recruiting Support'
        ]);
        Type::create([
            'id' => 6,
            'title' => 'Data entry'
        ]);
        Type::create([
            'id' => 7,
            'title' => 'Personal Assistant'
        ]);
        Type::create([
            'id' => 8,
            'title' => 'Independent Specialist'
        ]);
        Type::create([
            'id' => 9,
            'title' => 'Another Assistant'
        ]);

    }
}

class HelpSeeder extends Seeder{
    public function run()
    {
        DB::table('helpyou')->delete();
        Help::create([
            'id' => 1,
            'text' => 'Save time and <br> money on sales'
        ]);
        Help::create([
            'id' => 2,
            'text' => 'Fuel your busines <br> with more prospects'
        ]);
        Help::create([
            'id' => 3,
            'text' => 'Focus on closing deals. <br> We`ll take careof the routing'
        ]);
        Help::create([
            'id' => 4,
            'text' => 'Perfect Support <br> for your Business'
        ]);

    }
}

class PagesSeeder extends Seeder{
    public function run()
    {
        DB::table('pages')->delete();
        Page::create([
            'id' => 1,
            'alias' => 'support',
            'text' => '<p class="support-title col-sm-12"><span>Sales assistants</span> on distance</p>
            <p>At Teemika we offer dedicated Sales Assistants, who function as part of your in-house sales team. Teemika sales assistants help you save time and money on the sales process, allowing you to approach more prospects with better information.</p>
            <h3><strong>Your dedicated sales assistant can help you:</strong></h3>
            <ul>
                <li>Conduct research on prospective customers</li>
                <li>Create databases of prospects using the Internet, social media, and other sources</li>
                <li>First and second line lead handling</li>
                <li>Schedule calls and set appointments for your sales force</li>
                <li>Contact cold prospects via  Linkedin and email</li>
                <li>Enter data in  your CRM</li>
                <li>Perform market research tasks</li>
                <li>Create RFIs and presentations for sales meetings</li>
                <li>Perform  other tasks that can be done remotely via Internet</li>
            </ul>
            <p>Teemika assistants work in flexible time blocks. Each assistant can work either part or full time
                (2.5 or 5 days per week), meaning that each assistant works with 2 clients maximum. This guarantees your assistant will better understand your product, service, and customers</p>

            <h3><strong>Why hire sales assistants with Teemika?</strong></h3>
            <ul>
                <li>We <strong>save you time</strong> on sales and support tasks. Routine tasks require a lot of time, but the sales process simply can’t go on without them.</li>i>You are looking for a <strong>cost-effective</strong> way to increase ROI on sales activities. Our prices start.</li>
                <li>Adding additional people to your sales team will help you optimize the time of your sales force and close more deals.</li>
                <li>You need to learn more about your potential customers. We will do research for you using all available channels. This data will help you develop a customized approach and generate <strong>more prospects and leads.</strong></li>
                <li>Your team doesn’t devote enough time to fill in your CRM accurately. You need this information, and we will help you keep your sales data current.</li>
                <li>If you want to <strong>motivate your best sales professionals</strong>, there’s no better way than to reward their work with sales assistant. It’s a cost-effective way to help your all-stars get more done, close more deals, and stay focused on what really matters.</li>
                <li>You want to <strong>work with smart, reliable, and motivated people.</strong> All our assistants have higher educations and speak English and/or other languages required for the execution of your customer support or sales tasks.</li>
                <li>You’re not ready to hire full-time in-house staff. If you have <strong>seasonal or immediate support needs</strong>, Mindy Supports is a great resource. We can get your assistant or team moving quickly, and terminating our services only requires 30 day notice.</li>
            </ul>'
        ]);

        Page::create([
            'id' => 2,
            'alias' => 'sales',
            'text' => '<p class="support-title col-sm-12"><span>Sales assistants</span> on distance</p>
            <p>At Teemika we offer dedicated Sales Assistants, who function as part of your in-house sales team. Teemika sales assistants help you save time and money on the sales process, allowing you to approach more prospects with better information.</p>
            <h3><strong>Your dedicated sales assistant can help you:</strong></h3>
            <ul>
                <li>Conduct research on prospective customers</li>
                <li>Create databases of prospects using the Internet, social media, and other sources</li>
                <li>First and second line lead handling</li>
                <li>Schedule calls and set appointments for your sales force</li>
                <li>Contact cold prospects via  Linkedin and email</li>
                <li>Enter data in  your CRM</li>
                <li>Perform market research tasks</li>
                <li>Create RFIs and presentations for sales meetings</li>
                <li>Perform  other tasks that can be done remotely via Internet</li>
            </ul>
            <p>Teemika assistants work in flexible time blocks. Each assistant can work either part or full time
                (2.5 or 5 days per week), meaning that each assistant works with 2 clients maximum. This guarantees your assistant will better understand your product, service, and customers</p>

            <h3><strong>Why hire sales assistants with Teemika?</strong></h3>
            <ul>
                <li>We <strong>save you time</strong> on sales and support tasks. Routine tasks require a lot of time, but the sales process simply can’t go on without them.</li>i>You are looking for a <strong>cost-effective</strong> way to increase ROI on sales activities. Our prices start.</li>
                <li>Adding additional people to your sales team will help you optimize the time of your sales force and close more deals.</li>
                <li>You need to learn more about your potential customers. We will do research for you using all available channels. This data will help you develop a customized approach and generate <strong>more prospects and leads.</strong></li>
                <li>Your team doesn’t devote enough time to fill in your CRM accurately. You need this information, and we will help you keep your sales data current.</li>
                <li>If you want to <strong>motivate your best sales professionals</strong>, there’s no better way than to reward their work with sales assistant. It’s a cost-effective way to help your all-stars get more done, close more deals, and stay focused on what really matters.</li>
                <li>You want to <strong>work with smart, reliable, and motivated people.</strong> All our assistants have higher educations and speak English and/or other languages required for the execution of your customer support or sales tasks.</li>
                <li>You’re not ready to hire full-time in-house staff. If you have <strong>seasonal or immediate support needs</strong>, Mindy Supports is a great resource. We can get your assistant or team moving quickly, and terminating our services only requires 30 day notice.</li>
            </ul>'
        ]);

        Page::create([
            'id' => 3,
            'alias' => 'marketing',
            'text' => '<p class="support-title col-sm-12"><span>Sales assistants</span> on distance</p>
            <p>At Teemika we offer dedicated Sales Assistants, who function as part of your in-house sales team. Teemika sales assistants help you save time and money on the sales process, allowing you to approach more prospects with better information.</p>
            <h3><strong>Your dedicated sales assistant can help you:</strong></h3>
            <ul>
                <li>Conduct research on prospective customers</li>
                <li>Create databases of prospects using the Internet, social media, and other sources</li>
                <li>First and second line lead handling</li>
                <li>Schedule calls and set appointments for your sales force</li>
                <li>Contact cold prospects via  Linkedin and email</li>
                <li>Enter data in  your CRM</li>
                <li>Perform market research tasks</li>
                <li>Create RFIs and presentations for sales meetings</li>
                <li>Perform  other tasks that can be done remotely via Internet</li>
            </ul>
            <p>Teemika assistants work in flexible time blocks. Each assistant can work either part or full time
                (2.5 or 5 days per week), meaning that each assistant works with 2 clients maximum. This guarantees your assistant will better understand your product, service, and customers</p>

            <h3><strong>Why hire sales assistants with Teemika?</strong></h3>
            <ul>
                <li>We <strong>save you time</strong> on sales and support tasks. Routine tasks require a lot of time, but the sales process simply can’t go on without them.</li>i>You are looking for a <strong>cost-effective</strong> way to increase ROI on sales activities. Our prices start.</li>
                <li>Adding additional people to your sales team will help you optimize the time of your sales force and close more deals.</li>
                <li>You need to learn more about your potential customers. We will do research for you using all available channels. This data will help you develop a customized approach and generate <strong>more prospects and leads.</strong></li>
                <li>Your team doesn’t devote enough time to fill in your CRM accurately. You need this information, and we will help you keep your sales data current.</li>
                <li>If you want to <strong>motivate your best sales professionals</strong>, there’s no better way than to reward their work with sales assistant. It’s a cost-effective way to help your all-stars get more done, close more deals, and stay focused on what really matters.</li>
                <li>You want to <strong>work with smart, reliable, and motivated people.</strong> All our assistants have higher educations and speak English and/or other languages required for the execution of your customer support or sales tasks.</li>
                <li>You’re not ready to hire full-time in-house staff. If you have <strong>seasonal or immediate support needs</strong>, Mindy Supports is a great resource. We can get your assistant or team moving quickly, and terminating our services only requires 30 day notice.</li>
            </ul>'
        ]);

    }
}