<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Department;
use App\ProgramOffered;
use App\Permission;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
    
          Eloquent::unguard();
          $this->call(UserSeeder::class);
          $this->command->info('User seeded!!'); // 
         // $this->call(PermissionTableSeeder::class);
          $this->command->info('Permission app seeds finished.');
    }
}

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear our database ------------------------------------------
        DB::table('users')->delete();
        

        $first_user = User::create(array(
            'name'         => 'Muhammad Nauman',
            'email'         => 'mhmmd.nauman@gmail.com',
            'password' => bcrypt('12345678'),
        ));

        
        
        $this->command->info('Users are seeded!');
        
        // now seed the departments
        DB::table('department')->delete();
        

        $first_dpt = Department::create(array(
            'department_name'         => 'Computer Science',
            'contact'         => '0313',
            'status' => 'Active',
            'hod_id' => $first_user->id,
            'entered_id' => $first_user->id,
        ));
        
        $this->command->info('Department are seeded!');
        
        // now seed the programs
        DB::table('programs_offered')->delete();
        

        $first_program = ProgramOffered::create(array(
            'program_name'      => 'BSCS',
            'duration'          => '4',
            'code'              =>'BS',
            'status'            => 'Active',
            'incharge_id'       => $first_user->id,
            'entered_id'        => $first_user->id,
            'department_id'     => $first_dpt->id,
        ));
        $this->command->info('Program are seeded!');
        
    }


}

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            //roles
            DB::table('roles')->delete();
            DB::table('permissions')->delete();
            $owner = new Role();
            $owner->name         = 'owner';
            $owner->display_name = 'Project Owner'; // optional
            $owner->description  = 'User is the owner of a given project'; // optional
            $owner->save();
            
            $admin = new Role();
            $admin->name         = 'admin';
            $admin->display_name = 'User Administrator'; // optional
            $admin->description  = 'User is allowed to manage and edit other users'; // optional
            $admin->save();
            //
                $permission = [

        	[

        		'name' => 'role-list',

        		'display_name' => 'Display Role Listing',

        		'description' => 'See only Listing Of Role'

        	],

        	[

        		'name' => 'role-create',

        		'display_name' => 'Create Role',

        		'description' => 'Create New Role'

        	],

        	[

        		'name' => 'role-edit',

        		'display_name' => 'Edit Role',

        		'description' => 'Edit Role'

        	],

        	[

        		'name' => 'role-delete',

        		'display_name' => 'Delete Role',

        		'description' => 'Delete Role'

        	],

        	[

        		'name' => 'item-list',

        		'display_name' => 'Display Item Listing',

        		'description' => 'See only Listing Of Item'

        	],

        	[

        		'name' => 'item-create',

        		'display_name' => 'Create Item',

        		'description' => 'Create New Item'

        	],

        	[

        		'name' => 'item-edit',

        		'display_name' => 'Edit Item',

        		'description' => 'Edit Item'

        	],

        	[

        		'name' => 'item-delete',

        		'display_name' => 'Delete Item',

        		'description' => 'Delete Item'

        	]

        ];


        foreach ($permission as $key => $value) {

        	Permission::create($value);

        }

    }
}