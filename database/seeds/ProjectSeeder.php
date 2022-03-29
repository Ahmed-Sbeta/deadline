<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $proj = Project::create([
            'title' => 'Libyan Wings : Marketing Campaign ',
            'discription' => 'I am writing this letter to inform that the board of directors of our company has sanctioned the most prestigious project of building a two million tons blast furnace at the Austin unit of the company. Once the new project of the company gets commissioned the total production output of saleable steel will increase from the present two million tons to four million tons per annum. The new project is expected to be completed in the next three years ',
            'dueOn' => '2022-03-15',
            'budget' => '1212',
            'file' => 'OrangeandCreamCorporateExecutiveRecruiterResume.pdf',
            'creator' => '4'
        ]);

        $proj1 = Project::create([
            'title' => 'Dokaan : Marketing Campaign',
            'discription' => 'I feel that once the project is completed the production of our company will be doubled and this will help in improving the overall profit of our company. Hope that the projected gets completed in time so that it a landmark in the development saga of our company.',
            'dueOn' => '2022-03-15',
            'budget' => '5012',
            'file' => 'OrangeandCreamCorporateExecutiveRecruiterResume.pdf',
            'creator' => '1'
        ]);
        $proj2 = Project::create([
          'title' => 'Libyana : social media',
          'discription' => 'Hoping wealth, prosperity and good health towards your aura I would like to inform you with something of much importance and credit. With our unified efforts and undaunted struggles we together took this baby company to its prime first and now towards its adulthood. As by the law of nature,',
          'dueOn' => '2022-02-17',
          'budget' => '5012',
          'file' => 'OrangeandCreamCorporateExecutiveRecruiterResume.pdf',
          'creator' => '1'
        ]);
        $proj3 = Project::create([
          'title' => 'al-Madar : Montage',
          'discription' => 'The letter is to announce the Kick-off Meeting on the new project [Project Name] on [Date]. I am grateful to have [Recipient Name] on our team and looking forward to discussing more on the project with you. ',
          'dueOn' => '2022-02-19',
          'budget' => '5012',
          'file' => 'OrangeandCreamCorporateExecutiveRecruiterResume.pdf',
          'creator' => '1'
        ]);
        $proj3 = Project::create([
          'title' => 'Al-salam : New idintity and social media',
          'discription' => 'You can find the meeting agenda enclosed in this email for your reference. You can go through the same to get a better understanding of the project. ',
          'dueOn' => '2022-02-19',
          'budget' => '5012',
          'file' => 'OrangeandCreamCorporateExecutiveRecruiterResume.pdf',
          'creator' => '1'
        ]);

    }
}
