<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('DegreeSeeder');
        $this->call('FatherMotherStatusSeeder');
        $this->call('JobSeeder');
        $this->call('MajorSeeder');
        $this->call('MilitaryDetailSeeder');
        $this->call('ScholarshipSeeder');
        $this->call('SkillSeeder');
        $this->call('StudentLoanSeeder');
	}

}
