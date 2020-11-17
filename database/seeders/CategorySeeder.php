<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['parent' => NULL, 'name' => 'Arts', 'programming' => 'Arts']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Arts')->first()->guid, 'name' => 'Books', 'programming' => 'Books']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Arts')->first()->guid, 'name' => 'Design', 'programming' => 'Design']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Arts')->first()->guid, 'name' => 'Fashion & Beauty', 'programming' => 'Fashion &amp; Beauty']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Arts')->first()->guid, 'name' => 'Food', 'programming' => 'Food']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Arts')->first()->guid, 'name' => 'Performing Arts', 'programming' => 'Performing Arts']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Arts')->first()->guid, 'name' => 'Visual Arts', 'programming' => 'Visual Arts']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Business', 'programming' => 'Business']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Business')->first()->guid, 'name' => 'Careers', 'programming' => 'Careers']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Business')->first()->guid, 'name' => 'Entrepreneurship', 'programming' => 'Entrepreneurship']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Business')->first()->guid, 'name' => 'Investing', 'programming' => 'Investing']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Business')->first()->guid, 'name' => 'Management', 'programming' => 'Management']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Business')->first()->guid, 'name' => 'Marketing', 'programming' => 'Marketing']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Business')->first()->guid, 'name' => 'Non-Profit', 'programming' => 'Non-Profit']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Comedy', 'programming' => 'Comedy']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Comedy')->first()->guid, 'name' => 'Comedy Interviews', 'programming' => 'Comedy Interviews']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Comedy')->first()->guid, 'name' => 'Improv', 'programming' => 'Improv']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Comedy')->first()->guid, 'name' => 'Stand-Up', 'programming' => 'Stand-Up']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Education', 'programming' => 'Education']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Education')->first()->guid, 'name' => 'Courses', 'programming' => 'Courses']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Education')->first()->guid, 'name' => 'How To', 'programming' => 'How To']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Education')->first()->guid, 'name' => 'Language Learning', 'programming' => 'Language Learning']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Education')->first()->guid, 'name' => 'Self-Improvement', 'programming' => 'Self-Improvement']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Fiction', 'programming' => 'Fiction']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Fiction')->first()->guid, 'name' => 'Comedy Fiction', 'programming' => 'Comedy Fiction']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Fiction')->first()->guid, 'name' => 'Drama', 'programming' => 'Drama']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Fiction')->first()->guid, 'name' => 'Science Fiction', 'programming' => 'Science Fiction']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Government', 'programming' => 'Government']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'History', 'programming' => 'History']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Health & Fitness', 'programming' => 'Health &amp; Fitness']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Health & Fitness')->first()->guid, 'name' => 'Alternative Health', 'programming' => 'Alternative Health']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Health & Fitness')->first()->guid, 'name' => 'Fitness', 'programming' => 'Fitness']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Health & Fitness')->first()->guid, 'name' => 'Medicine', 'programming' => 'Medicine']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Health & Fitness')->first()->guid, 'name' => 'Mental Health', 'programming' => 'Mental Health']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Health & Fitness')->first()->guid, 'name' => 'Nutrition', 'programming' => 'Nutrition']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Health & Fitness')->first()->guid, 'name' => 'Sexuality', 'programming' => 'Sexuality']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Kids & Family', 'programming' => 'Kids &amp; Family']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Kids & Family')->first()->guid, 'name' => 'Education for Kids', 'programming' => 'Education for Kids']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Kids & Family')->first()->guid, 'name' => 'Parenting', 'programming' => 'Parenting']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Kids & Family')->first()->guid, 'name' => 'Pets & Animals', 'programming' => 'Pets &amp; Animals']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Kids & Family')->first()->guid, 'name' => 'Stories for Kids', 'programming' => 'Stories for Kids']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Leisure', 'programming' => 'Leisure']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Animation & Manga', 'programming' => 'Animation &amp; Manga']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Automotive', 'programming' => 'Automotive']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Aviation', 'programming' => 'Aviation']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Crafts', 'programming' => 'Crafts']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Games', 'programming' => 'Games']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Hobbies', 'programming' => 'Hobbies']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Home & Garden', 'programming' => 'Home &amp; Gargen']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Leisure')->first()->guid, 'name' => 'Video Games', 'programming' => 'Video Games']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Music', 'programming' => 'Music']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Music')->first()->guid, 'name' => 'Music Commentary', 'programming' => 'Music Commentary']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Music')->first()->guid, 'name' => 'Music History', 'programming' => 'Music History']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Music')->first()->guid, 'name' => 'Music Interviews', 'programming' => 'Music Interviews']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'News', 'programming' => 'News']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'News')->first()->guid, 'name' => 'Business News', 'programming' => 'Business News']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'News')->first()->guid, 'name' => 'Daily News', 'programming' => 'Daily News']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'News')->first()->guid, 'name' => 'Entertainment News', 'programming' => 'Entertainment News']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'News')->first()->guid, 'name' => 'News Commentary', 'programming' => 'Entertainment Commentary']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'News')->first()->guid, 'name' => 'Politics', 'programming' => 'Politics']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'News')->first()->guid, 'name' => 'Sports News', 'programming' => 'Sports News']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'News')->first()->guid, 'name' => 'Tech News', 'programming' => 'Tech News']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Religion & Spirituality', 'programming' => 'Religion &amp; Spirituality']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Religion & Spirituality')->first()->guid, 'name' => 'Buddhism', 'programming' => 'Buddhism']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Religion & Spirituality')->first()->guid, 'name' => 'Christianity', 'programming' => 'Christianity']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Religion & Spirituality')->first()->guid, 'name' => 'Hinduism', 'programming' => 'Hinduism']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Religion & Spirituality')->first()->guid, 'name' => 'Islam', 'programming' => 'Islam']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Religion & Spirituality')->first()->guid, 'name' => 'Judaism', 'programming' => 'Judaism']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Religion & Spirituality')->first()->guid, 'name' => 'Religion', 'programming' => 'Religion']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Religion & Spirituality')->first()->guid, 'name' => 'Spirituality', 'programming' => 'Spirituality']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Science', 'programming' => 'Science']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Astronomy', 'programming' => 'Astronomy']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Chemistry', 'programming' => 'Chemistry']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Earth Sciences', 'programming' => 'Earth Sciences']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Life Sciences', 'programming' => 'Life Sciences']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Mathematics', 'programming' => 'Mathematics']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Natural Sciences', 'programming' => 'Natural Sciences']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Nature', 'programming' => 'Nature']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Physics', 'programming' => 'Physics']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Science')->first()->guid, 'name' => 'Social Sciences', 'programming' => 'Social Sciences']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Society & Culture', 'programming' => 'Society &amp; Culture']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Society & Culture')->first()->guid, 'name' => 'Documentary', 'programming' => 'Documentary']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Society & Culture')->first()->guid, 'name' => 'Personal Journals', 'programming' => 'Personal Journals']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Society & Culture')->first()->guid, 'name' => 'Philosophy', 'programming' => 'Philosophy']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Society & Culture')->first()->guid, 'name' => 'Places & Travel', 'programming' => 'Places &amp; Travel']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Society & Culture')->first()->guid, 'name' => 'Relationships', 'programming' => 'Relationships']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Sports', 'programming' => 'Sports']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Baseball', 'programming' => 'Baseball']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Basketball', 'programming' => 'Basketball']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Cricket', 'programming' => 'Cricket']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Fantasy Sports', 'programming' => 'Fantasy Sports']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Football', 'programming' => 'Football']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Golf', 'programming' => 'Golf']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Hockey', 'programming' => 'Hockey']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Rugby', 'programming' => 'Rugby']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Running', 'programming' => 'Running']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Soccer', 'programming' => 'Soccer']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Swimming', 'programming' => 'Swimming']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Tennis', 'programming' => 'Tennis']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Volleyball', 'programming' => 'Volleyball']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Wilderness', 'programming' => 'Wilderness']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'Sports')->first()->guid, 'name' => 'Wrestling', 'programming' => 'Wrestling']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Technology', 'programming' => 'Technology']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'True Crime', 'programming' => 'True Crime']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'TV & Film', 'programming' => 'TV &amp; Film']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'TV & Film')->first()->guid, 'name' => 'After Shows', 'programming' => 'After Shows']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'TV & Film')->first()->guid, 'name' => 'Film History', 'programming' => 'Film History']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'TV & Film')->first()->guid, 'name' => 'Film Interviews', 'programming' => 'Film Interviews']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'TV & Film')->first()->guid, 'name' => 'Film Reviews', 'programming' => 'Film Reviews']);
        Category::firstOrCreate(['parent' => Category::where('name', '=', 'TV & Film')->first()->guid, 'name' => 'TV Reviews', 'programming' => 'TV Reviews']);
    }
}
