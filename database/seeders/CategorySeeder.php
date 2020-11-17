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
        $arts = Category::firstOrCreate(['parent' => NULL, 'name' => 'Arts', 'programming' => 'Arts']);
        Category::firstOrCreate(['parent' => $arts->id, 'name' => 'Books', 'programming' => 'Books']);
        Category::firstOrCreate(['parent' => $arts->id, 'name' => 'Design', 'programming' => 'Design']);
        Category::firstOrCreate(['parent' => $arts->id, 'name' => 'Fashion & Beauty', 'programming' => 'Fashion &amp; Beauty']);
        Category::firstOrCreate(['parent' => $arts->id, 'name' => 'Food', 'programming' => 'Food']);
        Category::firstOrCreate(['parent' => $arts->id, 'name' => 'Performing Arts', 'programming' => 'Performing Arts']);
        Category::firstOrCreate(['parent' => $arts->id, 'name' => 'Visual Arts', 'programming' => 'Visual Arts']);
        $business = Category::firstOrCreate(['parent' => NULL, 'name' => 'Business', 'programming' => 'Business']);
        Category::firstOrCreate(['parent' => $business->id, 'name' => 'Careers', 'programming' => 'Careers']);
        Category::firstOrCreate(['parent' => $business->id, 'name' => 'Entrepreneurship', 'programming' => 'Entrepreneurship']);
        Category::firstOrCreate(['parent' => $business->id, 'name' => 'Investing', 'programming' => 'Investing']);
        Category::firstOrCreate(['parent' => $business->id, 'name' => 'Management', 'programming' => 'Management']);
        Category::firstOrCreate(['parent' => $business->id, 'name' => 'Marketing', 'programming' => 'Marketing']);
        Category::firstOrCreate(['parent' => $business->id, 'name' => 'Non-Profit', 'programming' => 'Non-Profit']);
        $comedy = Category::firstOrCreate(['parent' => NULL, 'name' => 'Comedy', 'programming' => 'Comedy']);
        Category::firstOrCreate(['parent' => $comedy->id, 'name' => 'Comedy Interviews', 'programming' => 'Comedy Interviews']);
        Category::firstOrCreate(['parent' => $comedy->id, 'name' => 'Improv', 'programming' => 'Improv']);
        Category::firstOrCreate(['parent' => $comedy->id, 'name' => 'Stand-Up', 'programming' => 'Stand-Up']);
        $education = Category::firstOrCreate(['parent' => NULL, 'name' => 'Education', 'programming' => 'Education']);
        Category::firstOrCreate(['parent' => $education->id, 'name' => 'Courses', 'programming' => 'Courses']);
        Category::firstOrCreate(['parent' => $education->id, 'name' => 'How To', 'programming' => 'How To']);
        Category::firstOrCreate(['parent' => $education->id, 'name' => 'Language Learning', 'programming' => 'Language Learning']);
        Category::firstOrCreate(['parent' => $education->id, 'name' => 'Self-Improvement', 'programming' => 'Self-Improvement']);
        $fiction = Category::firstOrCreate(['parent' => NULL, 'name' => 'Fiction', 'programming' => 'Fiction']);
        Category::firstOrCreate(['parent' => $fiction->id, 'name' => 'Comedy Fiction', 'programming' => 'Comedy Fiction']);
        Category::firstOrCreate(['parent' => $fiction->id, 'name' => 'Drama', 'programming' => 'Drama']);
        Category::firstOrCreate(['parent' => $fiction->id, 'name' => 'Science Fiction', 'programming' => 'Science Fiction']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Government', 'programming' => 'Government']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'History', 'programming' => 'History']);
        $health = Category::firstOrCreate(['parent' => NULL, 'name' => 'Health & Fitness', 'programming' => 'Health &amp; Fitness']);
        Category::firstOrCreate(['parent' => $health->id, 'name' => 'Alternative Health', 'programming' => 'Alternative Health']);
        Category::firstOrCreate(['parent' => $health->id, 'name' => 'Fitness', 'programming' => 'Fitness']);
        Category::firstOrCreate(['parent' => $health->id, 'name' => 'Medicine', 'programming' => 'Medicine']);
        Category::firstOrCreate(['parent' => $health->id, 'name' => 'Mental Health', 'programming' => 'Mental Health']);
        Category::firstOrCreate(['parent' => $health->id, 'name' => 'Nutrition', 'programming' => 'Nutrition']);
        Category::firstOrCreate(['parent' => $health->id, 'name' => 'Sexuality', 'programming' => 'Sexuality']);
        $kids = Category::firstOrCreate(['parent' => NULL, 'name' => 'Kids & Family', 'programming' => 'Kids &amp; Family']);
        Category::firstOrCreate(['parent' => $kids->id, 'name' => 'Education for Kids', 'programming' => 'Education for Kids']);
        Category::firstOrCreate(['parent' => $kids->id, 'name' => 'Parenting', 'programming' => 'Parenting']);
        Category::firstOrCreate(['parent' => $kids->id, 'name' => 'Pets & Animals', 'programming' => 'Pets &amp; Animals']);
        Category::firstOrCreate(['parent' => $kids->id, 'name' => 'Stories for Kids', 'programming' => 'Stories for Kids']);
        $leisure = Category::firstOrCreate(['parent' => NULL, 'name' => 'Leisure', 'programming' => 'Leisure']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Animation & Manga', 'programming' => 'Animation &amp; Manga']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Automotive', 'programming' => 'Automotive']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Aviation', 'programming' => 'Aviation']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Crafts', 'programming' => 'Crafts']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Games', 'programming' => 'Games']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Hobbies', 'programming' => 'Hobbies']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Home & Garden', 'programming' => 'Home &amp; Gargen']);
        Category::firstOrCreate(['parent' => $leisure->id, 'name' => 'Video Games', 'programming' => 'Video Games']);
        $music = Category::firstOrCreate(['parent' => NULL, 'name' => 'Music', 'programming' => 'Music']);
        Category::firstOrCreate(['parent' => $music->id, 'name' => 'Music Commentary', 'programming' => 'Music Commentary']);
        Category::firstOrCreate(['parent' => $music->id, 'name' => 'Music History', 'programming' => 'Music History']);
        Category::firstOrCreate(['parent' => $music->id, 'name' => 'Music Interviews', 'programming' => 'Music Interviews']);
        $news = Category::firstOrCreate(['parent' => NULL, 'name' => 'News', 'programming' => 'News']);
        Category::firstOrCreate(['parent' => $news->id, 'name' => 'Business News', 'programming' => 'Business News']);
        Category::firstOrCreate(['parent' => $news->id, 'name' => 'Daily News', 'programming' => 'Daily News']);
        Category::firstOrCreate(['parent' => $news->id, 'name' => 'Entertainment News', 'programming' => 'Entertainment News']);
        Category::firstOrCreate(['parent' => $news->id, 'name' => 'News Commentary', 'programming' => 'Entertainment Commentary']);
        Category::firstOrCreate(['parent' => $news->id, 'name' => 'Politics', 'programming' => 'Politics']);
        Category::firstOrCreate(['parent' => $news->id, 'name' => 'Sports News', 'programming' => 'Sports News']);
        Category::firstOrCreate(['parent' => $news->id, 'name' => 'Tech News', 'programming' => 'Tech News']);
        $religion = Category::firstOrCreate(['parent' => NULL, 'name' => 'Religion & Spirituality', 'programming' => 'Religion &amp; Spirituality']);
        Category::firstOrCreate(['parent' => $religion->id, 'name' => 'Buddhism', 'programming' => 'Buddhism']);
        Category::firstOrCreate(['parent' => $religion->id, 'name' => 'Christianity', 'programming' => 'Christianity']);
        Category::firstOrCreate(['parent' => $religion->id, 'name' => 'Hinduism', 'programming' => 'Hinduism']);
        Category::firstOrCreate(['parent' => $religion->id, 'name' => 'Islam', 'programming' => 'Islam']);
        Category::firstOrCreate(['parent' => $religion->id, 'name' => 'Judaism', 'programming' => 'Judaism']);
        Category::firstOrCreate(['parent' => $religion->id, 'name' => 'Religion', 'programming' => 'Religion']);
        Category::firstOrCreate(['parent' => $religion->id, 'name' => 'Spirituality', 'programming' => 'Spirituality']);
        $science = Category::firstOrCreate(['parent' => NULL, 'name' => 'Science', 'programming' => 'Science']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Astronomy', 'programming' => 'Astronomy']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Chemistry', 'programming' => 'Chemistry']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Earth Sciences', 'programming' => 'Earth Sciences']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Life Sciences', 'programming' => 'Life Sciences']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Mathematics', 'programming' => 'Mathematics']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Natural Sciences', 'programming' => 'Natural Sciences']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Nature', 'programming' => 'Nature']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Physics', 'programming' => 'Physics']);
        Category::firstOrCreate(['parent' => $science->id, 'name' => 'Social Sciences', 'programming' => 'Social Sciences']);
        $society = Category::firstOrCreate(['parent' => NULL, 'name' => 'Society & Culture', 'programming' => 'Society &amp; Culture']);
        Category::firstOrCreate(['parent' => $society->id, 'name' => 'Documentary', 'programming' => 'Documentary']);
        Category::firstOrCreate(['parent' => $society->id, 'name' => 'Personal Journals', 'programming' => 'Personal Journals']);
        Category::firstOrCreate(['parent' => $society->id, 'name' => 'Philosophy', 'programming' => 'Philosophy']);
        Category::firstOrCreate(['parent' => $society->id, 'name' => 'Places & Travel', 'programming' => 'Places &amp; Travel']);
        Category::firstOrCreate(['parent' => $society->id, 'name' => 'Relationships', 'programming' => 'Relationships']);
        $sports = Category::firstOrCreate(['parent' => NULL, 'name' => 'Sports', 'programming' => 'Sports']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Baseball', 'programming' => 'Baseball']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Basketball', 'programming' => 'Basketball']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Cricket', 'programming' => 'Cricket']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Fantasy Sports', 'programming' => 'Fantasy Sports']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Football', 'programming' => 'Football']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Golf', 'programming' => 'Golf']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Hockey', 'programming' => 'Hockey']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Rugby', 'programming' => 'Rugby']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Running', 'programming' => 'Running']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Soccer', 'programming' => 'Soccer']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Swimming', 'programming' => 'Swimming']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Tennis', 'programming' => 'Tennis']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Volleyball', 'programming' => 'Volleyball']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Wilderness', 'programming' => 'Wilderness']);
        Category::firstOrCreate(['parent' => $sports->id, 'name' => 'Wrestling', 'programming' => 'Wrestling']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'Technology', 'programming' => 'Technology']);
        Category::firstOrCreate(['parent' => NULL, 'name' => 'True Crime', 'programming' => 'True Crime']);
        $tv = Category::firstOrCreate(['parent' => NULL, 'name' => 'TV & Film', 'programming' => 'TV &amp; Film']);
        Category::firstOrCreate(['parent' => $tv->id, 'name' => 'After Shows', 'programming' => 'After Shows']);
        Category::firstOrCreate(['parent' => $tv->id, 'name' => 'Film History', 'programming' => 'Film History']);
        Category::firstOrCreate(['parent' => $tv->id, 'name' => 'Film Interviews', 'programming' => 'Film Interviews']);
        Category::firstOrCreate(['parent' => $tv->id, 'name' => 'Film Reviews', 'programming' => 'Film Reviews']);
        Category::firstOrCreate(['parent' => $tv->id, 'name' => 'TV Reviews', 'programming' => 'TV Reviews']);
    }
}
