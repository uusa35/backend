<?php

use App\Models\Privilege;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['super', 'admin', 'designer', 'company'];
        $designerPrivileges = ['collection', 'slider', 'gallery', 'order', 'coupon', 'size', 'color'];
        $companyPrivileges = ['product', 'slider', 'gallery', 'order', 'coupon', 'size', 'color'];
        $privileges = Privilege::all();
        foreach ($roles as $k => $v) {
            $role = factory(Role::class)->create(['name' => $v]);
            if ($role->name === 'super') {
                $role->update(['is_super' => $v === 'super' ? 1 : 0, 'is_admin' => true]);
                $role->privileges()->saveMany($privileges);
                $rolePrivileges = $role->privileges()->get();
                foreach ($rolePrivileges as $privilege) {
                    $privilege->roles()->updateExistingPivot($role->id, ['view' => true, 'create' => true, 'update' => true, 'delete' => true]);
                }
            } else if ($role->name === 'admin') {
                $role->update(['is_admin' => $v === 'admin' ? 1 : 0, 'is_admin' => true]);
                $role->privileges()->saveMany($privileges);
                $rolePrivileges = $role->privileges()->get();
                foreach ($rolePrivileges as $privilege) {
                    $privilege->roles()->updateExistingPivot($role->id, ['view' => true, 'create' => true, 'update' => true, 'delete' => true]);
                }
            } else if ($role->name === 'designer') {
                $role->update(['is_admin' => $v === 'admin' ? 1 : 0, 'is_visible' => true, 'is_designer' => true]);
                $privileges = Privilege::whereIn('name', $designerPrivileges)->get();
                $role->privileges()->saveMany($privileges);
                $rolePrivileges = $role->privileges()->get();
                foreach ($rolePrivileges as $privilege) {
                    $privilege->roles()->updateExistingPivot($role->id, ['view' => true, 'create' => true, 'update' => true, 'delete' => true]);
                }
            } else if ($role->name === 'company') {
                $role->update(['is_admin' => $v === 'admin' ? 1 : 0, 'is_visible' => true, 'is_company' => true ]);
                $privileges = Privilege::whereIn('name', $companyPrivileges)->get();
                $role->privileges()->saveMany($privileges);
                $rolePrivileges = $role->privileges()->get();
                foreach ($rolePrivileges as $privilege) {
                    $privilege->roles()->updateExistingPivot($role->id, ['view' => true, 'create' => true, 'update' => true, 'delete' => true]);
                }
            }
        }
    }
}
