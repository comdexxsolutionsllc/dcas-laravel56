<?php

use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{

    public function run()
    {
        // reset cached roles and permissions.
        app()['cache']->forget('spatie.permission.cache');

        // create permissions.
        foreach ((new \App\Permission)->getSeedData() as $permission) {
            $permission = factory(\App\Permission::class)->create([
                'name'       => $permission['name'],
                'guard_name' => $permission['guard_name'],
            ]);
        }

        // create roles.
        foreach ((new \App\Role)->getSeedData() as $role) {
            $role = factory(\App\Role::class)->create([
                'name'       => $role['name'],
                'guard_name' => $role['guard_name'],
            ]);
        }

        // give permission to roles.
        //$role->givePermissionTo(Permission::all());
        /** @todo */
    }
}
