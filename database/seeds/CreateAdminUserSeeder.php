<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Admin;
// use App\filiere;
use App\Equipe;
use App\Formateur;
use App\Promo;
use App\Apprenant;


class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // insert sample user as the system admin


  $admin1=  Admin::create([
        'username' => 'Régis',
        'password' => bcrypt('passer123'),
        'email' => 'admin1@email.com',]);

$admin1->assignRole('superadmin');


  $admin7=  Admin::create([
        'username' => 'admin7',
        'password' => bcrypt('passer'),
        'email' => 'admin7@email.com',
    ]);
    $admin7->assignRole('superadmin');


    $directeur=  Admin::create([
        'username' => 'Directeur de Promess',
        'password' => bcrypt('passer123'),
        'email' => 'directeur@email.com',
    ]);

    $directeur->assignRole('superadmin');

    $apprenant=  Apprenant::create([
        'nom' => 'apprenant1',
        'password' => bcrypt('passer'),
        'candidat_id'=> 1,
        'email' => 'apprenant1@email.com',
    ]);

    $apprenant->assignRole('Apprenant');


    $formateur=  Formateur::create([
        'nom' => 'formateur',
        'password' => bcrypt('passer'),
        'email' => 'formateur@email.com',
    ]);

    $formateur->assignRole('Formateur');


    $membre1=  Equipe::create([
        'nom_prenom' => 'Responsable Pédagogique',
        'password' => bcrypt('passer'),
        'email' => 'membre1@email.com',
    ]);

    $membre1->assignRole('Resp-Pedagogique');

    $membre2=  Equipe::create([
        'nom_prenom'=>'membre Promes',
        'password' => bcrypt('passer'),
        'email' => 'membre2@email.com',
    ]);

    $membre2->assignRole('Resp-Admin-Comptable');

    $membre3=  Equipe::create([
        'nom_prenom' => 'Responsable Relations Extérieures',
        'password' => bcrypt('passer'),
        'email' => 'membre3@email.com',
    ]);

    $membre3->assignRole('Resp-Relation-Ext');


    $membre4=  Equipe::create([
        'nom_prenom' => 'Responsable ULDLR',
        'password' => bcrypt('passer'),
        'email' => 'membre4@email.com',
    ]);
    $membre4->assignRole('Resp-ULDLR');


    $membre5=  Equipe::create([
        'nom_prenom' => 'Responsable AccEd',
        'password' => bcrypt('passer'),
        'email' => 'membre5@email.com',
    ]);

    $membre5->assignRole('Responsable-AccEd');

    $membre6=  Equipe::create([
        'nom_prenom' => 'Responsable Fond PVSYST',
        'password' => bcrypt('passer'),
        'email' => 'membre6@email.com',
    ]);
    $membre6->assignRole('Resp-Fond-PVSYST');


     Promo::create([
        'nom' => 'FCIG1',
    ]);

    Promo::create([
        'nom' => 'formation continue',
    ]);
 /*    Filiere::create([
        'nom' => 'FI',
    ]);
    Filiere::create([
        'nom' => 'FC',
    ]); */

    }
}
